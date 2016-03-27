var getCategories = function() {
    $.getJSON("../data/categories.json", function(data) {
        $.each(data["categories"], function() {
            option = "<option value='" + this.name + "'>" + this.name + "</option>";
            $("#selectCategory").append(option);
        });
    });
};
var getActivities = function(category) {
    $.getJSON("../data/categories.json", function(data) {
        $.each(data["categories"], function() {
            if (this.name == category) {
                activities = this.activities;
                $.each(activities, function() {
                    option = "<option class='dynamic' value='" + this.name + "'>" + this.name + "</option>";
                    $("#selectActivity").append(option);
                });
            }
        });
    });
};
$(document).ready(function() {
    $("#selectCategory").on("change", function() {
    	$("#selectActivity option.dynamic").remove();
        var cat = $("#selectCategory").val();
        getActivities(cat);
    });
    getCategories();
});