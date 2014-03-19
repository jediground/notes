#!/bin/bash

R="\\033[31m";
E="\\033[0m"; 
B="\\033[34m";
P="\\033[35m";

yum install -y wget gcc gcc-c++ autoconf libjpeg libjpeg-devel lrzsz perl perl* perl-CPAN libpng libpng-devel freetype freetype-devel libxml2 libxml2-devel zlib zlib-devel glibc glibc-devel glib2 glib2-devel bzip2 bzip2-devel ncurses ncurses-devel curl curl-devel e2fsprogs e2fsprogs-devel krb5 krb5-devel libidn libidn-devel openssl openssl-devel openldap openldap-devel nss_ldap openldap-clients openldap-servers png jpeg autoconf gcc cmake make gcc-c++ gcc ladp ldap* ncurses ncurses-devel zlib zlib-devel zlib-static pcre pcre-devel pcre-static openssl openssl-devel perl libtoolt openldap-devel libxml2-devel ntpdate cmake gd* gd2 ImageMagick-devel jpeg jpeg* pcre-dev* fontconfig libpng libxml2 zip unzip gzip

sleep 2


cd /usr/local/src/

if [ -s libiconv-1.13.tar.gz ]
then
    echo -e "$B libiconv-1.13.tar.gz ................................... found $E"
else
    echo -e "$R libiconv-1.13.tar.gz ...............not found ,download new....$E"
    wget http://ftp.gnu.org/gnu/libiconv/libiconv-1.13.tar.gz
fi

if [ -s libmcrypt-2.5.8.tar.gz ]
then
    echo -e "$B libmcrypt-2.5.8.tar.gz ..................................found $E"
else
    echo -e " $R libmcrypt-2.5.8.tar.gz ...........not found ,download new.... $E"
    wget http://lcmp.googlecode.com/files/libmcrypt-2.5.8.tar.gz
fi

if [ -s mcrypt-2.6.8.tar.gz ]
then
    echo -e "$B mcrypt-2.6.8.tar.gz .....................................found $E"
else
    echo -e "$R mcrypt-2.6.8.tar.gz ................not found ,download new....$E"
    wget http://jaist.dl.sourceforge.net/project/mcrypt/MCrypt/2.6.8/mcrypt-2.6.8.tar.gz
fi

if [ -s mhash-0.9.9.9.tar.gz ]
then
    echo -e "$B mhash-0.9.9.9.tar.gz ....................................found $E"
else
    echo -e "$R mhash-0.9.9.9.tar.gz ...............not found ,download new....$E "
    wget http://jaist.dl.sourceforge.net/project/mhash/mhash/0.9.9.9/mhash-0.9.9.9.tar.gz
fi

if [ -s memcache-2.2.5.tgz ]
then
    echo -e "$B memcache-2.2.5.tgz ......................................found $E"
else
    echo -e "$R memcache-2.2.5.tgz .................not found, download new....$E"
    wget http://vps.googlecode.com/files/memcache-2.2.5.tgz
fi

if [ -s PDO_MYSQL-1.0.2.tgz ]
then
    echo -e "$B PDO_MYSQL-1.0.2.tgz .....................................found $E"
else
    echo -e "$R PDO_MYSQL-1.0.2.tgz .................not foud, download new....$E"
    wget http://vps.googlecode.com/files/PDO_MYSQL-1.0.2.tgz
fi

if [ -s imagick-3.1.2.tgz ]
then
    echo -e "$B imagick-3.1.2.tgz .......................................found $E"
else
    echo -e "$R imagick-3.1.2.tgz....................not found,download new....$E"
    wget http://pecl.php.net/get/imagick-3.1.2.tgz
fi

if [ -s pcre-8.21.tar.gz ]
then
    echo -e "$B pcre-8.21.tar.gz ........................................found $E"
else
    echo -e "$R pcre-8.21.tar.gz ...................not found ,download new....$E"
	wget ftp://ftp.csx.cam.ac.uk/pub/software/programming/pcre/pcre-8.21.tar.gz
fi

if [ -s mysql-5.5.30.tar.gz ]
then
    echo -e "$B mysql-5.5.30.tar.gz .....................................found $E"
else
    echo -e "$R mysql-5.5.30.tar.gz ...............not found , download new....$E"
    wget http://netcologne.dl.sourceforge.net/project/mysql.mirror/MySQL%205.5.30/mysql-5.5.30.tar.gz
fi

if [ -s ImageMagick.tar.gz ]
then
    echo -e "$B ImageMagick.tar.gz ......................................found $E"
else
    echo -e "$R ImageMagick.tar.gz ..................not found,download new....$E"
    wget http://mynginx.googlecode.com/files/ImageMagick.tar.gz
fi

if [ -s php-5.4.21.tar.gz ]
then
    echo -e "$B php-5.4.21.tar.gz .......................................found $E"
else
    echo -e "$R php-5.4.21.tar.gz .................not found , download new....$E"
    wget http://us3.php.net/get/php-5.4.21.tar.gz/from/cn2.php.net/mirror
fi

if [ -s eaccelerator-eaccelerator-42067ac.tar.gz ]
then
    echo -e "$B eaccelerator-eaccelerator-42067ac.tar.gz ................found $E"
else
    echo -e "$R eaccelerator-eaccelerator-42067ac.tar.gz not found , download new....$E"
	wget http://lnamp-web-server.googlecode.com/files/eaccelerator-eaccelerator-42067ac.tar.gz
fi

if [ -s nginx-1.4.0.tar.gz ]
then
     echo -e "$B nginx-1.4.0.tar.gz ......................................found $E"
else
     echo -e "$R nginx-1.4.0.tar.gz ...............not found , download new....$E"
	 wget http://nginx.org/download/nginx-1.4.0.tar.gz
fi


###install mysql-5.5.0

groupadd mysql
useradd mysql -g mysql
tar -zxvf mysql-5.5.30.tar.gz
cd mysql-5.5.30
cmake -DCMAKE_INSTALL_PREFIX=/usr/local/mysql \
        -DMYSQL_UNIX_ADDR=/tmp/mysql.sock \
		    -DEXTRA_CHARSETS=all \
        -DDEFAULT_CHARSET=utf8 \
        -DDEFAULT_COLLATION=utf8_general_ci \
        -DWITH_EXTRA_CHARSETS:STRING=utf8,gbk \
        -DWITH_INNOBASE_STORAGE_ENGINE=1 \
        -DWITH_READLINE=1 \
        -DENABLED_LOCAL_INFILE=1 \
        -DMYSQL_DATADIR=/data/mysql/ \
        -DMYSQL_USER=mysql \
        -DMYSQL_TCP_PORT=3306
                                          
make && make install

mkdir -p /data/mysql
chown mysql.mysql -R /data/mysql
mv /etc/my.cnf /etc/my.cnf-old 
cp support-files/my-medium.cnf /etc/my.cnf
chmod 755 scripts/mysql_install_db
scripts/mysql_install_db  --user=mysql  --basedir=/usr/local/mysql --datadir=/data/mysql/
cp support-files/mysql.server /etc/init.d/mysqld
chmod 755 /etc/init.d/mysqld
chkconfig mysqld on
service mysqld start


### install mysql admin password for 123456
/usr/local/mysql/bin/mysqladmin -u root password '123456'
cd ../

###libiconv
tar zxvf libiconv-1.13.tar.gz
cd libiconv-1.13/
./configure --prefix=/usr/local
make && make install
cd ../

###libmcrypt
tar zxvf libmcrypt-2.5.8.tar.gz
cd libmcrypt-2.5.8/
./configure
make && make install
/sbin/ldconfig
cd libltdl/
./configure --enable-ltdl-install
make && make install
cd ../../

###mhash
tar zxvf mhash-0.9.9.9.tar.gz
cd mhash-0.9.9.9/
./configure
make && make install
cd ../

ln -s /usr/local/lib/libmcrypt.la /usr/lib/libmcrypt.la
ln -s /usr/local/lib/libmcrypt.so /usr/lib/libmcrypt.so
ln -s /usr/local/lib/libmcrypt.so.4 /usr/lib/libmcrypt.so.4
ln -s /usr/local/lib/libmcrypt.so.4.4.8 /usr/lib/libmcrypt.so.4.4.8
ln -s /usr/local/lib/libmhash.a /usr/lib/libmhash.a
ln -s /usr/local/lib/libmhash.la /usr/lib/libmhash.la
ln -s /usr/local/lib/libmhash.so /usr/lib/libmhash.so
ln -s /usr/local/lib/libmhash.so.2 /usr/lib/libmhash.so.2
ln -s /usr/local/lib/libmhash.so.2.0.1 /usr/lib/libmhash.so.2.0.1
ln -s /usr/lib64/libldap* /usr/lib/

###mcrypt
tar zxvf mcrypt-2.6.8.tar.gz
cd mcrypt-2.6.8/
/sbin/ldconfig
./configure
make && make install

cd ../

###install php
tar -zxvf php-5.4.21.tar.gz
cd php-5.4.21
 ./configure --prefix=/usr/local/php  --with-config-file-path=/usr/local/php/etc --with-mysql=/usr/local/mysql --with-mysqli=/usr/local/mysql/bin/mysql_config --with-iconv-dir=/usr/local --with-freetype-dir --with-jpeg-dir --with-png-dir --with-zlib --with-gd --enable-gd-native-ttf --with-libxml-dir=/usr --enable-xml --disable-rpath --enable-discard-path --enable-safe-mode --enable-bcmath --enable-shmop --enable-sysvsem --enable-inline-optimization --with-curl --with-curlwrappers --enable-mbregex --enable-fastcgi --enable-fpm --enable-force-cgi-redirect --enable-mbstring --with-mcrypt --with-openssl --with-mhash --enable-pcntl --enable-sockets --with-ldap --with-ldap-sasl --with-xmlrpc --enable-zip --enable-soap --without-pear

sleep 5

ln -s /usr/local/mysql/lib/libmysql*  /usr/lib64/
make ZEND_EXTRA_LIBS='-liconv'
make install
cp -f php.ini-production /usr/local/php/etc/php.ini
ln -s /usr/local/php/etc/php.ini /usr/local/php/php.ini
cp /usr/local/php/etc/php-fpm.conf.default  /usr/local/php/etc/php-fpm.conf
cd ../

###install memcache
tar zxvf memcache-2.2.5.tgz
cd memcache-2.2.5/
/usr/local/php/bin/phpize
./configure --with-php-config=/usr/local/php/bin/php-config
make && make install
cd ../

####eaccelerator 
tar -zxvf eaccelerator-eaccelerator-42067ac.tar.gz
cd eaccelerator-eaccelerator-42067ac
/usr/local/php/bin/phpize
./configure --enable-eaccelerator=shared  --with-php-config=/usr/local/php/bin/php-config
make
make install


# ??:memcache????
echo "extension_dir = \"/usr/local/php/lib/php/extensions/no-debug-non-zts-20100525/\"" >>/usr/local/php/php.ini
echo "extension = \"memcache.so\"" >>/usr/local/php/php.ini
echo "extension = \"pdo_mysql.so\"" >>/usr/local/php/php.ini
echo "extension = \"imagick.so\"" >>/usr/local/php/php.ini

###/usr/local/php/lib/php/extensions/no-debug-non-zts-20100525/
echo ";eaccelerator" >>/usr/local/php/php.ini
echo "[eaccelerator]" >>/usr/local/php/php.ini
echo "zend_extension=\"/usr/local/php/lib/php/extensions/no-debug-non-zts-20100525/eaccelerator.so\"" >>/usr/local/php/php.ini
echo "eaccelerator.shm_size=\"1\"" >>/usr/local/php/php.ini
echo "eaccelerator.cache_dir=\"/usr/local/eaccelerator_cache\"" >>/usr/local/php/php.ini
echo "eaccelerator.enable=\"1\"" >>/usr/local/php/php.ini
echo "eaccelerator.optimizer=\"1\"" >>/usr/local/php/php.ini
echo "eaccelerator.check_mtime=\"1\"" >>/usr/local/php/php.ini
echo "eaccelerator.debug=\"0\"" >>/usr/local/php/php.ini
echo "eaccelerator.filter=\"\"" >>/usr/local/php/php.ini
echo "eaccelerator.shm_max=\"0\"" >>/usr/local/php/php.ini
echo "eaccelerator.shm_ttl=\"3600\"" >>/usr/local/php/php.ini
echo "eaccelerator.shm_prune_period=\"3600\"" >>/usr/local/php/php.ini
echo "eaccelerator.shm_only=\"0\"" >>/usr/local/php/php.ini
echo "eaccelerator.compress=\"1\"" >>/usr/local/php/php.ini
echo "eaccelerator.compress_level=\"9\"" >>/usr/local/php/php.ini
echo "eaccelerator.keys = \"disk_only\"" >>/usr/local/php/php.ini
echo "eaccelerator.sessions = \"disk_only\"" >>/usr/local/php/php.ini
echo "eaccelerator.content = \"disk_only\"" >>/usr/local/php/php.ini

mkdir -p /usr/local/eaccelerator_cache  
chmod 0777 /usr/local/eaccelerator_cache
cd ../

###install PDO_MYSQL
tar zxvf PDO_MYSQL-1.0.2.tgz
cd PDO_MYSQL-1.0.2/
/usr/local/php/bin/phpize
./configure --with-php-config=/usr/local/php/bin/php-config --with-pdo-mysql=/usr/local/mysql
ln -s /usr/local/mysql/include/* /usr/local/include/
make && make install
cd ../

###install ImageMagick
tar zxvf ImageMagick.tar.gz
cd ImageMagick-6.5.1-2/ 
./configure && make && make install
cd ../


### install imagick
tar zxvf imagick-3.1.2.tgz
cd imagick-3.1.2/
/usr/local/php/bin/phpize
ln -s /usr/local/include/ImageMagick-6 /usr/local/include/ImageMagick
./configure --with-php-config=/usr/local/php/bin/php-config
make && make install
cd ../


###install php-fpm.conf
#??WWW??   
/usr/sbin/groupadd www   
/usr/sbin/useradd -g www www   
mkdir -p /var/log/nginx   
chmod +w /var/log/nginx   
chown -R www:www /var/log/nginx   
mkdir -p /data0/www   
chmod +w /data0/www   
chown -R www:www /data0/www    


mv /usr/local/php/etc/php-fpm.conf /mnt/php-fpm.conf

###??/?? ??????;   
cd /mnt/
sed -e '
s#pm.max_children = 5#pm.max_children = 64#
s#pm.start_servers = 2#pm.start_servers = 20#
s#pm.min_spare_servers = 1#pm.min_spare_servers = 5#
s#pm.max_spare_servers = 3#pm.max_spare_servers = 35#
s#;pm.max_requests = 500#pm.max_requests = 1024#
s#user = nobody#user = www#
s#group = nobody#group = www#' /mnt/php-fpm.conf >/mnt/php-fpm.conf.bak

rm -rf /usr/local/php/etc/php-fpm.conf
mv /mnt/php-fpm.conf.bak /usr/local/php/etc/php-fpm.conf



#??????:
echo "export PATH=\$PATH:/usr/local/php/sbin/" >>/etc/profile
echo "export PATH=\$PATH:/usr/local/php/bin/" >>/etc/profile
. /etc/profile
cd /usr/local/src/          


###install pcre
tar -zxvf pcre-8.21.tar.gz
cd pcre-8.21 && ./configure && make && make install
cd ../

###????nginx
tar -zxvf nginx-1.4.0.tar.gz
cd nginx-1.4.0/
./configure --user=www --group=www --prefix=/usr/local/nginx --sbin-path=/usr/local/nginx/sbin/nginx --conf-path=/usr/local/nginx/conf/nginx.conf --with-http_stub_status_module --with-http_ssl_module --with-pcre=/usr/local/src/pcre-8.21 --lock-path=/var/run/nginx.lock --pid-path=/var/run/nginx.pid 

make && make install
cd ../

###??????
cat >/usr/local/nginx/conf/nginx.conf<<EOF
user  www www;
worker_processes  1;

#error_log  logs/error.log;
#error_log  logs/error.log  notice;
#error_log  logs/error.log  info;

pid        logs/nginx.pid;


events {
    use epoll;
    worker_connections  1024;
}


http {
    include       mime.types;
    default_type  application/octet-stream;

    log_format  main  '\$remote_addr - \$remote_user [\$time_local] "\$request" '
                      '\$status $body_bytes_sent "\$http_referer" '
                      '"\$http_user_agent" "\$http_x_forwarded_for"';

    access_log  logs/access.log  main;

    sendfile        on;

    keepalive_timeout  65;

    #gzip  on;

    server {
        listen       80;
        server_name  localhost;

        charset koi8-r;

        access_log  logs/host.access.log  main;

        location / {
            root   html;
            index  index.html index.htm;
        }

     
        error_page   500 502 503 504  /50x.html;
        location = /50x.html {
            root   html;
        }

   
        location ~ \.php\$ {
            root           html;
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            fastcgi_param  SCRIPT_FILENAME  \$document_root\$fastcgi_script_name;
            include        fastcgi_params;
        }

    }

}
EOF

###test phpinfo

cat >/usr/local/nginx/html/index.php<<EOF 
 <?php
 phpinfo();
 ?>
EOF


### test config file

/usr/local/php/sbin/php-fpm -t
/usr/local/nginx/sbin/nginx -t


###??????:
echo "/usr/local/php/sbin/php-fpm" >> /etc/rc.local
echo "/usr/local/nginx/sbin/nginx" >> /etc/rc.local
echo "/etc/init.d/mysqld restart" >> /etc/rc.local


#qidong server
/usr/local/php/sbin/php-fpm
/usr/local/nginx/sbin/nginx
/etc/init.d/mysqld restart

echo "########################lnmp install finish##############################"
ng=`ps -ef | grep nginx`
echo "$ng"
echo "#########################################################################"
sql=`ps -ef | grep mysqld`
echo "$sql"
echo "#########################################################################"
php5=`ps -ef | grep php`
echo "$php5"


