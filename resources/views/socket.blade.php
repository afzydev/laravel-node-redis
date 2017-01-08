<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.2/socket.io.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

<h1>My First NodeApp</h1>

<ul id="messages">

</ul>

<script type="text/javascript">
var socket = io('localhost:3000');

socket.on( 'test-channel:App\\Events\\UserSignedUp', function( data ) {
    var actualContent = $( "#messages" ).html();
    var name = '<li>Name: <strong>' + data.username + '</strong> </li>';
    var age = '<li>Age: <strong>' + data.age + '</strong> </li>';
    var content = name+ age + actualContent;

    $( "#messages" ).html( content );
});
</script>
</body>
</html>
