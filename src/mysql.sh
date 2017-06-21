#!/bin/bash
cat /vagrant/src/wordpress.sql | docker exec -i $(docker ps -a | grep mariadb | awk '{print $1}') /usr/bin/mysql -u root --password=wordpress wordpress
cat /vagrant/src/relayr.sql | docker exec -i $(docker ps -a | grep mariadb | awk '{print $1}') /usr/bin/mysql -u root --password=wordpress wordpress
