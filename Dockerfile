FROM php:8.1-apache

# Habilita extensões PHP se o seu projeto precisar (comum em aulas)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia TODOS os arquivos (index, php's e imagens) para a pasta do servidor
COPY . /var/www/html/

# Dá permissão para o Apache ler os arquivos
RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80
