<form class="form-horizontal" id="form-contact-edit">
    <div class="modal fade" id="modal-contact-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-edit"></i> Edit contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @method('PUT')
                <div class="form-group row">
                    <label for="edit-name" class="col-sm-3 col-form-label">Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="edit-name" name="name" placeholder="Enter name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="edit-company" class="col-sm-3 col-form-label">Company:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="edit-company" name="company" placeholder="Enter company">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="edit-phone" class="col-sm-3 col-form-label">Phone:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="edit-phone" name="phone" placeholder="Enter phone">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="edit-email" class="col-sm-3 col-form-label">Email:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="edit-email" name="email" placeholder="Enter email">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
                <button type="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> Save</button>
            </div>
            </div>
        </div>
    </div>
</form>