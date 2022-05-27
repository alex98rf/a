# laravel-proyecto

docker-compose up -d

docker-compose exec php php /var/www/html/artisan migrate

docker-compose exec php php /var/www/html/artisan key:generate

docker-compose exec php php /var/www/html/artisan config:cache

docker-compose exec php php /var/www/html/artisan cache:clear
