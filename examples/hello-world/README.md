# Example Hello World
This example taken from [RabbitMQ tutorial website](https://www.rabbitmq.com/tutorials/tutorial-one-php.html)

File sender.php is a CodeIgniter controller used as sender to sending jobs into RabbitMQ server. File receiver.php is PHP file and should be running in Terminal

## Running receiver.php
- Open terminal or console.
- Change directory to example/hello-world folder.
- Execute PHP file in terminal using
```
php receiver.php
```
- You should get similar message like this in terminal or console
```
[*] Waiting for messages. To exit press CTRL+C
```
- Press CTRL+C to exit
