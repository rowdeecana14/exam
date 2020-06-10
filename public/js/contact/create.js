$(document).ready(function() {
    let field_errors = [];
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('submit', '#form-contact-create', function(event) {
        event.preventDefault();
        let data = $(this).serializeArray();

        $.ajax({
            url: route_contact_store,
            dataType: 'json',
            method: 'post',
            data: data
        })
        .done(function(response) {
            removeErrors();

            if(response.success == true) {
                $('#form-contact-create')[0].reset();
                $('#modal-contact-create').modal('hide');
                alertify.success(response.message);
                setTimeout(function() {
                    window.location.reload();
                }, 500);
            }
            else {
                renderError(response.errors);
                console.log(response);
            }
        })
        .fail(function(response) {
            console.log(response.responseText);
        });
    });

    function renderError(errors) {
        if(errors == undefined) {
            return false;
        }
        field_errors = [];
        Object.keys(errors).forEach(function(field, index) {
            if(index == 0) {
                $(`#${field}`).focus();
            }
            field_errors.push(field);
            $(`#${field}`).addClass('is-invalid');  
            $(`#${field}`).after(`<span id="error_${field}" class="error invalid-feedback">${errors[field]}</span>`);
            $(`#error_${field}`).addClass('d-block');
        });
    }

    function removeErrors() {
        field_errors.forEach(function(field) {
            $(`#${field}`).removeClass('is-invalid');  
            $(`#error_${field}`).remove();  
        });
    }
});