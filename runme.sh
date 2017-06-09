#!/bin/bash

USER=$(whoami)
sudo apt-get install docker docker-compose
docker-compose up -d

x=20
echo -n 'waiting for Wordpress setup to complete ...'
while test $x -gt 0; do
    if test -d wp-content/themes; then
        cd wp-content/themes
        sudo ln -s ../../etherparty-theme .
        cd ../..
        x=0
    fi;
    x=$((x - 1))
    sleep 5;
    echo -n '.'
done
echo

sudo chown -R "$USER" .
