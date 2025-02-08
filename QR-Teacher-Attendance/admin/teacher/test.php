<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
 
</head>

<body>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#add">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Teachers</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="add.php " method="post" id="addForm">
            <div class="row">
              <div class="col-sm-12">
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


            </div>
            <!-- <div>
              <button type="submit" name="add" class="btn btn-primary" id="alert">Save</button>

              <button class="btn btn-danger m-2" ​ type="reset">Clear</button>
            </div> -->
            <!-- <div>
                                                            <button type="submit">Cancell</button>
                                                        </div> -->
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/js/core/bootstrap.min.js"></script>
</body>

</html>