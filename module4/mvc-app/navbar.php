
<!--navbar start here-->
<nav class="navbar navbar-expand-md bg-dark">
<!-- logo start here -->
<a href="#" class="navbar-brand text-white p-2">Komal e-commerce</a>
<!-- collpsible button -->
<button type="button" class="navbar-toggler  btn-sm btn-dark" data-bs-toggle="collapse" data-bs-target="#NavbarToggle">
<i class="bi bi-grid-3x3"></i>
</button>
<div class="collapse navbar-collapse" id="NavbarToggle">
<ul class="navbar-link">
<li><a href="<?php echo $mainurl?>">Home</a></li>
<li><a href="<?php echo $mainurl?>mens-products">Men's</a></li>
<li><a href="<?php echo $mainurl?>womens-products">Women's</a></li>
<li><a href="<?php echo $mainurl?>kids-products">Kid's</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="">Our Services</a>
<ul class="dropdown-menu bg-dark" style="min-width:200px">
<li><a href="<?php echo $mainurl?>product-details">24x7 help <i class="bi bi-person"></i></a></li>
<li><a href="<?php echo $mainurl?>product-details">Return policy <i class="bi bi-person"></i></a></li>

<li><a href="<?php echo $mainurl?>product-details">COD payment <i class="bi bi-person"></i></a></li>
</ul>
</li>
<li><a href="<?php echo $mainurl?>feedback">Feedback</a></li>
<li><a href="<?php echo $mainurl;?>contact-us">Contact</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="">Account</a>
<ul class="dropdown-menu bg-dark">
<li><a href="<?php echo $mainurl?>login">Login <i class="bi bi-person"></i></a></li>
<li><a href="<?php echo $mainurl?>create-account">Register <i class="bi bi-person"></i></a></li>

</ul>
</li>
<li><a href="<?php echo $mainurl?>viewcart">Cart <i class="bi bi-cart"> <span class="badge badge-sm bg-danger">2</span></i></a></li>
</ul>
</div>
</nav> 