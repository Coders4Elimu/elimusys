#!/bin/sh

echo 'Elimu Database creation script'

mysql -uroot -p!sqlelimu! -v < "sql/drop_db.sql"
mysql -uroot -p!sqlelimu! -v < "sql/delete_usr.sql"
mysql -uroot -p!sqlelimu! -v < "sql/create_db.sql"
mysql -uroot -p!sqlelimu! -v < "sql/create_usr.sql"
mysql -uroot -p!sqlelimu! -v < "sql/create_tables.sql"
