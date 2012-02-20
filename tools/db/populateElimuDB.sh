#!/bin/sh

echo 'Populate Elimu Database with schools script'

mysql -uelimudb_usr -p!elimudb_usr! -v  elimudb < "sql/populate_schools.sql"
