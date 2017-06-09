#!/bin/bash

USER=$(whoami)
sudo apt-get install docker docker-compose
docker-compose up -d

x=20
while test $x -gt 0; do
    if test -d wp-content/themes; then
        sudo ln -s ../../etherparty-theme .
        x=0
    fi;
    x=$((x - 1))
    sleep 5;
done

sudo chmod -R "$USER" .
