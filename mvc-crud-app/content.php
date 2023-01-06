    <div class="container p-2 mt-5">
    <h3 class="text-center p-2 bg-primary text-white">CRUD APP</h3>
    <div class="content mt-4">
       <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-lg mt-3"><i class="bi bi-file-person"></i> Add Users</button> 
         
       <div class="mt-4">
       <table class="table table-responsive mt-4 p-2" id="pagin">
        <thead>
        <tr>
            <th>#</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

        <?php 
       foreach($shwdata as $row)
       {
        ?>
        <tr>
            <td><?php echo $row["user_id"];?></td>
            <td><img src="<?php echo $row["photo"];?>" class="img-fluid" style="width:85px; height:85px"></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["phone"];?></td>

            <td><a href="<?php echo "./";?>?readdataid=<?php echo $row["user_id"]; ?>" class="btn btn-success btn-sm" onclick="return confirm('Are you sure to Read data')"><i class="bi bi-eye"></i></a>
                |<a href="<?php echo "./";?>?editdataid=<?php echo $row["user_id"]; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure to Edit data')"><i class="bi bi-pencil"></i></a>|
                <a href="<?php echo "./";?>?deletedataid=<?php echo $row["user_id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete user')"><i class="bi bi-trash"></i></a></td>
            
        </tr>
        <?php 
    }
    ?>
        </tbody>
       </table> 
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add CRUD User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form name="" method="post" action="" enctype="multipart/form-data">
            <label>Upload photo</label><input type="file" name="img"><br><br>
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name *" required><br>
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email Address *" required><br>
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter Your photo Number *" required><br>
            <label>Select State</label>
            <select name="state" class="form-control" placeholder="Enter Your Number *" required>
                <option value="">-State-</option>
                <?php
                foreach($shwstate as $shwstate1)
                { 
                ?>   
                <option value="<?php echo $shwstate1["state_id"];?>"><?php echo $shwstate1["state_name"];?></option>
               <?php 
                }
                ?>
            </select><br>
            <label>Select City</label>
            <select name="city" class="form-control" placeholder="Enter Your Number *" required>
                <option value="">-City-</option>
                <?php
                foreach($shwcity as $shwcity1)
                { 
                ?>   
                <option value="<?php echo $shwcity1["city_id"];?>"><?php echo $shwcity1["city_name"];?></option>
               <?php 
                }
                ?>
            </select><br>
            
      
        </div>
        <div class="modal-footer">
            <input type="submit" name="sub" class="btn btn-success btn-lg" value="Submit">
            <input type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal" value="Close">
        </form>  
        </div>
      </div>
    </div>
  </div>
  
  <!-- data tables paginations -->

  <script>
$(document).ready(function () {
$('#pagin').DataTable();
});
  </script>