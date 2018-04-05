var http = require('http');

function onRequest(req, res){
	var url = req.url;
	if(url == '/home'){
		res.write('<h1>Welcome to the Homepage</h1>');
		res.end();
	} else if(url == '/getData'){
		res.write('{"name": "Br. Burton", "class":"cs313"}');
		res.end();
	} else{
		res.write('<h1>Page Not Found</h1>');
		res.end();
	}
}

//create a server object:
http.createServer(onRequest).listen(5000); //the server object listens on port 8080
console.log('Listening on port 5000');