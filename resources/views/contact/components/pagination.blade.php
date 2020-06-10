<div class="col-12">
    <div class="card-body table-responsive p-0 mt-2">
        <table class="table table-bordered">
            <thead>   
                <th width="1%">#</th>
                <th>NAME</th>
                <th>COMPANY</th>
                <th>PHONE</th>
                <th>EMAIL</th>
                <th></th>
            </thead>
            <tbody class='tbody-contacts'>
                @forelse($contacts as $index => $contact)
                    <tr>
                        <td>{{ $index + 1  }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->company }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-warning btn-edit" contact-id="{{ $contact->id }}"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger btn-delete" contact-id="{{ $contact->id }}"><i class="fa fa-trash"></i></button>
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
                @if(count($contacts) > 0)
                    {{ $contacts->onEachSide(1)->links() }}
                @endif
            </div>
        </div>
    </div>        
    <!-- /.card-body -->
</div>