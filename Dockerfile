FROM php:8.0-cli

RUN apt-get update && apt install -y --no-install-recommends git zip unzip libzip-dev zlib1g-dev

# Deptrac
RUN curl -LS https://github.com/qossmic/deptrac/releases/download/0.16.0/deptrac.phar -o deptrac.phar && \
    chmod +x deptrac.phar && \
    mv deptrac.phar /usr/local/bin/deptrac

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash && \
    ln ~/.symfony/bin/symfony /usr/local/bin/symfony
