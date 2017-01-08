# Laravel Nodejs Redis

1.git clone https://github.com/afzydev/lara-quickstart.git

2.create .env and copy the content of .env.example and paste it into .env.

3.change "CACHE_DRIVER=file" to  "CACHE_DRIVER=redis"

4.Install Redis Client on your machine.Depending upon your system configuration download according to it.

###5.composer install

###6.npm install make sure all the node_modules gets install on your laravel root folder.

###7.php artisan serve

8.open http://localhost:8000 on your browser .

###6.Now start the node server "node server.js" which is present on root folder.It will start on port number 3000.

7.Open the second browser and see the real time changes.

8.Server and client interact using socket.io and the bus which is carrying message between them is REDIS.Redis is acting like message bus.I have used Redis pub/sub functionality on particular channel to broadcast the message to all the client.
