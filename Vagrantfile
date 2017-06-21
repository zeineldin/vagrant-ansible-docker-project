# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.synced_folder ".", "/vagrant"
  config.vm.provider "virtualbox" do |v|
    v.memory = 2048
  end
  config.vm.define :testvm, primary: true do |testvm|
    testvm.vm.network :forwarded_port, host: 8080, guest: 8080
    testvm.vm.network :forwarded_port, host: 3306, guest: 3306
    testvm.vm.network :forwarded_port, host: 2201, guest: 22, id: "ssh", auto_correct: true
    testvm.vm.network "private_network", ip: "192.168.50.100"
    testvm.vm.provision "shell", path: "bootstrap.sh"
    testvm.vm.provision :shell, inline: 'ansible-playbook /vagrant/ansible/ansible.yml -c local -v'
    testvm.vm.hostname = "testvm"
  end
end
