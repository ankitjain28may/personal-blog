#!/bin/bash

docker-compose -f/home/ubuntu/docker/personal-blog/docker-compose.yml run certbot renew --dry-run \
&& docker-compose -f/home/ubuntu/docker/personal-blog/docker-compose.yml kill -s SIGHUP nginx