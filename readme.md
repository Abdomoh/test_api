How set up cloned laravel project to become ready:

// Go to IthraaProject directory, and do the folowing

// 1.

composer install

// 2.

cp .env.example .env or copy .env.example .env

// 3.

php artisan key:generate

// 4. .

php artisan migrate:fresh --seed
