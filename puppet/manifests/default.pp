group { 'puppet': ensure => present }
Exec { path => [ '/bin/', '/sbin/', '/usr/bin/', '/usr/sbin/' ] }
File { owner => 0, group => 0, mode => 0644 }

class {'apt':
  always_apt_update => true,
}

Class['::apt::update'] -> Package <|
    title != 'python-software-properties'
and title != 'software-properties-common'
|>

apt::source { 'packages.dotdeb.org':
  location          => 'http://packages.dotdeb.org',
  release           => $lsbdistcodename,
  repos             => 'all',
  required_packages => 'debian-keyring debian-archive-keyring',
  key               => '89DF5277',
  key_server        => 'keys.gnupg.net',
  include_src       => true
}

if $lsbdistcodename == 'wheezy' {
  apt::source { 'packages.dotdeb.org-php55':
    location          => 'http://packages.dotdeb.org',
    release           => 'wheezy-php55',
    repos             => 'all',
    required_packages => 'debian-keyring debian-archive-keyring',
    key               => '89DF5277',
    key_server        => 'keys.gnupg.net',
    include_src       => true
  }
}

package { 'apache2-mpm-prefork':
  ensure => 'installed',
  notify => Service['apache'],
}

class { 'puphpet::dotfiles': }

package { [
    'build-essential',
    'vim',
    'curl',
    'git-core'
  ]:
  ensure  => 'installed',
}

class { 'apache': }

apache::dotconf { 'custom':
  content => 'EnableSendfile Off',
}

apache::module { 'rewrite': }


apache::vhost { 'votecerto.dev':
  server_name   => 'votecerto.dev',
  serveraliases => [
    'mapfre.dev'
  ],
  docroot       => '/var/www/web/',
  port          => '80',
  env_variables => [
],
  priority      => '1',
}

class { 'php':
  service             => 'apache',
  service_autorestart => false,
  module_prefix       => '',
}

php::module { 'php5-mysql': }
php::module { 'php5-cli': }
php::module { 'php5-curl': }
php::module { 'php5-intl': }
php::module { 'php5-mcrypt': }

class { 'php::devel':
  require => Class['php'],
}

class { 'php::pear':
  require => Class['php'],
}

php::pecl::module { 'mongo':
  use_package => false,
}

php::pecl::module { 'phar':
  use_package => false,
}

class {'::mongodb::server':
  auth => true,
}

mongodb::db { 'votecerto':
  user          => 'votecerto',
  password_hash => 'a15fbfca5e3a758be80ceaf42458bcd8',
}


if !defined(Package['git-core']) {
  package { 'git-core' : }
}

>>>>>>> Stashed changes
class { 'xdebug':
  service => 'apache',
}

class { 'composer':
  require => Package['php5', 'curl'],
}

class { 'mysql::server':
  config_hash   => { 'root_password' => 'root' }
}
