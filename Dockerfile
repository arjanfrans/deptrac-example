FROM php:8.0-cli

RUN apt-get update && apt install -y --no-install-recommends git graphviz

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions

RUN install-php-extensions @composer zip pdo_pgsql

# Deptrac
RUN curl -LS https://github.com/qossmic/deptrac/releases/download/0.16.0/deptrac.phar -o deptrac.phar && \
    chmod +x deptrac.phar && \
    mv deptrac.phar /usr/local/bin/deptrac

# Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash && \
    ln ~/.symfony/bin/symfony /usr/local/bin/symfony
