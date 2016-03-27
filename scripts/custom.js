$(document).ready(function() {
	console.log("one");
	$.getJSON("data/categories.json", function(data){
		$.each( data, function(key, value) {
			console.log(value);
		});
	});
});