<?php
    
    include "classes/user.php";
    $user1 = new User();

    $sl = $_GET['sl'];
    $data = $user1->edit_user($sl);
    //print_r($data);
    // echo $sl;
   
    $row = mysqli_fetch_assoc($data);
    //print_r($row);

    if (isset($_POST['update_user'])){
        //print_r($_POST);
        $user1->update_user($_POST);
    }

?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/my.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>crud-oop</title>
  </head>
  <body>
    <!-- crud -->

    <div class="container">
      
      <div class="row justify-content-center my-5">
        <div class="col-lg-8">
          <!-- form start -->
          <form action="" method="POST" class="shadow p-5">
            <h2 class="text-primary display-6 p-4 text-center"> Edit Employee Info.</h2>
            <div class="form-group mb-3">
            <input type="hidden" name="sl" value="<?php echo $row['sl'];?>">
              <input
                type="text"
                name="name"
                placeholder="Enter your name "
                class="form-control"
                value="<?php echo $row['name'];?>"
              />
            </div>
            <div class="form-group mb-3">
              <input
                type="text"
                name="fatherName"
                placeholder="Enter your father's name "
                class="form-control"
                value="<?php echo $row['fatherName'];?>"
                required
              />
            </div>
            <div class="form-group mb-3">
              <input
                type="email"
                name="email"
                placeholder="Enter your email"
                class="form-control"
                value="<?php echo $row['email'];?>"
                required
              />
            </div>
            <div class="form-group mb-3">
              <input
                type="text"
                name="phone"
                placeholder="Enter your phone number"
                class="form-control"
                value="<?php echo $row['phone'];?>"
                required
              />
            </div>
              <div class="form-group mb-3">
                <input
                  type="text"
                  name="address"
                  placeholder="Enter your address"
                  class="form-control"
                  value="<?php echo $row['address'];?>"
                  required
                />
              </div>
              <div class="form-group mb-3">
                <input
                  type="text"
                  name="salary"
                  placeholder="Enter your salary"
                  class="form-control"
                  value="<?php echo $row['salary'];?>"
                  required
                />
              </div>
            <div class="form-group mb-3">
              <input type="submit" value="Update Information" class="btn btn-info" name="update_user" />
            </div>
          </form>
        </div>
        
      </div>
    </div>

    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="javascript/main.js"></script>
  </body>
</html>
