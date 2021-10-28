# Information à lire avant utilisation
Le formulaire sécurisé a été réalisé à partir du Framework PHP CodeIgniter sur une architecture MVC afin d'obtenir un code bien structuré. Vous trouverez la documentation sur le Framework ci-dessous. De plus, le Framework CSS Bootstrap a été également utilisé pour le Front-End. 

## Description
Sur ce formulaire, il est possible de se connecter à l'aide d'un identifiant utilisateur fourni par défaut, mais aussi d'en créer de nouveau, en cliquant sur `register` une fois sur la page de connexion.
Une base de donnée est fourni à la racine du mini projet, au nom de `db_secure.sql`.
Si des erreurs sont générer, veuillez suivre les étapes ci-dessous.

## Identifiants utilisateur (par défaut)
- Email : admin@admin.fr
- MDP : test_123_ 

## Serveur
Le serveur Apache a été utilisé en local à l'aide de Wampserver sous Windows.
Si le nom du dossier où est stocké le formulairea été modifier, veuillez changer le `$baseURL` dans le fichier `app/Config/App.php`.

## Base de donnée
La base de donnée est géré à partir de MySQL, accessible à partir de phpMyAdmin ou autre, si présent sur le localhost. Si l'identifiant n'est pas "root", on peut le modifier en allant dans le fichier présent dans `app/Config/Database.php` sur `$default`.

## assets
Les fichiers présents en local sont placé dans le dossier présent à ce chemin `public/assets`.

## Erreur de chargement
Si une erreur de chargement d'image ou de fichier de style css est produite, veuillez modifier le lien de menant vers dossier où ils sont stockés.



# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

This repository holds the distributable version of the framework,
including the user guide. It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).


## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
