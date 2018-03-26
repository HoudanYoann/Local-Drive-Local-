<?php
header('Content-Type: application/json');
if(isset($_POST['lat']) AND isset($_POST['lng']) AND isset($_POST['title']) AND isset($_POST['content'])){
    if(!preg_match('#^[-+]?([1-8]?\d(\.\d{1,6})?|90(\.0+)?)$#', $_POST['lat'])){
        $errors['lat'] = true;
    }

    if(!preg_match('#^[-+]?(180(\.0+)?|((1[0-7]\d)|([1-9]?\d))(\.\d{1,6})?)$#', $_POST['lng'])){
        $errors['lng'] = true;
    }

    if(!preg_match('#^.{1,25}$#', $_POST['title'])){
        $errors['title'] = true;
    }

    if(!preg_match('#^.{1,500}$#', $_POST['content'])){
        $errors['content'] = true;
    }

    if(!isset($errors)){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=maps;charset=utf8', 'root', '');
        } catch(Exception $e){
            die($e->getMessage());
        }

        $response = $pdo->prepare('INSERT INTO markers(lat, lng, title, content) VALUES(?,?,?,?)');

        $response->execute(array(
            $_POST['lat'],
            $_POST['lng'],
            $_POST['title'],
            $_POST['content']
        ));

        if($response->rowCount() > 0){
            $success = true;
        } else {
            $errors['unknown'] = true;
        }

    }

    if(isset($errors)){
        echo json_encode(array('success' => false, 'errors' => $errors));
    } elseif(isset($success)){
        echo json_encode(array('success' => true));
    }

} else {

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=maps;charset=utf8', 'root', '');
    } catch(Exception $e){
        die($e->getMessage());
    }

    $response = $pdo->query('SELECT * FROM markers ORDER BY id');

    $markers = $response->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(array('markers' => $markers));
}