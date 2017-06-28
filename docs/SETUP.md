# Project Setup

1. Install everything listed in [requirements](./REQUIREMENTS.md), and check that php and git run properly in the command line.
    * `> php -v`
    * `> git -v`
2. Configure mariaDb, with a user and password.
    * add the connection info to [config.yml::doctrine](../app/config/config.yml).
3. Startup the local server.
    * `> php bin/console server:run`
4. Check that the site loads.
    * [localhost:8000](http://localhost:8000)
    
## phpStorm

To make development simpler, we suggest using IntelliJ's phpStorm, with a few Plugins.
1. File > Settings > Plugins > Browse Repositories... 
    * .ignore
    * PHP Annotations
    * PHP Toolbox
    * Symfony Plugin