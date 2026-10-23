# SPELEC2A CRUD Application (Core PHP, Custom ORM, PSR-4)

A student manager built with Core PHP 8+, MySQL/MariaDB and PDO. No frameworks.
Composer is used **only** for PSR-4 autoloading.

## Requirements
- PHP 8.0 or newer with the `pdo_mysql` extension
- MySQL or MariaDB
- Composer (optional but recommended)

## Setup
1. **Create the database:** import `database/schema.sql`
   - phpMyAdmin: Import tab, choose the file, Go
   - or CLI: `mysql -u root -p < database/schema.sql`
2. **Configure the connection:** edit `config/database.php` (host, dbname, user, pass).
3. **Generate the autoloader:** run `composer dump-autoload` in the project folder.
   (If you skip this, `public/index.php` falls back to `core/autoload.php`,
   which uses the same PSR-4 mapping.)
4. **Run the app:**
   ```
   php -S localhost:8000 -t public
   ```
   Open http://localhost:8000

## Features
- Create, Read, Update, Delete students, plus search by name
- Server-side validation (required, length, email format, unique email)
- Prepared statements (PDO), output escaping, CSRF tokens, POST-only deletes
- Friendly 404/405/500 pages (raw errors are never shown)

## Structure
```
app/Controllers   request handling (StudentController)
app/Models        table mappings (Student)
core/             ORM (Model), Database, Validator, Csrf, base Controller
config/           database settings
public/           index.php (front controller / router)
views/            PHP templates
database/         schema.sql
docs/             ORM and PSR-4 documentation
```

## Adding another model
1. Create the table in SQL.
2. Add `app/Models/Book.php` extending `Core\Model` with `$table` and `$fillable`.
3. Add a controller and views.
