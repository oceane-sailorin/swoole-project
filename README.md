# swoole-project

Create PHP 8 web server with swoole

install php 8

install php-dev

install swoole from sources and compile

git clone https://github.com/swoole/swoole-src.git && \
cd swoole-src && \
git checkout v4.6.x

phpize && \
./configure && \
make && make install
