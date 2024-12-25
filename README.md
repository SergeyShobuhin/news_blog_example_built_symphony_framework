Приложение созданное на PHP:8.2 и Symfony:7.
Новостной блог с аутентификацией пользователя и создание своих новостей/блогов и подпиской на новости других пользователей.

для запуска
1) docker exec -it php sh
2) php bin/console make:migration
3) php bin/console doctrine:migrations:migrate

    и заполняем базу если нужно
4) php bin/console doctrine:fixtures:load

