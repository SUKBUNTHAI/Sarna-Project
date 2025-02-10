<form action="add.php " method="post" id="addForm" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Name</label>
                                        <input
                                            name="name"
                                            id="addName"
                                            type="text"
                                            class="form-control"
                                            placeholder="Full Name"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Sex</label>
                                        <input name="sex"
                                            id="addSex"
                                            type="text"
                                            class="form-control"
                                            placeholder="Sex"
                                            required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Age</label>
                                        <input name="age"
                                            id="addAge"
                                            type="number"
                                            class="form-control"
                                            placeholder="Age"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Date of Birth</label>
                                        <input name="dob"
                                            id="addDOB"
                                            type="date"
                                            class="form-control"
                                            placeholder="Date of Birth"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Place of Birth</label>
                                        <input name="pob"
                                            id="addPOB"
                                            type="text"
                                            class="form-control"
                                            placeholder="Place of Birth"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Phone Number</label>
                                        <input name="phone"
                                            id="addPhone"
                                            type="text"
                                            class="form-control"
                                            placeholder="Phone Number"
                                            required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Address</label>
                                        <input name="address"
                                            id="addAddress"
                                            type="text"
                                            class="form-control"
                                            placeholder="Address"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Image</label>
                                        <input name="image"
                                            id="image"
                                            type="file"
                                            class="form-control"
                                            placeholder="Chhoose Files"
                                            required />
                                    </div>
                                </div>


                            </div>
                            <div>
                                <button type="submit" name="add" class="btn btn-primary" id="alert">Save</button>

                                <button class="btn btn-danger m-2" ​ type="reset">Clear</button>
                            </div>
                            <!-- <div>
                                                            <button type="submit">Cancell</button>
                                                        </div> -->
                        </form>