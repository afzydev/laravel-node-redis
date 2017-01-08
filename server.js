var server =require('http').Server();

var io = require('socket.io')(server);

var Redis = require('ioredis');
var redis = new Redis();

redis.subscribe('test-channel');

io.on('connection',function(socket){
	console.log('Connection Established')
	redis.on('message', function(channel, message){
		//console.log('Message Recieved');
		//console.log(channel, message);
		message = JSON.parse(message);
		//console.log('Cool new user found : '+message.data.username);
		io.emit(channel + ':' + message.event, message.data);
	});
});

server.listen(3000);
