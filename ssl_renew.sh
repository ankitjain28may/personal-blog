#!/bin/bash

/usr/local/bin/docker-compose -f /home/ubuntu/docker/personal-blog/docker-compose.yml run certbot renew --dry-run \
&& /usr/local/bin/docker-compose -f /home/ubuntu/docker/personal-blog/docker-compose.yml kill -s SIGHUP nginx