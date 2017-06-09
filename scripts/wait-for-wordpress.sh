#!/bin/bash

#
## just wait for the directory to appear
#

URL="http://localhost:8080/"

x=12
echo -n 'waiting for Wordpress setup to complete ...'
while test $x -gt 0; do
    python -c 'import requests; r = requests.get("'${URL}'");' >/dev/null 2>&1
    if test $? -eq 0; then
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
    sleep 5
    echo "[OK]"
    echo "The Wordpress server can be found here: ${URL}"
    exit 0
fi

