# Database Migrations based on Laravel

## Installation

```
git clone git@github.com:egorsmkv/db-migrations.git

cd db-migrations

composer install

touch db.sqlite

cp .env.example .env # and change the environment variables

php artisan migrate:install
```

## Make migrations

```
php artisan make:migration create_users_table
php artisan make:migration add_last_login_field_to_users_table
php artisan make:migration change_num_friends_field_type_in_users_table
php artisan make:migration rename_users_table_to_customer_table
```

## Apply new migrations

```
php artisan migrate
```

## Rollback a previous migration

```
php artisan migrate:rollback
```
