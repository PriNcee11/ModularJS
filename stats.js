var stats = (function(){
	var people = 0;

	// cache DOM
	var $stats = $('#statsModule');
	var template = $('#stats-template').html();

	// bind events
	events.on('peopleChanged', setPeople);

	render();

	// functions
	function render(){
		$stats.html(Mustache.render(template, {people: people}));
		events.emit('statsChanged', people);
	}

	function setPeople(newPeople){
		people = newPeople.length;
		render();
	}

	function destroy(){
		$stats.remove(); // remove HTML
		events.off('peopleChanged', setPeople); // remove event
	}

	// functions in return will be exposed
	return {
		destroy: destroy
	}

	// return {
	// 	setPeople: setPeople
	// } // pre-pub (people.js -> stats.setPeople) but now we dont want to expose the module to the API


})();