#!/bin/sh

log(){
  echo $1
}

DEPLOY_LOC="/home/martialsomba/deploy"

if [ -f setEnv.sh ] ; then
  . ${DEPLOY_LOC}/setEnv.sh
else
  log 'setEnv.sh script is needed to run this script'
  exit 1
fi

log 'Deleting a previous install'

sudo ${GL_HOME}/bin/asadmin delete-jdbc-resource jdbc/elimu

sudo ${GL_HOME}/bin/asadmin delete-jdbc-connection-pool ElimuPool

log 'Creating Elimu JDBC Connection Pool'

sudo ${GL_HOME}/bin/asadmin create-jdbc-connection-pool --datasourceclassname com.mysql.jdbc.jdbc2.optional.MysqlDataSource --restype javax.sql.DataSource 

sudo ${GL_HOME}/bin/asadmin list-jdbc-connection-pools

log 'Creating Elimu JDBC Resource jbc/elimu'

sudo ${GL_HOME}/bin/asadmin create-jdbc-resource --connectionpoolid ElimuPool jdbc/elimu

sudo ${GL_HOME}/bin/asadmin list-jdbc-resources
