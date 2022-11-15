<!-- Modal For Update and delete-->
<div class="modal" id="updateModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Record</h5>
                <a href="#" class="d-flex justify-content-end" aria-label="Delete"><i class="fi-xnsuxl-trash-bin  fa-2x"></i></a>
            </div>
            <!-- Form -->
            <div class="modal-body">
                <form action="#" method="post" id="form">
                    <!-- Senior id -->
                    <div class="mb-3">
                        <label class="form-label required">ID Number</label>
                        <input type="text" id="update_sID" name="sID" class="form-control">
                    </div>
                    <!-- Fist , last and middle name -->
                    <div class="row">
                        <div class="col">
                            <label class="form-label required">Fist Name</label>
                            <input type="text" name="fistname" id="update_firstname" class="form-control" placeholder="Juan"
                                aria-label="First name">
                        </div>
                        <div class="col">
                            <label class="form-label required">Last Name</label>
                            <input type="text" name="lastname" id="update_lastname" class="form-control"
                                placeholder="Dela cruz" aria-label="Last name">
                        </div>
                        <div class="col col-lg-2">
                            <label class="form-label required">I.N</label>
                            <input type="text" name="middlename" id="update_middlename" class="form-control" placeholder="T"
                                aria-label="Middle name">
                        </div>
                    </div>
                    <!-- Contacts  -->
                    <div class="mb-2">
                        <label class="form-label required">Contact(number or email)</label>
                        <input type="text" name="contact" id="update_contact" class="form-control">
                    </div>
                    <!-- Date of birth -->

                    <div class="row">
                        <div class="col">
                            <div class="mb-2">
                                <label class="form-label required">Birthdate</label>
                                <input type="date" name="birthdate" id="update_birthdate" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label">Sex</label>
                            <select class="form-select" id="update_sex" name="sex">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <!-- Brgy, age and status -->
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Barangay</label>
                            <select class="form-select" id="update_barangay" name="barangay" style="width: auto;">
                                <option value="Balansay">Balansay</option>
                                <option value="Barangay 1">Barangay 1</option>
                                <option value="Barangay 2">Barangay 2</option>
                                <option value="Barangay 3">Barangay 3</option>
                                <option value="Barangay 4">Barangay 4</option>
                                <option value="Barangay 5">Barangay 5</option>
                                <option value="Barangay 6">Barangay 6</option>
                                <option value="Barangay 7">Barangay 7</option>
                                <option value="Barangay 8">Barangay 8</option>
                                <option value="Fatima">Fatima</option>
                                <option value="Payompon">Payompon</option>
                                <option value="San Luis (Ligang)">San Luis (Ligang)</option>
                                <option value="Talabaan">Talabaan</option>
                                <option value="Tangkalan">Tangkalan</option>
                                <option value="Tayamaan">Tayamaan</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label required">Age</label>
                            <input type="number" id ="update_age" name="age" class="form-control" placeholder=" > 59"
                                aria-label="Age">
                        </div>
                        <div class="col">
                            <!-- <div class="form-group mb-2"> -->
                            <label for="">Pension Status</label> <br>
                            <input class="form-check-input" id="update_status" type="radio" name="status" value="Yes" />
                            <label class="form-check-label" for="status">Yes</label>
                            <input class="form-check-input" id="update_status" type="radio" name="status" value="No" checked />
                            <label class="form-check-label" for="status">No</label>
                            <!-- </div> -->
                        </div>
                        <!-- Pension $$$ -->
                        <div class="mb-2">
                            <label class="form-label required">Pension</label>
                            <input type="number" id="update_pension" name="pension" class="form-control">
                        </div>
                    </div>
                    <!-- Modal button -->
                    <div class="modal-footer">
                        <button type="submit" name="submit" id="update_record" class="btn btn-primary">Update</button>
                        <input type="button" class="btn btn-secondary" id="cancel" value="Cancel" data-bs-dismiss="modal">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>