# RabbitMQ CodeIgniter Library
A RabbitMQ wrapper library for CodeIgniter frameworks.

## Dependencies
- RabbitMQ server version 3.5.5
- CodeIgniter PHP Framework version 3.0.1
- [php-amqplib](https://github.com/videlalvaro/php-amqplib)


## Installing RabbitMQ
You can see full documentation for installing RabbitMQ server from [official website](https://www.rabbitmq.com/download.html). However, i will give a short step how to install RabbitMQ server in Mac.

For Mac user's, you can install RabbitMQ server using brew, a package manager for OS X. If you haven't install brew on your Mac, please refer to this [website](http://brew.sh/)

### Install the server
Before installing make sure you have the latest brews:
```
brew update
```
Then, install RabbitMQ server with:
```
brew install rabbitmq
```
You will get similar result in terminal
```
==> Downloading https://www.rabbitmq.com/releases/rabbitmq-server/v3.5.5/rabbitm
######################################################################## 100.0%
==> /usr/bin/unzip -qq -j /usr/local/Cellar/rabbitmq/3.5.5/plugins/rabbitmq_mana
==> Caveats
Management Plugin enabled by default at http://localhost:15672

Bash completion has been installed to:
  /usr/local/etc/bash_completion.d

To have launchd start rabbitmq at login:
  ln -sfv /usr/local/opt/rabbitmq/*.plist ~/Library/LaunchAgents
Then to load rabbitmq now:
  launchctl load ~/Library/LaunchAgents/homebrew.mxcl.rabbitmq.plist
Or, if you don't want/need launchctl, you can just run:
  rabbitmq-server
==> Summary
🍺  /usr/local/Cellar/rabbitmq/3.5.5: 1039 files, 28M, built in 45 seconds
```

### Run RabbitMQ server
The RabbitMQ server scripts are installed into /usr/local/sbin. This is not automatically added to your path, so you may wish to add PATH=$PATH:/usr/local/sbin to your .bash_profile or .profile. The server can then be started with rabbitmq-server. All scripts run under your own user account. Sudo is not required.
```
RabbitMQ 3.5.5. Copyright (C) 2007-2015 Pivotal Software, Inc.
##  ##      Licensed under the MPL.  See http://www.rabbitmq.com/
##  ##
##########  Logs: /usr/local/var/log/rabbitmq/rabbit@localhost.log
######  ##        /usr/local/var/log/rabbitmq/rabbit@localhost-sasl.log
##########
Starting broker... completed with 10 plugins.
```


## Installing RabbitMQ CodeIgniter Library
 - Copy file config/config.php into your CodeIgniter project's config directory
 - Copy file libraries/queue.php into your CodeIgniter project's libraries directory
 - Copy all files in third_party folder into your CodeIgniter project's third_party directory
