<!DOCTYPE html>
<html>
<head>
  <title>View</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-2"></div>
      <div class="col-12 col-md-8">
          <h3 class="text-center">View User Details</h3>

<table id="customers">
    <thead>
      <tr>
       <th>SNO.</th>
      <th>NAME</th>
      <th>USERNAME</th>
      <th>PASSWORD</th>
      <th>Re- password</th>
      <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <?php

        include 'sql/config.php';
      ?>
      <?php

        $query = "SELECT * FROM regis";

        $table = mysqli_query($conn ,$query);
        $i = 1;
        if(mysqli_num_rows($table)>0){
          while($row = mysqli_fetch_array($table)){
          ?>

          <tr>
            <td><?php echo $row['id'];?></td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['pass'];?></td>
          <td><?php echo $row['re_pass'];?></td>
         
          <td><a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
              <a href="sql/delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
          </td>
          </tr>

          <?php

          $i++;

        }
        }else{
          echo "data no available";
      }
      ?>
      
    </tbody>


</table>
      </div>
      <div class="col-12 col-md-2"></div>
    </div>
  </div>



</body>
</html>


