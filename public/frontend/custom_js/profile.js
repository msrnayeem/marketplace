$(document).ready(function() {
  
  $('.carousel-control-prev, .carousel-control-next').hide();
  $('.carousel').hover(function () {
      $(this).find('.carousel-control-prev, .carousel-control-next').fadeIn();
  }, function () {
      $(this).find('.carousel-control-prev, .carousel-control-next').fadeOut();
  });

    // When clicking on "Active gigs", show the corresponding section and hide "Drafts"
    $('#active-gigs').on('click', function() {
        $('#for_gigs').show();
        $('#for_drafts').hide();
        
        $(this).css('color','black');
        $('#drafts').css('color','#1dbf73');
        $(this).css('border-bottom','6px solid #1dbf73');
        $('#drafts').css('border-bottom','6px solid #f7f7f7');
    });

    // When clicking on "Drafts", show the corresponding section and hide "Active gigs"
    $('#drafts').on('click', function() {
        $('#for_drafts').show();
        $('#for_gigs').hide();
  
        $(this).css('color','black');
        $('#active-gigs').css('color','#1dbf73');
        $(this).css('border-bottom','6px solid #1dbf73');
        $('#active-gigs').css('border-bottom','6px solid #f7f7f7');
    });

    // Add click event listener to the edit icon
    $("#edit-icon").click(function() {
      // Hide the name and show the edit-name section
      $("#name").hide();
      $("#edit-name").removeClass("hidden");
      $("#edit-buttons").removeClass("hidden");
      
      
    });

    // Add click event listener to the cancel button
    $("#cancel-button").click(function() {
      // Show the name and hide the edit-name section
      $("#name").show();
      $("#edit-name").addClass("hidden");
    });

    // Add click event listener to the update button
    $("#update-button").click(function() {
      // Update the name with the value from the input field
      var newName = $("#name-input").val();
      $("#name").text(newName);

      // Show the name and hide the edit-name section
      $("#name").show();
      $("#edit-name").addClass("hidden");
    });
  
  // Edit description icon click event
  $("#edit-description-icon").click(function() {
      // Hide the description and show the edit-description section
      $("#description").hide();
      $("#edit-description").removeClass("hidden");
    });

    // Cancel button click event
    $("#cancel-description-button").click(function() {
      // Show the description and hide the edit-description section
      $("#description").show();
      $("#edit-description").addClass("hidden");
    });

    // Update button click event
    $("#update-description-button").click(function() {
      // Update the description with the value from the input field
      var newDescription = $("#description-input").val();
      $("#description").text(newDescription);

      // Show the description and hide the edit-description section
      $("#description").show();
      $("#edit-description").addClass("hidden");
    });

});

