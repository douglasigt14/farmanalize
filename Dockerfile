# Use a imagem oficial do PHP como base
FROM php:8.1-fpm

# Instale as dependências necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Configure o diretório de trabalho
WORKDIR /var/www/html

# Copie os arquivos do seu projeto para o contêiner
COPY . .

# Instale o Composer e as dependências do Laravel
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

# Expõe a porta necessária (por exemplo, 9000 para PHP-FPM)
EXPOSE 9000

# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]