
    <!-- content start here -->

    <div class="container mt-5 p-3 bg-dark text-white">
        <h1 class="text-center">show all data</h1>
        <div class="bg-light shadow mt-2 p-1 text-dark">Manage all data</div>
        <!-- manage all data -->
        <button type="button" class="btn btn-danger btn-lg mt-2" data-bs-toggle="modal" data-bs-target="#addemp">Add Employee <i class="bi bi-person"></i></button>

        <table class="table table-responsive table-stripped table-bordered mt-3">
            <tr class="text-white bg-secondary">
                <th>Id</th>
                <th>Email</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            <tr class="text-white">
                <td>101</td>
                <td>bkpandey@gmail.com</td>
                <td>Brijesh</td>
                <td>pandey</td>
                <td>9173578954</td>
                <td>Rajkot</td>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil text-info"></a> </td>
            </tr>

            <tr class="text-white">
                <td>101</td>
                <td>bkpandey@gmail.com</td>
                <td>Brijesh</td>
                <td>pandey</td>
                <td>9173578954</td>
                <td>Rajkot</td>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil text-info"></a> </td>
            </tr>


            <tr class="text-white">
                <td>101</td>
                <td>bkpandey@gmail.com</td>
                <td>Brijesh</td>
                <td>pandey</td>
                <td>9173578954</td>
                <td>Rajkot</td>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil text-info"></a> </td>
            </tr>


            <tr class="text-white">
                <td>101</td>
                <td>bkpandey@gmail.com</td>
                <td>Brijesh</td>
                <td>pandey</td>
                <td>9173578954</td>
                <td>Rajkot</td>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil text-info"></a> </td>
            </tr>


            <tr class="text-white">
                <td>101</td>
                <td>bkpandey@gmail.com</td>
                <td>Brijesh</td>
                <td>pandey</td>
                <td>9173578954</td>
                <td>Rajkot</td>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil text-info"></a> </td>
            </tr>

        </table>
    </div>
    </div>
    <!-- add employee modal -->
    <div class="modal fade" id="addemp" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content p-5">
             <!-- add employee form -->
                <div class="bg-secondary shadow mt-2 p-3 text-white">Add employee here <button type="button" class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button></div>
                <!-- Register form -->
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="text" name="email" placeholder="Email *" required class="form-control">
                  </div>
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="password" name="pass" placeholder="Password *" required class="form-control">
                  </div>
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="password" name="cpass" placeholder="Confirm-Password *" required class="form-control">
                  </div>
        
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="text" name="fname" placeholder="FirstName *" required class="form-control">
                  </div>
        
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="text" name="lname" placeholder="LastName *" required class="form-control">
                  </div>
        
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="submit" name="reg" class="btn btn-lg btn-info" value="Register">
                    <input type="reset" name="reset" class="btn btn-lg btn-danger" value="Reset">
                  </div>
                  <div class="form-group mt-2 col-md-9 mx-auto">
                    <b class="text-dark">Already have an account ?<a href="login.html"> Login here?</a></b>  
                </div>  
              

            </div>
        </div>
    </div>
</body>
</html>