#!/bin/bash

service nginx start
service php7.2-fpm start

while true; do sleep 1d; done
