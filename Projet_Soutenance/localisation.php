<?php
include 'header.php';
?>
<style>
    html,body{
        padding:0;
        margin:0;
    }
    #content{
        position:relative;
    }
    #map{
        width:100%;
        min-height:400px;
    }
    #overlay{
        position : absolute;
        background: rgba(0,0,0,0.6);
        top: 0;
        left:0;
        right:0;
        bottom:0;
        text-align:center;
    }
</style>
<div id="content">
    <div id="map"></div>
</div>

<?php
include 'footer.php';
?>

<script>
    var map;
    function initMap() {

        //--> Configuration de l'icône personnalisée
        var imageMarqueur = {
            // Adresse de l'icône personnalisée
            url: 'assets/img/apple.png',
            // Taille de l'icône personnalisée
            size: new google.maps.Size(60, 90),
            // Origine de l'image, souvent (0, 0)
            origin: new google.maps.Point(0,0),
            // L'ancre de l'image. Correspond au point de l'image que l'on raccroche à la carte. Par exemple, si votre îcone est un drapeau, cela correspond à son mâts
            anchor: new google.maps.Point(0, 20)
        };

        function addMarker(target, title, content){
            var markerProduct = new google.maps.Marker({
                position: target,
                map: map,
                title: title,
                animation: google.maps.Animation.DROP,
                icon: imageMarqueur
            });
            var infoWindow = new google.maps.InfoWindow({
                content: '<h3>' + title + '</h3>' + content + ''
            });
            markerProduct.addListener('click', function () {
                infoWindow.open(map, markerProduct);
            })
        }
        var marqueur = new google.maps.Marker(marker);

        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 49.797, lng: 1.136},
            zoom: 9
        });

        google.maps.event.addListenerOnce(map, 'idle', function () {
            $.ajax({
                type: 'GET',
                url: 'marker.php',
                dataType: 'json',
                timeout: 4000,
                success: function (data) {
                    data.markers.forEach(function (marker) {
                        addMarker({lat: parseFloat(marker.lat) ,
                            lng: parseFloat(marker.lng)}, marker.title, marker.content);
                    });
                },
                error: function () {
                    alert('Connexion échouée');
                }
            })
        });

        //--> Configuration de l'icône personnalisée
        var image = {
            // Adresse de l'icône personnalisée
            url: 'img/Basket.png',
            // Taille de l'icône personnalisée
            size: new google.maps.Size(60, 90),
            // Origine de l'image, souvent (0, 0)
            origin: new google.maps.Point(0,0),
            // L'ancre de l'image. Correspond au point de l'image que l'on raccroche à la carte. Par exemple, si votre îcone est un drapeau, cela correspond à son mâts
            anchor: new google.maps.Point(0, 20)
        };
        //--> Insertion du marker avec l'ajout de l'icône
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(49.797, 1.136),
            map: map,
            title:"Germignon sauvage apparaît !",
            animation: google.maps.Animation.DROP,
            // On définit l'icône de ce marker comme étant l'image définie juste au-dessus
            icon: image
        });

        google.maps.event.addListener(map, 'click', function(e){
            $('#map').after(`<div id="overlay">
            <form action="marker.php">
                <p><input type="text" placeholder="Titre du nouveau marqueur" id="marker-title"></p>
                <select id="marker-select">
                <option value=""></option>
                </select>
                <p><textarea id="marker-infos" cols="30" rows="10" placeholder="Contenu du marqueur"></textarea></p>
                <p><button class="btn btn-default" id="cancel-marker">Annuler</button><button class="btn btn-default" id="create-marker">Créer</button></p>
            </form>
        </div>`);
            $('#cancel-marker').click(function(){
                $('#overlay').remove();
            });

            $('#create-marker').click(function(e2){
                e2.preventDefault();
                addMarker(e.latLng, $('#marker-title').val());

                $.ajax({
                    type: 'POST',
                    url: 'marker.php',
                    data: {
                        lat: e.latLng.lat().toFixed(6),
                        lng: e.latLng.lng().toFixed(6),
                        title: $('#marker-title').val(),
                        content: $('#marker-infos').val()
                    },
                    dataType: 'json',
                    timeout: 4000,
                    success: function (data) {
                        if(data.success){
                            $('#overlay').remove();
                        } else {
                            alert('Problème de connexion !');
                        }
                    }
                });

                $('#overlay').remove();
            });

        });

    }
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAskjqBbYMOnliiYqJx5DGAdnyp5cAm8jk&callback=initMap"
        type="text/javascript"></script>
