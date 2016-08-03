#!/bin/sh

cd src/AppBundle/Resources/private
sudo foundation build

cd ../../../..
php bin/console assets:install

php bin/console cache:clear -e prod
 
