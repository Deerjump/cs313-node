var express = require('express');
var app = express();

app.set('port', 5000)
    .get('/game/:id', handleSingleGame)
    .get('/games', handleGameList)
	.listen(app.get('port'), function() {
		console.log('Listening on port: ' + app.get('port'));
});

function handleSingleGame(req,res){
	var id = req.params.id;
	console.log('Getting single game with id...');

	var result = {id: id, title: 'Super Smash Bros'};

	res.json(result);
}

function handleGameList(req,res){
	console.log('Getting game list');
	var resultList = [{id:1, title:'Oregon Trail'},
					  {id:2, title:'Night in the Woods'},
					  {id:3, title:'Mario Kart'}];

  	res.json(resultList);
}