#!/bin/sh

echo 'Stops Elimu Glassfish v3 Domain'

DEPLOY_LOC="/home/martialsomba/deploy"

if [ -f setEnv.sh ] ; then
  . ${DEPLOY_LOC}/setEnv.sh
else
  log 'setEnv.sh script is needed to run this script'
  exit 1
fi


sudo ${GL_HOME}/bin/asadmin stop-domain domain1
