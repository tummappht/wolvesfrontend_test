<html>
  <head>
    <title>Sample form</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap.css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/custom.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
  </head>

  <body>
    <div id="main">
      <?php include("header.php") ?>
      <?php include("sidebar.php") ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row page-header">
            <div class="col-md-6">
              <h3 class="mb-0">Form Layout</h3>
            </div>
            <div class="col-md-6">
              <div id="breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="mb-0">Other Sample form</h4>
                </div>
                <div class="card-body">
                  <form action="">
                    <h3 class="card-title">Person Info</h3>
                    <hr>
                    <div class="row pt-3">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="firstName">First Name</label>
                          <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstNameHelp" placeholder="Enter First Name" value="John doe">
                          <small id="firstNameHelp" class="form-text text-muted">This in inline help</small>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-invalid">
                          <label for="lastName">Last Name</label>
                          <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="lastNameHelp" placeholder="Enter Last Name" value="12n">
                          <small id="lastNameHelp" class="form-text">This field has error</small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group form-valid">
                          <label for="gender">Gender</label>
                          <select class="form-control" id="gender" name="gender" aria-describedby="genderHelp">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                          <small id="genderHelp" class="form-text">Select your gender</small>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="birthDate">Date of Birth</label>
                          <input type="text" class="form-control" id="birthDate" name="birthDate" placeholder="วว/ดด/ปปปป">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="category">Category</label>
                          <select class="form-control" id="category" name="category" aria-describedby="categoryHelp">
                            <option>Category 1</option>
                            <option>Category 2</option>
                            <option>Category 3</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label">Membership</label>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="memberFree" name="memberStatus" class="custom-control-input">
                            <label class="custom-control-label" for="memberFree">Free</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="memberPaid" name="memberStatus" class="custom-control-input">
                            <label class="custom-control-label" for="memberPaid">Paid</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <h3 class="mt-5">Address</h3>
                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="street">Street</label>
                          <input type="text" class="form-control" id="street" name="street">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="city">City</label>
                          <input type="text" class="form-control" id="city" name="city">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="state">State</label>
                          <input type="text" class="form-control" id="state" name="state">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="postcode">Post Code</label>
                          <input type="text" class="form-control" id="postcode" name="postcode">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="country">Country</label>
                          <select class="form-control" id="country" name="country">
                            <option selected disabled>--Select your Country--</option>
                            <option value="thai">Thailand</option>
                            <option value="country">country</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Save</button>
                        <button type="button" class="btn btn-secondary">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="mb-0">Other Sample Horizontal form</h4>
                </div>
                <div class="card-body">
                  <form action="" class="form-horizontal">
                    <h3 class="card-title">Person Info</h3>
                    <hr>
                    <div class="row pt-3">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3" for="firstName2">First Name</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" id="firstName2" name="firstName2" aria-describedby="firstNameHelp2" placeholder="Enter First Name" value="John doe">
                            <small id="firstNameHelp2" class="form-text text-muted">This in inline help</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row form-invalid">
                          <label class="text-right col-form-label col-md-3" for="lastName2">Last Name</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" id="lastName2" name="lastName2" aria-describedby="lastNameHelp2" placeholder="Enter Last Name" value="12n">
                            <small id="lastNameHelp2" class="form-text">This field has error</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3" for="gender2">Gender</label>
                          <div class="col-md-9">
                            <select class="form-control" id="gender2" name="gender2" aria-describedby="genderHelp2">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                            <small id="genderHelp2" class="form-text">Select your gender</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3" for="birthDate2">Date of Birth</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" id="birthDate2" name="birthDate2" placeholder="วว/ดด/ปปปป">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3" for="category2">Category</label>
                          <div class="col-md-9">
                            <select class="form-control" id="category2" name="category2">
                              <option>Category 1</option>
                              <option>Category 2</option>
                              <option>Category 3</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3">Membership</label>
                          <div class="col-md-9">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="memberFree2" name="memberStatus2" class="custom-control-input" checked>
                              <label class="custom-control-label" for="memberFree2">Free</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="memberPaid2" name="memberStatus2" class="custom-control-input">
                              <label class="custom-control-label" for="memberPaid2">Paid</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <h3 class="mt-2">Address</h3>
                    <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3" for="address1">Address 1</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" id="address1" name="address1">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3" for="address2">Address 2</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" id="address2" name="address2">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3" for="city2">City</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" id="city2" name="city2">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3" for="state2">State</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" id="state2" name="state2">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3" for="postcode2">Post Code</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" id="postcode2" name="postcode2">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="text-right col-form-label col-md-3" for="country2">Country</label>
                          <div class="col-md-9">
                            <select class="form-control" id="country2" name="country2">
                              <option selected disabled>--Select your Country--</option>
                              <option value="thai">Thailand</option>
                              <option value="country2">Country2</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-button">
                          <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Save</button>
                          <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include("footer.php") ?>
      </div>
    </div>
  </body>
</html>