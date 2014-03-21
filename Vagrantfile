Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu-precise12042-x64-vbox43"
  config.vm.box_url = "http://box.puphpet.com/ubuntu-precise12042-x64-vbox43.box"

  config.vm.network "private_network", ip: "33.33.33.97"

  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.network "forwarded_port", guest: 3306, host: 3307
  config.vm.synced_folder "./", "/var/www", id: "vagrant-root", :nfs => true

  config.vm.usable_port_range = (2200..2250)
  
  config.hostmanager.enabled = true
  config.hostmanager.manage_host = true
  config.hostmanager.ignore_private_ip = false
  config.hostmanager.include_offline = true

  config.vm.provider :virtualbox do |virtualbox|
    virtualbox.customize ["modifyvm", :id, "--name", "votecerto-ubuntu"]
    virtualbox.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    virtualbox.customize ["modifyvm", :id, "--memory", "1500"]
    virtualbox.customize ["setextradata", :id, "--VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"]
  end

  config.vm.provision :shell, :path => "puppet/shell/initial-setup.sh"
  config.vm.provision :shell, :path => "puppet/shell/librarian-puppet-vagrant.sh"
  config.vm.provision :puppet do |puppet|
    puppet.facter = {
      "ssh_username" => "vagrant"
    }

    puppet.manifests_path = "puppet/manifests"
    puppet.options = ["--verbose", "--hiera_config /vagrant/hiera.yaml", "--parser future"]
  end

  config.vm.provision :shell, :path => "puppet/shell/selenium.sh"

  config.vm.hostname = 'votecerto.dev'
  config.vm.provision :hostmanager
  
  config.ssh.username = "vagrant"
  config.ssh.shell = "bash -l"
  config.ssh.keep_alive = true
  config.ssh.forward_agent = true
  config.ssh.forward_x11 = false
  config.vagrant.host = :detect
end

