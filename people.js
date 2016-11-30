var people = (function(){
	var people = ['Will', 'Steve'];

	// cache DOM
	var $el = $('#peopleModule');
	var $button = $el.find('button');
	var $input = $el.find('input');
	var $ul = $el.find('table');
	var template = $el.find('#people-template').html();

	// bind events
	$button.on('click', addPerson);
	$ul.delegate('i.del', 'click', deletePerson);

	_render(); // _ private 

	// functions
	function _render(){
		$ul.html(Mustache.render(template, {people: people}));
		//stats.setPeople(people.length); // sent event to module (pre-pub)
		events.emit('peopleChanged', people);
	}

	function addPerson(value){
		var name = (typeof value === "string") ? value : $input.val();
		people.push(name);
		_render();
		$input.val('');
		$input.focus();
	}

	function deletePerson(event){
		var i;
		if(typeof event === "number"){
			i=event;
		} else {
			var $remove = $(event.target).closest('tr');
			i = $ul.find('tr').index($remove);
		}

		people.splice(i, 1);
		_render();
	}

	function returnPeople(){
		console.log(people);
	}

	return{
		addPerson: addPerson,
		deletePerson: deletePerson,
		returnPeople: returnPeople
	};


})();