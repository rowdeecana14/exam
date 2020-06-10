<div class="col-12">
    <div class="card-body table-responsive p-0 mt-2">
        <table class="table table-bordered">
            <thead>   
                <th width="1%">#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Username</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Action</th>
            </thead>
            <tbody class='tbody-users'>
                @forelse($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1  }}</td>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('M d, Y h:i:s A', strtotime($user->created_at)) }}</td>
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
                @empty
                    <tr>
                    <td colspan='8' class="text-center">NO RECORDS AVAILABLE</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="row mt-4">
        <div class="col-xs-12 col-md-6">
            <p id='p-total-list'>Showing 0 to 0 of 0 entries</p>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="pull-right">
                @if(count($users) > 0)
                    {{ $users->onEachSide(1)->links() }}
                @endif
            </div>
        </div>
    </div>        
    <!-- /.card-body -->
</div>