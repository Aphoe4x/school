<?php include 'layout/header.php'; ?>
<?php include 'layout/sidebar.php'; ?>

<main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 30px;">Users<button type="button" class="btn btn-primary" style="float:right; " data-bs-toggle="modal" data-bs-target="#scrollingModal">
                  Add User
                </button></h5>

              <section class="section">
                <div class="row">
                  <div class="col-lg-6">
                    <!--  Modal -->
                    <div class="modal fade" id="scrollingModal" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Add User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <h5 class="card-title">Provide User Details</h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-3" method="POST" action="layout/signup.php">
                              <div class="col-md-12">
                                <div class="form-floating">
                                  <input type="text" class="form-control" name="firstname" required id="floatingName" placeholder="Your Name">
                                  <label for="floatingName">First Name</label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-floating">
                                  <input type="text" class="form-control" name="lastname" required id="floatingName" placeholder="Your Name">
                                  <label for="floatingName">Last Name</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-floating">
                                  <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Your Email" required>
                                  <label for="floatingEmail">Your Email</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-floating">
                                  <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                                  <label for="floatingPassword">Password</label>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-floating">
                                  <textarea class="form-control" name="address" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                                  <label for="floatingTextarea">Address</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="col-md-12">
                                  <div class="form-floating">
                                    <input type="text" class="form-control" name="city" id="floatingCity" placeholder="City" required>
                                    <label for="floatingCity">City</label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-floating mb-3">
                                  <select class="form-select" name="state" id="floatingSelect" aria-label="State">
                                    <option selected>New York</option>
                                    <option value="1">Oregon</option>
                                    <option value="2">DC</option>
                                  </select>
                                  <label for="floatingSelect">State</label>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary text-white">Submit</button>
                          </div>
                        </div>
                        </form><!-- End floating Labels Form -->
                      </div>
                    </div>

                  </div>
                </div>
              </section>
            </div><!-- End Page Title -->
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Age</th>
                  <th scope="col">Start Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Aphoe</td>
                  <td>Super Admin</td>
                  <td>22</td>
                  <td>2016-05-25</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td>Admin</td>
                  <td>35</td>
                  <td>2014-12-05</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td>Student</td>
                  <td>45</td>
                  <td>2011-08-12</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>Lecturer</td>
                  <td>34</td>
                  <td>2012-06-11</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>Vice Chancellor</td>
                  <td>47</td>
                  <td>2011-04-19</td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
      </div>
    </section>
  </main>

<?php include 'layout/footer.php'; ?>