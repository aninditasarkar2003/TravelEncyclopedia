<?php
  
session_start();
if(empty($_SESSION['username'])){
  echo "<script>
          window.location = 'login.php';
  </script>";
  exit();
}

?>


<?php

include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-right.php';
?>

<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-md-3 col-sm-12">
			<div class="card-left">
				<div class="img-icon">
					<img src="img/invoice.png" alt="..." height="40px" width="40px">
					<p class="pt-5 pl-3">Total Sales</p>
					<span>458,58</span>

				</div>
				<div class="cont-right">
					<img src="img/increase.png" alt="..." height="20px" width="37px">
					<p class="pt-5 pr-3" style="font-size: 13px;">58%.5</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 ">
			<div class="card-left">
				<div class="img-icon">
					<img src="img/money.png" alt="..." height="40px" width="40px">
					<p class="pt-5 pl-3">Total Product</p>
					<span>458,58</span>

				</div>
				<div class="cont-right">
					<img src="img/increase.png" alt="..." height="20px" width="37px">
					<p class="pt-5 pr-3" style="font-size: 13px;">68%.5</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 ">
			<div class="card-left">
				<div class="img-icon">
					<img src="img/check-out.png" alt="..." height="37px" width="37px" class="ml-1">
					<p class="pt-5 pl-4">Total Order</p>
					<span>158,58</span>

				</div>
				<div class="cont-right">
					<img src="img/increase.png" alt="..." height="20px" width="37px">
					<p class="pt-5 pr-3" style="font-size: 13px;">12%.5</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 ">
			<div class="card-left">
				<div class="img-icon">
					<img src="img/check-out.png" alt="..." height="37px" width="37px" class="ml-1">
					<p class="pt-5 pl-4">Total Order</p>
					<span>158,58</span>

				</div>
				<div class="cont-right">
					<img src="img/increase.png" alt="..." height="20px" width="37px">
					<p class="pt-5 pr-3" style="font-size: 13px;">12%.5</p>
				</div>
			</div>
		</div>
	</div>
</div>







<?php
	include 'include/footer.php';
?>


