
document.addEventListener("DOMContentLoaded", function() {
    const accordionItems = document.querySelectorAll(".accordion");

    accordionItems.forEach(item => {
        item.addEventListener("click", function(event) {
            event.stopPropagation();

            const target = item.getAttribute("data-target");
            const panel = document.getElementById(target + "-panel");
            const icon = item.querySelector("small");

            if (panel.style.display === "block") {
                icon.classList.remove("open");
                console.log("removed");
                panel.style.display = "none";
                
               
            } else {
                icon.classList.add("open");
                closeNextPanels(item);
                panel.style.display = "block";
                
            }
        });
    });

    function closeNextPanels(item) {
        const nextPanels = item.nextElementSibling.querySelectorAll(".panel");
        nextPanels.forEach(panel => {
            panel.style.display = "none";
        });
        const nextIcons = item.nextElementSibling.querySelectorAll(".accordion-icon");
        nextIcons.forEach(icon => {
            icon.classList.remove("open");
        });
    }
});