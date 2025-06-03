# SecureAuth API

SecureAuth API – это современное RESTful API приложение на Laravel 12 с использованием Docker, Laravel Passport для OAuth2 и JWT аутентификации. Проект ориентирован на разработчиков уровня Middle+ (почти Senior) и включает все необходимые инструменты для разработки, тестирования и CI/CD с применением GitHub Actions.

## Оглавление
- [Требования](#требования)
- [Установка](#установка)


## Требования
- Docker и Docker Compose
- PHP 8.1 и выше
- Composer
- Git

## Установка
1. **Клонирование репозитория:**
   ```bash
   git clone git@github.com:shuliaka95/secureauth-api.git
   cd secureauth-api

2. `composer install`
3. Скопировать `.env.example` в `.env`
4. Настроить доступы к БД
5. `php artisan migrate --seed`