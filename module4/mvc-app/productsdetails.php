
<!-- content start here -->
<div class="container-fluid content mt-5">
<div class="row">  
<div class="col-md-9">
 <a href=""> Home/Products details >> </a>   
<div class="card mt-5">
<div class="card-header bg-dark text-white"><h4 class="">Products details  <button type="button" class="btn btn-danger btn-sm float-end text-white ">view More >></button></h4></div>

<div class="card-body">
<div class="row">
<div class="col-md-6 shadow">
<img src="<?php echo $baseurl;?>images/womens/1.webp" class="img-fluid" style="width: 100%; height: 300px">
</div>
<div class="col-md-5">
<p class="p-0">Womens fancy kurtis</p>
<p class="p-0"><b>Rs.<input type="text" name="price" id="price" value="3520" style="border: none; width: 60px;" readonly><del>Rs.4530</del></b></p>
<label>Select qty</label>
<p class="p-0"><input type="number" name="" min="1" max="10" value="1" id="qty" onchange="return subtotal(this.value)"></del></b></p>
<label class="text-success">Subtotal of Products Rs.<b id="tot">3520</b></label>
<br>
<label class="mt-1">Product descriptions</label>

<p class="p-0"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda earum quae et rem sit magni tempora, omnis, voluptatem, perferendis laudantium nobis aliquam modi explicabo voluptatibus. Sapiente doloremque quas maxime eveniet.</p>

<details>
    <summary><b>More details >> </b></summary>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi facere inventore, sed deserunt id sint minus, reprehenderit corrupti, debitis doloremque veniam. Quisquam, distinctio obcaecati deserunt reprehenderit voluptatibus eligendi praesentium libero!</p>
</details>
<p class="p-0 mt-1">
    <a href="" class="btn btn-sm btn-success">Continue shopping >></a>
    <a href="" class="btn btn-sm btn-danger">AddToCart</a></p>
</div>

</div>
</div>
</div>
</div> 

<div class="col-md-3 mt-5">
<img src="<?php echo $baseurl;?>images/adv/adv.webp" class="img-fluid">
</div>
</div> 
</div>

<!-- cart tottal after change qty -->
<script>
function subtotal()
{
var p=document.getElementById("price").value;
var q=document.getElementById("qty").value;
var t=p*q;
document.getElementById("tot").innerHTML=t;
} 

</script>
