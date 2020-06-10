$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.btn-delete', function() {
        let user_id = $(this).attr('user-id');
        let url = route_user_remove + '/' + user_id;
        $.ajax({
            url: url,
            method: 'post',
        })
        .done(function(data) {
            if(data.success == true) {
                alertify.success(data.message);
                getUsers();
            }
            else {
                alertify.error(data.message);
            }
        })
        .fail(function(data) {
            console.log(data.responseText);
        });
    });

    function getUsers() {
        $.ajax({
            url: route_user_list,
            method: 'get',
        })
        .done(function(data) {
            if(data.success == true) {
                renderUsers(data.users.data);
            }
            else {
                alertify.error(data.message);
            }
        })
        .fail(function(data) {
            console.log(data.responseText);
        });
    }

    function renderUsers(data) {
        let html = '';
        data.forEach(function(user, index) {
            html += `
            <tr>
                <td>${ index + 1 }</td>
                <td>${ user.first_name } ${ user.last_name } </td>
                <td>${ user.gender }</td>
                <td>${ user.username }</td>
                <td>${ user.email }</td>
                <td>${ user.created_at }</td>
                <td>
                    <div class="btn-group float-right">                  
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-list-ul"></i> Option 
                        </button>                  
                        <ul class="dropdown-menu" style="margin-left: -45px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(45px, 31px, 0px);" x-placement="bottom-start" x-out-of-boundaries="">
                            <li>
                                <a class="dropdown-item btn-edit" style="cursor:pointer" href="{{ route('user.edit', HashHelper::encode($user->id)) }}">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item btn-delete" style="cursor:pointer" user-id="{{ HashHelper::encode($user->id) }}">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </li>                  
                        </ul>
                    </div>
                </td>
            </tr>
            `;
        });

        $('.tbody-users').html(html);
        console.log(html)
    }
});