
    <!-- content start here -->

    <div class="container mt-5 p-3">
        <h1 class="text-center">Login Form</h1>
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
        <div class="bg-light shadow mt-2 p-3 text-dark">Login with us</div>
        <!-- login form -->
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="text" name="email" placeholder="Email *" required class="form-control">
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="password" name="pass" placeholder="Password *" required class="form-control">
          </div>

          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="submit" name="login" class="btn btn-lg btn-info" value="Login">
            <b class="text-white"><a href="">Forget Password ?</a></b>
          </div>

          
          <div class="form-group mt-2 col-md-8 mx-auto">
            <b class="">Don't have an account ?<a href="<?php echo $mainurl?>create-account">Register Here?</a></b>  
        </div>
        </div>
    </div>
    </div>


