# phpcanada

###Requirements:

- PHP 7, MySQL, npm/NodeJS, Nginx

###PHP Code Style:

- Let's use [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)

###Front-end:

- CSS Code Style: http://cssguidelin.es/

To install foundation-cli and gulp-sass:

    sudo npm install -g foundation-cli
    sudo npm install -g gulp-sass
    sudo npm install

To compile the css:

    cd src/AppBundle/Resources/private
    foundation build

To install/update the assets:

    php bin/console assets:install

To customize the application:

    vim /src/AppBundle/Resources/private/scss/app.scss


###Back-end:

Useful commands:

`php bin/console` (All console commands)

`php bin/console cache:clear` (Clear cache)

`php bin/console server:run` (Run local server)

`php bin/console doctrine:migrations:status`

`php bin/console doctrine:migrations:status --show-versions`

`php bin/console doctrine:migrations:generate` (Auto-generate migration file)
