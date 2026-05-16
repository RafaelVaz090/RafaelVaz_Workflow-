# Escolhemos uma imagem pronta de PHP com Apache
FROM php:8.2-apache

# Copiamos o nosso arquivo index.php para dentro da pasta do servidor web na imagem
COPY index.php /var/www/html/

# Informamos que o container vai rodar na porta 80
EXPOSE 80