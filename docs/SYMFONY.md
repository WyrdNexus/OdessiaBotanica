# Symfony

The Odessia Botanica is written with Symfony 3, and includes the following bundles:
* [Alice](https://github.com/nelmio/alice) - simple fixture auto-gen
* [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) - user auth/perms/roles

If you're not already familiar with Symfony, take a look through their
[documentation](https://symfony.com/doc/current/index.html),
and take a stroll through their [starter course](https://knpuniversity.com/tracks/symfony).

Symfony is a loose MVC framework, focusing heavily on modularity, and extensiable addon libraries. 
* **Entities(Model)** - Doctrine object::db interface.
* **Resources(View)** - used for building a response.
* **Controller** - defines what a url does.
* **Service** - object or add-on available in a controller `$controller->get('service-name');`
* **Repository** - Entity Collection, for building DB requests.
* **Model** - an object representing (and usually parsing/loading) external data (other than an entity)

### Structure
* `app/` config and skin
    * `*.yml` configuration files
    * `Resources/` template, css, js
* `bin/` console commands
* `docs/` **you are here**
* `src/` 
    * `AppBundle` the meat and the code
* `tests/` unit, functional, and integration, tests.
* `var/` filesystem "**VAR**iables" - cache, session, logs
* `vendor/` composer dependencies (including symfony)
    * `composer files`
    * `added bundles` (alice, FOSUser)
* `web/` public landing - routed from here through app/app_dev to a Controller, which loads app/* 