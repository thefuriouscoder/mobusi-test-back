# Mobusi Technical Test - API Rest

Built with Slim Framework 3 and Propel 2. Used Postgres 9.4 as RDBMS

* Clone this repository and change into directory.
* composer install
* vendor/propel/propel/bin/propel model:build --output-dir=App/Models --platform=pgsql
* Adjust database connection on config/propel.php
* vendor/propel/propel/bin/propel convert-conf --output-dir=config --output-file=propel.conf.php
* vendor/propel/propel/bin/propel sql:insert --platform=pgsql --sql-dir=sql
* Recreate table content from fixtures on sql directory, public_event.sql and public_venue.sql
* Change to /public directory
* php -S 127.0.0.1:8080

That's it!
