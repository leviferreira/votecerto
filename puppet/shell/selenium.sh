#!/bin/sh
set -e

if [ -e /.installed ]; then
  echo 'SELENIUM Already installed.'

else
  echo ''
  echo 'INSTALLING'
  echo '----------'

  # Add Google public key to apt
  wget -q -O - "https://dl-ssl.google.com/linux/linux_signing_key.pub" | sudo apt-key add -

  # Add Google to the apt-get source list
  echo 'deb http://dl.google.com/linux/chrome/deb/ stable main' >> /etc/apt/sources.list

  # Update app-get
  apt-get update

  # Install Java, Chrome, Xvfb, and unzip
  apt-get -y install openjdk-7-jre google-chrome-stable xvfb unzip

  # Download and copy the ChromeDriver to /usr/local/bin
  cd /tmp
  wget "http://chromedriver.storage.googleapis.com/2.8/chromedriver_linux64.zip"
  wget "https://selenium.googlecode.com/files/selenium-server-standalone-2.35.0.jar"
  unzip chromedriver_linux64.zip
  mv chromedriver /usr/local/bin
  mv selenium-server-standalone-2.35.0.jar /usr/local/bin

  # So that running `vagrant provision` doesn't redownload everything
  touch /.installed
fi

# Start Xvfb, Chrome, and Selenium in the background
export DISPLAY=:10
cd /vagrant

echo "Starting Xvfb ..."
Xvfb :10 -screen 0 1920x1080x24 -ac -extension RANDR&

echo "Starting Google Chrome ..."
google-chrome --remote-debugging-port=9222 &

echo "Starting Selenium ..."
cd /usr/local/bin
sudo chmod -R 755 chromedriver
nohup java -jar ./selenium-server-standalone-2.35.0.jar &
