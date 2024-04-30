<div id="addUser" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addUserLabel"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name" required>
                            <label for="firstName" class="form-label">First Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name" required>
                            <label for="firstName" class="form-label">Last Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name" required>
                            <label for="firstName" class="form-label">Email Address</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name" required>
                            <label for="firstName" class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <select class="form-control" name="division" id="division" required>
                                <option disabled selected>-- Please Choose --</option>
                                <option value="Office of the Director">Office of the Director</option>
                                <option value="Office of the Assistant Director">Office of the Assistant Director</option>
                                <option value="Program Development Division">Program Development Division</option>
                                <option value="Program Monitoring, Evaluation, and Linkaging Division">Program Monitoring, Evaluation, and Linkaging Division</option>
                                <option value="Knowledge Management and Information Systems Division">Knowledge Management and Information Systems Division</option>
                                <option value="Administrative & Finance Division">Administrative & Finance Division</option>
                            </select>
                            <label class="form-label" for="division">Role</label>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>