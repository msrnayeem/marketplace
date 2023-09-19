$(document).ready(function() {
    var toggleButtons = $(".toggle-collapse");

    toggleButtons.each(function(index) {
       
        $(this).on("click", function() {

            var collapseDiv = $(this).next(".collapse");
            collapseDiv.toggleClass("show");

            var icon = $(this).find("i");
            if (icon.hasClass("fa-chevron-down")) 
            {
                icon.removeClass("fa-chevron-down").addClass("fa-chevron-up");
            } 
            else {
                icon.removeClass("fa-chevron-up").addClass("fa-chevron-down");
            }
        });
    });
});