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
            url: route_user_store,
            type: 'post',
            dataType: 'json',
            data: data
        })
        .done(function(data) {
            removeErrors();
            if(data.success == true) {
                alertify.alert('Alert message', data.message);
                $('#form-user-create')[0].reset();
                $('#modal-contact-create')
            }
            else {
                return renderError(data.errors);
            }
        })
        .fail(function(data) {
            console.log(data.responseText);
        });
    });

    function renderError(errors) {
        if(errors == undefined) {
            return false;
        }
        
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