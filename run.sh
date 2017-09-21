 docker run --name benchmark \
  -e MYSQL_HOST=172.17.0.4 \
  -e MYSQL_PORT=3306 \
  -e MYSQL_HOST=<MYSQL_USER> \
  -e MYSQL_PORT=<MYSQL PASS> \
  -e MYSQL_HOST=<MYSQL DB> \
  -e MYSQL_PORT=<MYSQL TABLE> \
  -d vivekcs0114/php-benchmark