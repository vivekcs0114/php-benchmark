# For run 

create table inside your database with the name of - user
with the following structure -


column                 type
------------------------------
name                    varchar(20)
mobile                  varchar(20)
email                   varchar(20)
address                 varchar(20)
count                   int
 
```
     docker run --name benchmark \
     -e MYSQL_HOST=<MYSQL HOST> \
     -e MYSQL_PORT=<MYSQL PORT> \
     -e MYSQL_USER=<MYSQL_USER> \
     -e MYSQL_PASS=<MYSQL PASS> \
     -e MYSQL_DB=<MYSQL DB> \
     -d vivekcs0114/php-benchmark ```

for example -

sudo docker run --name apache  -e MYSQL_HOST=192.168.0.61 -e MYSQL_PORT=3306 -e MYSQL_USER=root -e MYSQL_PASS=root -e MYSQL_DB=benchmark -v /opt/lampp/htdocs/php-benchmark:/var/www/html -d vivekcs0114/php-benchmark
