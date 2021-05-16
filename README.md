# swoole-project

Create PHP 8 web server with swoole

Install php 8

Install php-dev

Install php8.0-mysql 

Install swoole from sources and compile

Don't use 'pecl install swoole' with php8 for now if you want to stay sane

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

Don't install extension=swoole.so in php.ini
however create swoole.ini in mods-available folder
with :
;configuration for php common module
;priority=20
extension=swoole.so

Then enable with : sudo phpenmod swoole

Check if swoole is in : php  -m

Create file server.php

Then test php server.php

If ok, remove folder swoole-src

In server.php, create http server with new Swoole\HTTP\Server