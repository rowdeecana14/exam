@extends('layouts.master')

@section('content')
<div class="container ">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5><i class="fa fa-table"></i> List of contacts</h5>
                <button class="btn btn-outline-primary pull-right" data-toggle="modal" data-target="#modal-contact-create">
                    <i class="fa fa-user-plus"> </i> Add User
                </button>
            </div>
        </div>
        <div class="card-body">
            @include('contact.components.pagination', $contacts)
            @include('contact.components.create_modal')
            @include('contact.components.edit_modal')
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript" >
    let contact_id = 0;
    let route_contact_destory = '{{ route("contact.destroy", "") }}';
    let route_contact_store = '{{ route("contact.store") }}';
    let route_contact_edit = '{{ route("contact.edit", "") }}';
    let route_contact_update = '{{ route("contact.update", "") }}';
</script>
<script type="text/javascript" src="{{ asset('/js/contact/delete.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/contact/create.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/contact/edit.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/contact/update.js') }}"></script>
@endsection