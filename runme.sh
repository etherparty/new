#!/bin/bash

USER=$(whoami)
sudo apt-get install docker docker-compose
docker-compose up -d
sleep 5
sudo chmod -R "$USER" .
cd wp-content/themes
ln -s ../../new/etherparty-theme ./etherparty-theme
