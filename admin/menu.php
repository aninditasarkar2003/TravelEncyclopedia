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
    <div class = "row">
        <div class ="col-12 col-md-12 mt-5">
            <h5><i class ="fas fa-info-circel pt-5"></i> Admin Deshboard</h5>
</div>
</div><hr>
<div style="float:right">
    <a href="viewmenu.php" class="btn btn-primary">View All Data</a>
</div>

<div class = "row mt-4">
    <div class= "card-body">
        <div class ="row">
            <div class= "col-12 col-md-12 main">
                <h3 class ="pt-2 text-center">Add Package Detailes</h3><hr>
                <form action ="sql/package.php" method="POST" enctype= "multipart/form-data">
                    <div class ="row mt-4">
                        <div class = "col-12 col-md-4">
                            <label>Place Name</label>
                            <input type="text" name ="pname" class= "form-control" placeholder= "Enter Place">
                    </div>
                    <div class="col-12 col-md-4">
                        <label>From</label>
                        <input type="text" name="fromm" class="form-control" placeholder="From">
                    </div>
                    <div class="col-12 col-md-4">
                        <label>To</label>
                        <input type="text" name="too" class="form-control" placeholder="to">
                    </div>
                    
                </div>

                <div class="row mt-2">
                    <div class="col-12 col-md-4">
                        <label>PinCode</label>
                        <input type="number" name="pin" class="form-control"  pattern="[0-9]{4}" placeholder="Enter PinCode">
                    </div>
                    <div class="col-12 col-md-4">
                        <label>District</label>
                        <input type="text" name="district" class="form-control" placeholder="Enter District Name">
                    </div>
                    <div class="col-12 col-md-4">
                        <label>State</label>
                        <input type="text" name="statee" class="form-control" placeholder="Enter State Name">
                    </div>
                      
                </div>

                <div class="row mt-2"> 
                    <div class="col-12 col-md-4">
                        <label>Date</label>
                        <input type="date" name="datee" class="form-control" placeholder="Enter date">
                    </div>
                    <div class="col-12 col-md-4">
                        <label>Amount</label>
                        <input type="number" name="amount" class="form-control" placeholder="amount">
                    </div>
                     <div class="col-12 col-md-4">
                        <label>Place Image</label>
                        <input type="file" name="img" class="form-control">
                    </div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-md-4">
                        <label>Description</label>
                        <input type="text" name="descrp" class="form-control" placeholder="Enter Description">
                    </div>
                </div>
                
                <div class="row mt-4">
                  
                    <div class="col-12 col-md-2">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary pl-3 pr-3">
                    </div>
                    <div class="col-12 col-md-5"></div>
                </div>
                </form>

            </div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php

include 'include/footer.php';
?>