- Install
  + composer require kauth/login
- Publishes file
  + php artisan vendor:publish --provider="Simple\Login\SimpleLoginServiceProvider" --force
- Generate secret key
  + php artisan jwt:secret
- Run migration, seeder
- Test api: /api/v1/auth/login
  + Body: {
              "email": "test1@gmail.com",
              "password": "123456"
          }
