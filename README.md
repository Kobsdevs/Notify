<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Notify - Envoi de notifications en temps réel

Notify est une application web Laravel qui permet l'envoi de notifications en temps réel à un administrateur lorsque des utilisateurs créent de nouvelles publications. Le système utilise Reverb pour les notifications en temps réel.


## Fonctionnalités

Système d'authentification - Implémenté via l'interface utilisateur de Laravel (UI).

Gestion des utilisateurs - Deux types d'utilisateurs : super administrateur et utilisateur normal, identifiés par une colonne is_admin dans la table des utilisateurs.

Gestion des publications - Les utilisateurs peuvent créer des publications avec un titre et un corps.

Notifications en temps réel - À la création d'une publication, une notification en temps réel est envoyée à l'administrateur à l'aide de Reverb.

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants :

PHP >= 8.0
Composer
MySQL
Node.js & NPM
Laravel 9.x
Reverb (pour les notifications en temps réel)

### Installation
Clonez le dépôt :

bash
git clone https://github.com/votre-utilisateur/notify.git
cd notify
Installez les dépendances PHP via Composer :

bash
composer install
Configurez le fichier .env :

bash
cp .env.example .env
php artisan key:generate
Configurez votre base de données dans .env.

Installez les dépendances front-end avec NPM :

bash
npm install
npm run dev
Exécutez les migrations :

bash
php artisan migrate
Démarrez le serveur :

bash
php artisan serve

## Fonctionnalités détaillées

1. Authentification Laravel UI
Nous avons configuré un système d'authentification pour permettre aux utilisateurs de se connecter et de s'inscrire.


2. Gestion des utilisateurs
Les utilisateurs sont distingués en super administrateurs et utilisateurs normaux grâce à une colonne is_admin dans la table users.
L'administrateur reçoit des notifications lorsque de nouvelles publications sont créées.

3. Tableau des publications
Les utilisateurs peuvent créer, modifier et supprimer des publications contenant un titre et un corps.


4. Notifications en temps réel avec Reverb
Lorsqu'un utilisateur crée une publication, un événement PostCreated est déclenché, ce qui envoie une notification en temps réel à l'administrateur via Reverb.

## Reverb - Configuration

Nous utilisons Reverb pour gérer les notifications en temps réel dans cette application. Assurez-vous d'avoir installé et configuré Reverb en suivant la documentation officielle.

## Contribution

Si vous souhaitez contribuer à ce projet, n'hésitez pas à soumettre une Pull Request ou à ouvrir une issue.

## License

Ce projet est sous licence MIT.

## Auteurs
Khalil Djao - kobsdevs