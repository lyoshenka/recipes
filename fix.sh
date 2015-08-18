#!/bin/bash

find content/ -iname '*.txt' | xargs fromdos
sudo chown -R www-data content/ thumbs/ site/accounts/
