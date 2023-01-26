# php-redis
# This installation guide is only for mac

Basics of php redis

// If using PHP >= 7.3
-> pickle install redis


-> git clone https://github.com/phpredis/phpredis.git
cd phpredis
phpize
./configure [--enable-redis-igbinary] [--enable-redis-msgpack] [--enable-redis-lzf [--with-liblzf[=DIR]]] [--enable-redis-zstd]
make && make install


N.B.: If you get error `configure: error: Cannot find igbinary.h`
-> sudo pecl install igbinary


extension=redis.so in your php.ini