$(document).ready(function () {

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                // Add Bootstrap's was-validated class to enable validation styles
                form.classList.add('was-validated');

                // Check if the profession dropdown is not valid
                if ($('#profession').val() === '0') {
                    $('#profession').addClass('is-invalid');
                } else {
                    $('#profession').removeClass('is-invalid');
                    $('#profession').addClass('is-valid');
                }
            }, false);
        });


    const cameraIcon = document.querySelector('.camera-icon');
    const imageInput = document.getElementById('imageInput');
    const previewContainer = document.querySelector('.preview-container');
    const form = document.getElementById('imageForm');

    imageInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (event) {
                cameraIcon.style.display = 'none';
                const imageUrl = event.target.result;
                previewContainer.innerHTML = `<img src="${imageUrl}" alt="Profile Picture">`;
            };
            reader.readAsDataURL(file);
        }
    });


    $(document).on('click', '.add-icon', function () {
        const newInputGroup = $('<div class="input-group mb-3">' +
            '<input type="text" name="language[]" class="form-control language-input">' +
            '<div class="input-group-append">' +
            '<span class="input-group-text add-icon">+</span>' +
            '<span class="input-group-text remove-icon">-</span>' +
            '</div>' +
            '</div>');

        $('.language-fields').append(newInputGroup);
    });

    $(document).on('click', '.remove-icon', function () {
        $(this).closest('.input-group').remove();
    });
});
