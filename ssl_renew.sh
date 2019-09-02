#!/bin/bash

cd /home/ubuntu/docker/personal-blog/ \
&& /usr/local/bin/docker-compose -f docker-compose.yml run certbot renew --dry-run \
&& /usr/local/bin/docker-compose -f docker-compose.yml kill -s SIGHUP nginx