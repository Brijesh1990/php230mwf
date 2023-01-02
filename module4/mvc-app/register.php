
    <!-- content start here -->

    <div class="container mt-5 p-3">
        <h1 class="text-center">Register Form</h1>
        <div class="row">
        <div class="col-md-4">    
        <div class="bg-light shadow mt-2 p-3 text-dark">Why Join with Us</div>
        <ul>
            <li>24x7 support services</li>
            <li>Online customer support services</li>
            <li>Return Policy</li>
            <li>COD facility</li>
        </ul>
        </div>

        <div class="col-md-8">    
        <div class="bg-light shadow mt-2 p-3 text-dark">Register with us</div>
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

          
          <div class="form-group mt-2 col-md-8 mx-auto">
            <b class="">Already have an account ?<a href="<?php echo $mainurl?>login"> Login here?</a></b>  
        </div>


        </div>
        
    </div>
    </div>

    
