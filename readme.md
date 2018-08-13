## DataSet Configuration

### If not interested on having all tables on one database

For developers working on projects and feel the need to separate their tables into different categories
Laravel framework makes it manageable even when switching Database Connections and SQL drivers (MYSQL || PGSQL || SQLITE || SQLSRV)

### WHY?
Working on a project and wanna configure Images table to be on a different MYSQL beyond your base database where your Users table exists

OR

Products table to be handled on PGSQL far away from your MySQL Users table

OR

Your tables handled by different third party API's and change DB_HOST connection 

...

LIST IS ENDLESS WHY CHOOSING THIS OPTION!

### Steps

- Folder: config > File: database.php > Set your Database Connections and Connection names to Configure on `Schema::connection('')` on Folder: database.
- Folder: database > php artisan make:migration to create table then add `Schema::connection('')` to the Connection name where you want the table exist.
- Models Folder: Add Database Connection 'connection' to your Models eg `connection = 'asset'` on Image.php Model (extension of Illuminate\Database\Eloquent\Model.php)
- DONE!

### Options

- Laravel Queue: 
- Add `'database' => 'connection' => 'queue'` to `'connections'` (If you have created a QUEUE connection and CHANGED `'defult' => env('QUEUE_DRIVER', 'database')`).
- Change `'failed' => ['database' => 'queue']`

- Laravel Session:
- Change `'driver' => env('SESSION_DRIVER', 'database')`
- Change `'connection' => null` to Connection name you want table where database exists

### Assistance

- Whoever knows how to change Laravel Notification database connection from base table `'mysql'`, Please contribute without affecting CORE LARAVEL LIBRARY (Illuminate\Notifications\DatabaseNotifications.php)

### CAUTION

- This Configuration affects Model Relations. Make sure to add Connection name on Model User. Make sure on Request `rules()` to add Connection name + table eg `'unique:mysql.users'` (eg If you see exception `'*_asset.users table does not exist'`)

### Contributing

Feel free to Contribute more If you working on such environments and want to contribute on dividing tables on deeper but easily manageable steps.

### Security Vulnerabilities

If you discover a security vulnerability within Laravel or such conditions, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.