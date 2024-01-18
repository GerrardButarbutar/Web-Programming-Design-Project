<?php
session_start();
$getid = $_GET['id_admin'];
$sql = "SELECT * FROM member WHERE id='".$getid."'";
$koneksi = mysqli_connect('localhost', 'root', '', 'petshop');
$rs = $koneksi->query($sql);
$row = $rs->fetch_assoc();
$_SESSION['idcheck'] = $getid;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  </head>
  <body>
  <div>
      <div class="row">
    <!--sidebar-->
    <div class="col-3">
 <div class="d-flex flex-column p-3 text-white bg-dark" style="width: 280px; height: 800px;">
    <a href="#" class="d-flex align-items-center text-white text-decoration-none">
      <img src="logo.png" style="width:100px; height:80px;">
      <svg class="bi pe-none" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Jordan Petshop</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="dashboard.php" class="nav-link text-white" >
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="member.php" class="nav-link active text-white" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Member
        </a>
      </li>
      <li>
        <div class="dropdown">
          <a href="#" class="nav-link text-white dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left:8px ;">
          <svg class="bi pe-none" width="16" height="15" style="margin-top:10px ;"><use xlink:href="#speedometer2"></use></svg>
          Product
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="allproduct.php">All Products</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="dogfod.php">Dog Foods</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="dogsnak.php">Dog Snacks</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="catfood.php">Cat Foods</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="catsnack.php">Cat Snacks</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="petshampo.php">Pets Shampoo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="other.php">Other</a></li>
          </ul>
        </div>
      </li>
      <li>
        <a href="service.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="19"><use xlink:href="#grid"></use></svg>
          Service
        </a>
      </li>
      <li>
        <a href="homeco.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Home Content
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="user.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>ADMIN</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Absent</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-danger" href="#">Log out</a></li>
      </ul>
    </div>
  </div>
</div>

  <!--table-->
  <div class="col-sm-9 bg-light p-3 border">
  <div class="container-l me-5">
    <h2>Edit Member</h2>
    <h3>Please fill the form below to edit the data</h3>
    <form action="../phpaction/actionedit.php" method="post">
   <br>
  
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Change Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Old Email Is : <?php echo($row['email']) ?>">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Change Fullname</label>
    <input type="fullname" class="form-control" name="fullname" id="fullname" placeholder="Old Fullname Is : <?php echo($row['fullname']) ?>">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Change Password</label>
    <input type="other" class="form-control" name="password" id="password" placeholder="Old Password Is : <?php echo($row['password']) ?>">
  </div>
  

<button type="submit" class="btn btn-primary mb-3">Select This Data</button>
      </form>
</div>
</div>
</div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>