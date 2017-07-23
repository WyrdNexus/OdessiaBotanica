# Project Setup

1. Install everything listed in [requirements](./REQUIREMENTS.md), and check that php and git run properly in the command line.
    * `> php -v`
    * `> git -v`
2. Configure mariaDb, with a user and password.
    * add the connection info to [config.yml::doctrine](../app/config/config.yml).
3. Run Composer (php), yarn (js,css), and doctrine (mysql)
    * `> composer update`
    * `> yarn update`
    * `> php bin/console doctrine:schema:update --force`
4. Startup the local server.
    * `> php bin/console server:run`
5. Check that the site loads.
    * [localhost:8000](http://localhost:8000)
    
## phpStorm

To make development simpler, we suggest using IntelliJ's phpStorm, with a few Plugins.
1. File > Settings > Plugins > Browse Repositories... 
    * .ignore
    * PHP Annotations
    * PHP Toolbox
    * Symfony Plugin
    
# Assets

Styles and scripts are in web/assets and managed by webpack-encore.
Webpack-encore collects and compiles files according to webpack.config.js.

**Currently:**
* web/build/* compiled from:
    * web/assets/css
    * web/assets/js

To build the assets run a command:

* compile dev assets once:
    * `> yarn run assets:dev`
* compile dev assets on file change
    * `> yarn run assets:watch`
* compile minified
    * `> yarn run assets:build`