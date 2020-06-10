$(document).ready(function() {
    let field_errors = [];
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('submit', '#form-contact-edit', function(event) {
        event.preventDefault();
        let data = $(this).serializeArray();
        let url = route_contact_update + '/' + contact_id;

        $.ajax({
            url: url,
            dataType: 'json',
            method: 'put',
            data: data
        })
        .done(function(response) {
            console.log(response);
            removeErrors();

            if(response.success == true) {
                $('#form-contact-edit')[0].reset();
                $('#modal-contact-edit').modal('hide');
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
            console.log(field)
            if(index == 0) {
                $(`#edit-${field}`).focus();
            }
            field_errors.push(field);
            $(`#edit-${field}`).addClass('is-invalid');  
            $(`#edit-${field}`).after(`<span id="error_edit_${field}" class="error invalid-feedback">${errors[field]}</span>`);
            $(`#error_${field}`).addClass('d-block');
        });
    }

    function removeErrors() {
        field_errors.forEach(function(field) {
            $(`#edit-${field}`).removeClass('is-invalid');  
            $(`#error_edit_${field}`).remove();  
        });
    }
});