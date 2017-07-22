# Project Requirements

* [php](http://php.net/downloads.php) 7.1+
* [git](https://git-scm.com/downloads)
* [mariadb](https://mariadb.org/)
* [composer](https://getcomposer.org/download/)
* [symfony](https://symfony.com/) 3.3+
    * [webpack-encore](https://symfony.com/doc/current/frontend.html)
        * [node.js](https://nodejs.org/en/download/) 6.11+
        * [yarn](https://yarnpkg.com/lang/en/docs/install/) 0.27.5+
    * [vue](https://vuejs.org)

## PHP 7.1+

With the following adjustments to php.ini:
* realpath_cache_size = 5M

## Webpack and Vue
The following must be installed in a specific order:
1. Node.js
2. Yarn
3. webpack-encore
4. vue

Node.js and Yarn should install fairly simply.
(Windows: logout and login for an updated PATH )

### Webpack

    > yarn add @symfony/webpack-encore --dev 