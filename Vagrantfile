# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
  config.vm.box = "ubuntu/focal64"

  # Name our VM
  config.vm.provider "virtualbox" do |v|
    v.name = "LAMP Project"
    v.memory = 4096
    v.cpus = 1
  end

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.33.10"

  config.vm.synced_folder ".", "/var/www"
  # Execute shell script(s)
  config.vm.provision :shell, path: "provision/components/apache.sh"
  config.vm.provision :shell, path: "provision/components/php.sh"
  config.vm.provision :shell, path: "provision/components/mysql.sh"
  config.vm.provision :shell, path: "provision/components/phpmyadmin.sh"
end
