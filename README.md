# slim4-database-example

Create a new  project using composer. Add the following dependencies:

* `slim/slim`
* `slim/psr7`

```bash
composer init
```

```json
{
    "name": "sillevl/slim-database-example",
    "description": "Slim 4 application that shows how to use a database with Eloquent",
    "type": "project",
    "require": {
        "slim/slim": "4.x-dev",
        "slim/psr7": "dev-master"
    },
    "license": "MIT",
    "authors": [
        {
            "name": "Sille Van Landschoot",
            "email": "info@sillevl.be"
        }
    ],
    "minimum-stability": "dev"
}
```

## Database Migrations

Setup configuration in `.env` file.

Create the database

```bash
vendor\bin\phinx migrate
```

Add initial values to the database

```bash
vendor\bin\phinx seed:run
```

Reset the database

```bash
vendor\bin\phinx rollback
```
