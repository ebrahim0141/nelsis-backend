Project setup procedure
1. Before we proceed we must update the composer, laravel installer, node, and npm on our local environment:
    PHP >= 8.2,
    Node >= 18.18.2,
    NPM >= 9.8.1,
    Composer >= 2.8.6,
    Laravel Installer >= 5.12.2,
2. git clone https://github.com/ebrahim0141/nelsis-backend.git
3. copy .env.example .env
4. composer update
5. php artisan jwt:secret
6. php artisan key:generate
7. php artisan migrate
8. php artisan db:seed
9. php artisan serve