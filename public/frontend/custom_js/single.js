
  $(document).ready(function () {
    let package = "basic";

    const tabs = $('.tab');
    const infoElements = $('.info');
    const countElement = $('#notification_count');
    const gigIdNumber = parseInt($('#gig_id').attr('name'));

    function showTab(tabId) {
      tabs.removeClass('active');
      infoElements.removeClass('active');

      const selectedTab = $(`[data-tab="${tabId}"]`);
      selectedTab.addClass('active');

      const infoElement = $(`#${tabId}-info`);
      infoElement.addClass('active');
      package = tabId.replace('-tab', '');
    }

    tabs.on('click', function () {
      const tabId = $(this).data('tab');
      showTab(tabId);
    });

    showTab('basic-tab');

    $('.order-button').on('click', function (e) {
      e.preventDefault();
      // Serialize the form data
      const formData = form.serialize();

   console.log(formData);
      Swal.fire({
        title: 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Placing Order',
            icon: 'info',
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
          });

          $.ajax({
            type: 'post',
            url: "{{ route('orders.store') }}", // Replace with your actual URL
            data: formData,
            success: function (response) {
              Swal.close();
              if (response.success) {
                Swal.fire({
                  title: 'Order Placed Successfully',
                  icon: 'success',
                  confirmButtonText: 'Ok',
                });
              }
              else{
                Swal.fire({
                  title: 'Faild to place order',
                  icon: 'error',
                  confirmButtonText: 'Ok',
                });
              }
            },
            error: function (error) {
              console.error('Error placing order:', error);
              Swal.fire({
                title: 'Error Placing Order',
                icon: 'error',
                confirmButtonText: 'Ok',
              });
            }
          });
        }
      });
    });
  });