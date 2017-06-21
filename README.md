<<<<<<< HEAD
This project is to 

1. Using Vagrant, to define a local Virtualbox-based VM with any linux os in Vagrantfile.

2. Using Ansible, to install docker service on that machine

3. Using Ansible, run following docker containers inside a machine:

    - mysql (mariadb)

    - dummy web application (wordpress), which connects to DB, reads from it and prints "Hello, world".

    - consul service discovery

4. Application shall connect to a database and print 'Hello, world' upon success.

5. Application shall serve HTTP and be available on host's 127.0.0.1:8080


To run this project (you must have vagrant installed) 

1. clone the project 

2. run 'vagrant up; 
=======
# vagrant-ansible-docker-project
project to create docker containers using ansible which installed by bootstrap file after starting new VM using vagrant
>>>>>>> 5ecd1ff41abdaefa3143bab3a10f1ddd991a810f
