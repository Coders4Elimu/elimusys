#!/bin/sh

usage(){
  log '#################################################'
  log '###Usage : ./deployElimu.sh ${version} ##########'  
  log '#################################################'
}

log(){
  echo $1
}

if [ $# -ne 1 ] ; then
  usage
  exit 0
fi

VERSION=$1

DEPLOY_LOC="/home/martialsomba/deploy"

if [ -f setEnv.sh ] ; then
  . ${DEPLOY_LOC}/setEnv.sh
else
  log 'setEnv.sh script is needed to run this script'
  exit 1
fi

sudo ${GL_HOME}/bin/asadmin deploy --name=elimu-ear --force=true drops/elimu/prototype/${VERSION}/elimu-ear-${VERSION}.ear

sudo ${GL_HOME}/bin/asadmin list-applications
