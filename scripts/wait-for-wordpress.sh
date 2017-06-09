#!/bin/bash

#
## just wait for the directory to appear
#

DIR="run/www/wp-content/themes"

x=12
echo -n 'waiting for Wordpress setup to complete ...'
while test $x -gt 0; do
    if test -d ${DIR} ; then
        x=-1
    fi;
    x=$((x - 1))
    sleep 5;
    echo -n '.'
done
if [[ $x = 0 ]]; then
    echo "[FAIL]"
    echo "Wordpress startup failed after 60 seconds wait"
    echo "Check the docker log files"
    exit 1
else
    echo "[OK]"
    exit 0
fi
sleep 5
