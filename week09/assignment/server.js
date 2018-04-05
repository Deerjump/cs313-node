const express = require('express');
const app = express();

function calculatePrice(weight, package){
	switch(){
		case "stamp":
			if(weight > 3){
				return weight * 1.13;
			}
			else if(weight > 2){
				return weight * .92;
			}
			else if(weight > 1){
				return weight * .71;
			}
			else if(weight < 1 && weight > 0){
				return weight * .5;
			}
			else{

			}
		case "meter":
			if(weight > 3){
				return weight * 1.10;
			}
			else if(weight > 2){
				return weight * .89;
			}
			else if(weight > 1){
				return weight * .68;
			}
			else if(weight < 1 && weight > 0){
				return weight * .47;
			}
			else{

			}
		case "flat":
			if(weight > 13){
				return weight * 3.52;
			}
			else if(weight > 12){
				return weight * 3.31;
			}
			else if(weight > 11){
				return weight * 3.10;
			}
			else if(weight > 10){
				return weight * 2.89;
			}
			else if(weight > 9){
				return weight * .2.68;
			}
			else if(weight > 8){
				return weight * 2.47;
			}
			else if(weight > 7){
				return weight * 2.26;
			}
			else if(weight > 6){
				return weight * 2.05;
			}
			else if(weight > 5){
				return weight * 1.84;
			}
			else if(weight > 4){
				return weight * 1.63;
			}
			else if(weight > 3){
				return weight * 1.42;
			}
			else if(weight > 2){
				return weight * 1.21;
			}
			else if(weight < 1 && weight > 0){
				return weight;
			}
			else{

			}
		case "firstclass":
			if(weight > 13){
				return weight * 5.5;
			}
			else if(weight > 12){
				return weight * 5.15;
			}
			else if(weight > 11){
				return weight * 4.8;
			}
			else if(weight > 10){
				return weight * 4.45;
			}
			else if(weight > 9){
				return weight * 4.1;
			}
			else if(weight > 5){
				return weight * 3.75;
			}
			else if(weight > 0){
				return weight * 3.5;
			}
	}
}

app.set('port', process.env.PORT || 5000)
   .set('view engine', 'ejs')
   .get('/', (req,res) =>{
   	res.render('index');
   })
   .get('/result',function(req,res){
   		var package = req.query.mail;
   		var weight = req.query.weight;
   		var price = calculatePrice(weight, package);



   }
   .listen(5000)