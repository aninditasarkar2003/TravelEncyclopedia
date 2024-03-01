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
<?php
include 'sql/config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM guide WHERE id='$id'";
$table = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($table);
?>

<div class="container-fluid">
    <div class = "row">
        <div class ="col-12 col-md-12 mt-5">
            <h5><i class ="fas fa-info-circel pt-5"></i> Admin Deshboard</h5>
</div>
</div><hr>
<div style="float:right">
    <a href="viewguide.php" class="btn btn-primary">View All Data</a>
</div>

<div class = "row mt-4">
    <div class= "card-body">
        <div class ="row">
            <div class= "col-12 col-md-12 main">
                <h3 class ="pt-2 text-center">Edit Guide Detailes</h3><hr>
                <form action ="sql/guideedit.php" method="POST" enctype= "multipart/form-data">
                    <div class ="row mt-4">
                        <div class = "col-12 col-md-4">
                            <label>Guide Name</label>
                            <input type="text" name ="pname" value="<?php echo $row['pname'];?>" class= "form-control" placeholder= "Enter Place">
                    </div>
                    <div class="col-12 col-md-4">
                        <label>Designation</label>
                        <input type="text" name="desig" value="<?php echo $row['desig'];?>" class="form-control" placeholder="Designation">
                    </div>
                    <div class="col-12 col-md-4">
                        <label>Age</label>
                        <input type="text" name="age" value="<?php echo $row['age'];?>" class="form-control" placeholder="Age">
                    </div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-12 col-md-4">
                        <label>Instagram Usename</label>
                        <input type="text" name="insta" value="<?php echo $row['insta'];?>" class="form-control" placeholder="Enter Instagram Usename">
                    </div>
                    <div class="col-12 col-md-4">
                        <label>Facebook Usename</label>
                        <input type="text" name="fb" value="<?php echo $row['fb'];?>" class="form-control" placeholder="Enter Facebook Usename">
                    </div>
                    <div class="col-12 col-md-4">
                        <label>Twitter Usename</label>
                        <input type="text" name="tw" value="<?php echo $row['tw'];?>" class="form-control" placeholder="Enter Twitter Usename">
                    </div>
                      
                </div>

                <div class="row mt-2"> 
                    <div class="col-12 col-md-4">
                        <label>LinkedIn Usename</label>
                        <input type="text" name="li" value="<?php echo $row['li'];?>" class="form-control" placeholder="Enter LinkedIn Usename">
                    </div>
                    <div class="col-12 col-md-4">
                        <label>Home Town</label>
                        <input type="text" name="home" value="<?php echo $row['home'];?>" class="form-control" placeholder="Enter Home Town">
                    </div>
                     <div class="col-12 col-md-4">
                        <label>Guide Image</label>
                        <input type="file" name="img" value="<?php echo $row['img'];?>" class="form-control">
                        <p class="pt-4 pb-4">Old Image</p>
                        <img src="img/guide/<?php echo $row['img'];?>" alt="<?php echo $row['img'];?>" style="float:left" height="45px" width="45px"> 
                    </div>
                    
                </div>
                <div class="row ">
                    <div class="col-12 col-md-4">
                        <label>About</label>
                        <input type="text" name="about" value="<?php echo $row['about'];?>" class="form-control" placeholder="Enter About">
                    </div>
                </div>
                
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="row mt-4">
                  
                    <div class="col-12 col-md-2">
                        <input type="submit" name="submit" value="Update Package" class="btn btn-primary pl-3 pr-3">
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