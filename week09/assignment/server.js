const express = require('express');
const app = express();

function calculatePrice(weight, package){
	switch(package){
		case "stamp":
			if(weight > 3){
				return weight * 1.13;
				break;
			}
			else if(weight > 2){
				return weight * .92;
				break;
			}
			else if(weight > 1){
				return weight * .71;
				break;
			}
			else if(weight < 1 && weight > 0){
				return weight * .5;
				break;
			}
		case "meter":
			if(weight > 3){
				return weight * 1.10;
				break;
			}
			else if(weight > 2){
				return weight * .89;
				break;
			}
			else if(weight > 1){
				return weight * .68;
				break;
			}
			else if(weight < 1 && weight > 0){
				return weight * .47;
				break;
			}
		case "flat":
			if(weight > 13){
				return weight * 3.52;
				break;
			}
			else if(weight > 12){
				return weight * 3.31;
				break;
			}
			else if(weight > 11){
				return weight * 3.10;
				break;
			}
			else if(weight > 10){
				return weight * 2.89;
				break;
			}
			else if(weight > 9){
				return weight * 2.68;
				break;
			}
			else if(weight > 8){
				return weight * 2.47;
				break;
			}
			else if(weight > 7){
				return weight * 2.26;
				break;
			}
			else if(weight > 6){
				return weight * 2.05;
				break;
			}
			else if(weight > 5){
				return weight * 1.84;
				break;
			}
			else if(weight > 4){
				return weight * 1.63;
				break;
			}
			else if(weight > 3){
				return weight * 1.42;
				break;
			}
			else if(weight > 2){
				return weight * 1.21;
				break;
			}
			else if(weight < 1 && weight > 0){
				return weight;
				break;
			}
		case "firstclass":
			if(weight > 13){
				return weight * 5.5;
				break;
			}
			else if(weight > 12){
				return weight * 5.15;
				break;
			}
			else if(weight > 11){
				return weight * 4.8;
				break;
			}
			else if(weight > 10){
				return weight * 4.45;
				break;
			}
			else if(weight > 9){
				return weight * 4.1;
				break;
			}
			else if(weight > 5){
				return weight * 3.75;
				break;
			}
			else if(weight > 0){
				return weight * 3.5;
				break;
			}
	}
}

app.set('port', process.env.PORT || 5000)
	.use(express.static(__dirname + '/public'))
   .set('view engine', 'ejs')
   .get('/', (req,res) =>{
   	res.render('index');
   })
   .get('/results',function(req,res){
   		var package = req.query.mail;
   		var weight = req.query.weight;
   		var price = calculatePrice(weight, package);
   		price = price.toFixed(2);

   		res.render('results', {package: package, price: price});	

   })
   .listen(5000,function(){
		console.log("Server listening on port 5000")
   })