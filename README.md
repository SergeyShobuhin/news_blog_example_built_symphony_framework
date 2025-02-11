Приложение созданное на PHP:8.2 и Symfony:7.
Новостной блог. Реализовано:
* аутентификация пользователя 
* создание своих новостей/блогов
* реализована возможность общения пользователей в виде комментариев

для запуска
1) docker exec -it php sh
2) php bin/console make:migration 

   php bin/console doctrine:migrations:migrate    
3) и заполняем базу если нужно

   php bin/console doctrine:fixtures:load

