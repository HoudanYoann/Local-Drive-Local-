# Soutenance Mars 2018 - NFactory
 
:triangular_flag_on_post: Site de Livraison à Domicile de produits Locaux :triangular_flag_on_post:

Collaborateurs | Nom | Prénom | Lien Github | Email
------------ | ------------- | ------------- | ------------- | -------------
1 | Houdan | Yoann | [Github](https://github.com/HoudanYoann) | :mailbox_closed:
2 | Payen | David | [Github](https://github.com/David761) | :mailbox_closed:
3 | Bacon | Terry | [Github](https://github.com/terryKM) | :mailbox_closed:
4 | Boukhateb | Abdel-Illah | [Github](https://github.com/Abdel760) | :mailbox_closed:

#  :books: Index

* [Cahier des charges](https://github.com/HoudanYoann/Local-Drive-Local-/blob/master/README.md#cahier-des-charges)
* [Consultation du site](https://github.com/HoudanYoann/Local-Drive-Local-/blob/master/README.md#consultation-du-site)
* [Cas d'utilisation - Rôle : Visiteur](https://github.com/HoudanYoann/Local-Drive-Local-/blob/master/README.md#cas-dutilisation---r%C3%B4le-visiteur)
* [Rôle : Livreur](https://github.com/HoudanYoann/Local-Drive-Local-/blob/master/README.md#cas-dutilisation---r%C3%B4le-livreur)
* [Rôle : Producteur](https://github.com/HoudanYoann/Local-Drive-Local-/blob/master/README.md#cas-dutilisation---r%C3%B4le-producteur)
* [Rôle : Modérateur](https://github.com/HoudanYoann/Local-Drive-Local-/blob/master/README.md#cas-dutilisation---r%C3%B4le-mod%C3%A9rateur)
* [Rôle : SuperAdministrateur](https://github.com/HoudanYoann/Local-Drive-Local-/blob/master/README.md#cas-dutilisation---r%C3%B4le-superadministrateur)


## Cahier des charges 

- [x] Inscription des utilisateurs et leur authentification
- [ ] Gestion des rôles lors de leur inscription : Producteur/Livreur/Client 
- [ ] Permettre aux producteurs authentifiés de partager leurs positions
- [ ] Permettre aux livreurs authentifiés de partager leurs disponibilités
- [ ] Gestion du profil (avatar, nom, prénom)
- [ ] Localisation des Producteurs et Livreurs sur une API de Géolocalisation
- [ ] Créer et modifier des articles
- [ ] Système de notations
- [x] Filtrer les catégories
- [x] Ajouter ou supprimer des objets dans son panier

## Consultation du site

- [x] Afficher les articles
- [ ] Naviguer selon les catégories
- [x] Filtrer les catégories
- [ ] Partager les articles
- [x] Afficher les producteurs sur une API de Géolocalisation
- [ ] Afficher les livreurs sur une catégorie spécifique
- [ ] Voir les avis des utilisateurs concernant les Producteurs et Livreurs
- [ ] Voir les commentaires
- [x] S'inscrire
- [x] Se désinscrire
- [x] Contacter le support
- [ ] Payement et génération de facture et de bons de livraison

## Cas d'utilisation - Rôle: Visiteur

- [x] Reprend les fonctionnalités de consultation du site
- [x] S'authentifier 

## Cas d'utilisation - Rôle: Client
- [x] Consulter son panier
- [ ] Valide la/les commandes
- [x] Gérer le compte utilisateur (modification coordonnées, mot de passe, avatar, pseudo)
- [ ] Permet de noter la/les livraisons du Livreur
- [ ] Permet de commenter la/les livraisons du Livreur
- [ ] Permet de noter le/les produits du Producteur
- [ ] Permet de commenter le/les produits du Producteur
- [ ] Ajouter une note aux livreurs et producteurs
- [ ] Ajouter un commentaire et une note à l'article (produit)
- [ ] Valider la réception


## Cas d'utilisation - Rôle: Livreur

- [x] Reprend les fonctionnalités de consultation du site
- [x] S'authentifier 
- [x] Gérer le compte utilisateur (modification coordonnées, mot de passe, avatar, pseudo)
- [ ] Accepter ou refuser la mission
- [ ] Vision de la localisation du client/producteur
- [ ] Valide la réception au producteur (message envoyé au client et à l'administrateur)
- [ ] Valide la livraison au client (message envoyé au producteur et à l'administrateur)
- [ ] Écrire des commentaires
- [ ] Récapitulatif des livraisons effectuées

## Cas d'utilisation - Rôle: Producteur

- [x] Ajouts d'articles sur la page de son commerce
- [ ] Ajout d'horaire de son commerce
- [ ] Ajout de son positionnement géographique
- [x] Gérer le compte utilisateur (modification coordonnées, mot de passe, avatar, pseudo)
- [ ] Modifications possibile de toute les features listés (ci-dessus)
- [ ] Répondre à des commentaires
- [x] Contacter le support
- [ ] Valide quand il donne la commande au livreur
- [ ] Récapitulatif des ventes effectuées

## Cas d'utilisation - Rôle: Modérateur

- [ ] Valide les commentaires
- [ ] Modère les commentaires
- [ ] Modère les articles

## Cas d'utilisation - Rôle: SuperAdministrateur

- [ ] Modifie les permissions des livreurs, producteurs et utilisateurs
- [ ] Verrouiller des articles
- [ ] Ajout de nouveaux objets
- [ ] Bannir des utilisateurs
- [ ] Désactive le site Linkcal
