var express = require('express');

var app = express();
var session = require('express-session');

app.set('port', process.env.PORT || 5000)
	.use(express.static(__dirname + '/public'))
	.use(session({
		secret: 'swain cranston',
		resave: false,
		saveUnintialized: true
	}))
	.use(express.urlencoded({extended:true}))
	.use(express.json())
	/*.get('/', function(req, res){
		res.redirect('/index.html');
	})*/
	.post('/login', login)
	.post('/logout', logout)
	.get('/getServerTime', getServerTime)
	.listen(app.get('port'), function(){
   	console.log('Listening on port: ' + app.get('port'))
   });


function login(req, res){
	var username = req.body.username;
	var password = req.body.password;

	var success = false;
	if(username == "admin" && password == "password"){
		req.session.username = username;

		success = true;
	}
	res.json({success:success});

}

function logout(req, res){
	var success = false;
	if(req.session.username){
		req.session.destroy(function(err){
			if (!err) {
				success = true;
			}
		});
	}
	res.json({success:success});
}

function getServerTime(){

}