# MicroCMS
A content management system (CMS) in Laravel

---

## How to start

**1. Clone From Github**
```bash
git clone https://github.com/kothing/CMS-laravel-test.git
```

**2. Go to that folder**
```bash
cd cms-laravel-test
```

**3. Required Configuration**

PHP  
1. fileinfo extensions
1. putenv() enable
1. proc_open() enable

Permission for directories. 
1. storage 777
1. bootstrap/cache 777
1. public 777

**4. Install Composer**
```php
composer install
```

**5. Create and config env file**
```bash
Create a .env file by cloning .env.example file
```

**6. Generate app APP_KEY**
```
php artisan key:generate
```

**7. Create a Database named**
```bash
your-database
```

**8. Run Migration & Seed**
```php
php artisan migrate:fresh --seed
```

**9. Run On Local Machine**  
start Laravel's local development server
```bash
php artisan serve
```
and open browser at `http://localhost:8000`


**10. Go to CMS admin dashborad**  
Login Now by giving this data.
```php
Username: xxx
Password: xxx
```
You can find it in `database/seeders/DatabaseSeeder.php`

---

## Clear cache
```
php artisan cache:clear
php artisan route:cache
php artisan config:cache
php artisan view:clear
```

---

## Screenshots

**Homepage**  

http://site-domain/

**Auth - Login Dashboard**  

http://site-domain/dashboard


