<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
  </head>
  <body>
    <div class="container">
      <form class="form-con" action="../php/login.php" method="post">
        <h1 class="judul-text mb-4"><p>Log In </p></h1>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="textForm">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" name="email">
      
          <div id="emailHelp" class="textForm">We'll never share your email with anyone else</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="textForm">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp" placeholder="Enter Your Password" name="password">
        </div>
     <div style="margin-top: -13px" class="text-end">
     <a href="#" class="textForm text-hover">  <span>Forgot Something?</span> </a>
     </div>
        <div class="d-grid mt-3">
        
        <button type="submit" class="btn btn-outline-primary textForm"> Log-In</button>
      </div>

          <div class="mt-1 textForm" >
            <span>Haven't Made An Account? Click</span> <a href="../html/regist.html" class="textForm text-hover">Here</a>
            </div>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>