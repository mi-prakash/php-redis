# php-redis
# This installation guide is only for mac

Basics of php redis

# Has to be PHP >= 7.3
1. pickle install redis

2. git clone https://github.com/phpredis/phpredis.git
    - cd phpredis
    - phpize
    - ./configure [--enable-redis-igbinary] [--enable-redis-msgpack] [--enable-redis-lzf [--with-liblzf[=DIR]]] [--enable-redis-zstd]
    - make && make install

N.B.: If you get error `configure: error: Cannot find igbinary.h`
3. sudo pecl install igbinary
** Then restart from step 2.

4. Add `extension=redis.so` in your php.ini
