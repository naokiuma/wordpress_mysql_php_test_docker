FROM php:7.4-apache
# FROM php:8.3-apache # バージョンを変えたい場合

# mysqli を入れる
RUN docker-php-ext-install mysqli

# rewrite（WPでほぼ必須）
RUN a2enmod rewrite \
 && sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf
 
# wp-cli
RUN curl -fsSL -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
  && chmod +x /usr/local/bin/wp