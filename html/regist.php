<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">

  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <form action="../php/regist.php" method="post" class="form-con"  >
        <h1 class="textForm mb-4">Registration</h1>
        <div class="mb-3">
         <div class="mb-3">
          <label for="exampleInputuser" class="form-label textForm"> Enter Your Fullname</label>
          <input type="username" class="form-control" id="exampleInputuser" aria-describedby="userHelp" placeholder="Enter Your Fullname" name="username">
        </div>
         <label for="exampleInputEmail1" class="form-label textForm">Enter Your Email address</label>
          <input type="email" class="form-control textForm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label textForm"> Enter Your Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="passHelp" placeholder="Enter Your Password" name="password">
        </div>

        

        <div class="mt-4 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label textForm" for="exampleCheck1">By checking this you agree to our bla bla bla etc</label>
        </div>
        <div class="mt-4 d-grid textForm">
        <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>

  </body>
</html>