
# The Sample for the Docker with PHP+MySQL

This repository provides a starting point for the development of the PHP+MySQL environment.

This sample also includes PHPMyAdmin.

### Steps

1. Start the Docker

```bash
docker compose -f compose.yaml up -d
```

2. Access the app via browser

- App:

  `http://localhost/index.php`

- PHPMyAdmin

  `http://localhost:8080`


3. To Stop the Docker

```bash
docker compose -f compose.yaml down
```

To remove the images used by the service, add the `--rmi` option. The `--rmi` option accepts either `local` or `all`. For more details, please see the documentation by typing `docker compose down --help`.

```bash
docker compose -f compose.yaml down --rmi local
```

### MySQL Schema

The sample mysql schema is located under the `mysql-schema` directory.
This directory is mounted on the directory `/docker-entrypoint-initdb.d` of the Docker container.
The `*.sql` files under this directory will be used to initialize the MySQL database.

### Composer

To use composer,

```bash
docker run --rm --interactive --tty --volume $PWD/src/public:/app composer require --dev verndor/package
```

If you want to install `phpstan/phpstan`, then execute:

```bash
docker run --rm --interactive --tty --volume $PWD/src/public:/app composer require --dev phpstan/phpstan
```

The file `php-composer.sh` contains the common part of the syntax above. You can shorten the syntax by using the file as below.

To see the help:

```bash
bash php-composer.sh --help
```

To install the package:

```bash
bash php-composer.sh require --dev vendor/package
```

### For production

- php.ini

  - open_basedir = /var/www/html

  - Enable bytecode cache

  - log output configuration
