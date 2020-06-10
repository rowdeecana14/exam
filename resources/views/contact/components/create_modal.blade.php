<form class="form-horizontal" id="form-contact-create">
    <div class="modal fade" id="modal-contact-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user-plus"></i> Add contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="company" class="col-sm-3 col-form-label">Company:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Enter company">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Phone:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
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