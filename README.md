# swoole-project

Create PHP 8 web server with swoole

install php 8

install php-dev

install php8.0-mysql 

install swoole from sources and compile

don't use 'pecl install swoole' with php8 for now if you want to stay sane

git clone https://github.com/swoole/swoole-src.git && \
cd swoole-src && \
git checkout v4.6.x

phpize \
 && ./configure \
 --enable-openssl \
   --enable-sockets \
   --enable-http2 \
   --enable-mysqlnd \
   && make && make install

don't install extension=swoole.so in php.ini
however create swoole.ini in mods-available folder
with :
;configuration for php common module
;priority=20
extension=swoole.so

then enable with : sudo phpenmod swoole

check if swoole is in : php  -m

then test php server.php

if ok, remove folder swoole-src