#!/bin/bash

#plugin path from ilias-root:
PLUGINPATH='Customizing/global/plugins/Services/Cron/CronHook/WBDInterface';
SCRIPT_PATH=$(dirname "$0");
cd $SCRIPT_PATH;

#first param is path to ilias installation
if [ $1 ] ; then
	cd $1;
	echo;
	echo 'now running ILIAS tests in ' $1;
	phpunit --bootstrap autoloader.php .
else
	# note: no more parameters
	phpunit --bootstrap autoloader.php --exclude-group goldenesHerz .;
fi