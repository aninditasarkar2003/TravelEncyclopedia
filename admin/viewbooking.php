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


<div class="container-fluid  mt-5">
    <div class="row ">
        <div class="col-12 card-area mt-5">
        <table class="table table-bordered table-hover table" id="table_id">
                        <thead>
                            <tr>
                                <th data-priority="1">Sl No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Destination</th>
                                <th>Departure Date</th>
                                <th>Returning Date</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'sql/config.php';
                            $sql = "SELECT * FROM booking";
                            $table = mysqli_query($conn, $sql);
                            $i=1;
                            if (mysqli_num_rows($table) > 0) {
                                while ($row = mysqli_fetch_array($table)) {
                                    ?>
                                    <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['pname']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['destination']; ?></td>
                                    <td><?php echo $row['depart']; ?></td>
                                    <td><?php echo $row['rtn']; ?></td>
                                    <td><?php echo $row['duration']; ?></td>
                                    <td>
                                        <a href="guideupdate.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="sql/deleteguide.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                                }
                            }
                            ?>



                        </tbody>
                    </table>
        </div>
    </div>
</div>



<?php
	include 'include/footer.php';
?>


    <style>
        .card-area{
        height: 450px;
        background-color: #fff;
    }
    .card {
            border-radius: 0px;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        .flex-wrap {
            margin-bottom: -35px;
        }
        
        div.dataTables_wrapper div.dataTables_paginate {
            margin-top: -25px;
        }
        
        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #5D78FF;
            border-color: #5D78FF;
        }
        .card-header {
            padding: 0.2rem 1.25rem;
            /* margin-bottom: 0; */
            background-color: #ffffff;
            border-bottom: 0px;
        }
        
        .card-body {
            padding: 0rem 1.25rem;
        }
        
        p {
            margin-top: 0;
            margin-bottom: 10px;
        }
</style>