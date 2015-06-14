Demo for ["Rock Validate"](https://github.com/romeOz/rock-validate)
====================

See Demo (one of two ways)
-------------------

####1. Docker + Ansible

 * `docker run -d -p 8080:80 romeoz/vagrant-rock-validate`
 * Open demo [http://localhost:8080/](http://localhost:8080/)
 
####2. VirtualBox + Vagrant + Ansible

 * `git clone https://github.com/romeOz/vagrant-rock-validate.git`
 * [Install VirtualBox](https://www.virtualbox.org/wiki/Downloads)
 * [Install Vagrant](https://www.vagrantup.com/downloads), and additional Vagrant plugins `vagrant plugin install vagrant-hostsupdater vagrant-vbguest vagrant-cachier`
 * [Install Ansible](http://docs.ansible.com/intro_installation.html#latest-releases-via-apt-ubuntu)
 * `vagrant up`
 * Open demo [http://www.rock-validate/](http://www.rock-validate/) or [http://192.168.33.35/](http://192.168.33.35/)

> Work/editing the project can be done via ssh:

```bash
vagrant ssh
cd /var/www/rock-validate
```

License
-------------------

The Demo for ["Rock Validate"](https://github.com/romeOz/rock-validate) is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)