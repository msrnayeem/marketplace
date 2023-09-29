$(document).ready(function () {
    $(".accordion").click(function (event) {
        event.stopPropagation();
        const target = $(this).data("target");
        const panel = $("#" + target + "-panel");
        const icon = $(this).find("small");

        if (panel.is(":visible")) {
            icon.removeClass("open");

            panel.slideUp();
        } else {
            icon.addClass("open");
            closeNextPanels($(this));
            panel.slideDown();
        }
    });

    function closeNextPanels(item) {
        const nextPanels = item.nextAll().find(".panel");
        nextPanels.slideUp();
        const nextIcons = item.nextAll().find(".accordion-icon");
        nextIcons.removeClass("open");
    }
});
