
# The Sample for the Docker with LAMP

This repository provides a starting point for the development of the LAMP environment. The LAMP stands for Linux, Apache, MySQL(or MariaDB), and PHP.

This sample also includes PHPMyAdmin.

### Steps

1. Start the Docker

```bash
docker compose -f compose.yaml up -d
```

2. Access `http://localhost/index.php`

3. To Stop the Docker

```bash
docker compose -f compose.yaml down
```

To remove the images used by the service, add `--rmi` option. The `--rmi` option accepts either of `local` or `all`. Please see the documentation by typing `docker compose down --help`.

```bash
docker compose -f compose.yaml down --rmi local
```

### Composer

To use composer,

```bash
docker run --rm --interactive --tty --volume $PWD/src/public:/app composer require --dev verndor/package
```

If you want to install `phpstan/phpstan`, then execute:

```bash
docker run --rm --interactive --tty --volume $PWD/src/public:/app composer require --dev phpstan/phpstan
```

The file `php-composer.sh` contains the common syntax of php composer and you can shorten this long command.

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
