'use strict'

	var allCones = Math.floor(Math.random() * 50) + 50;
	var conesremain = allCones;
	console.log("I have " + allCones + " cones to sell.")
	do{
			var cones = Math.floor(Math.random() * 5) + 1;
	if (cones <= conesremain){
			 conesremain = (conesremain - cones);
		console.log(cones + " cones sold, " + conesremain + " cones remaining.")
	} else console.log(" I cannot sell you " + cones + " I only have " + conesremain)
		
	} while (conesremain > 0);
		console.log("Yay! I sold them all!");

//this is assignment 2//
	var i = 1;

	while (i < 65536) {
			i = i * 2
			console.log(i);
	}

	


	