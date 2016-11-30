var log = (function(){
	var log=[];

	// cache DOM
	var $ul = $("#logModule").find('ul');
	var template=$("#log-template").html();

	// bind Events
	events.on('peopleChanged', setPeople);
	events.on('statsChanged', setStats);

	// functions
	function render(){
		$ul.append('<li>'+log+'</li>');
	}

	function setPeople(newPeople){
		log=newPeople;
		render();
	}

	function setStats(newStat){
		console.log(newStat);
	}

})();