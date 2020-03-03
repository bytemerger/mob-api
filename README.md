# mob-api
An Api to fetch from db with [amazon data dump](https://github.com/aws-samples/aws-database-migration-samples)

## To setup the DB and migrate data follow the instructions in the link
[fetch and migrate](https://docs.google.com/document/d/1j_A4wAvxor073W6MB_QyPRoxDXjKQ8blGNM892C6GGY/edit)

make sure to use`sudo mysql -u root -p -f  < install-rds.sql` with the `f` flag to force the process to continue even error after ecountering error

## Setup the app 
* After cloning the repo run `composer install` to install the dependecies
* Create a .htaccess file to redirect all request to index.php
* Change the config to the desired settings.

## Setbacks
* The RedBeanPHP ORM was difficult to use for the second model(ticket), so plain Sql was used. This is because RedBeanPHP needs an auto_increment primary key 'id' for every table. 
