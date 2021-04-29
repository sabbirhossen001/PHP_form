<?php
$add=null;
if(isset($_POST['submit_btn'])){
  
  $number1 =$_POST['first_no'];
  $number2 =$_POST['second_no'];
  $add = $number1 + $number2;

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="container">
      <div class="row">
         <div class="col-md-12">
       <br><br><br>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               <div class="row">
                     <div class="col-12">
                        <label for="first_no">Enter your number</label>
                             <input type="number" id="first_no" name="first_no" class="form-control first_no" placeholder="First number" aria-label="first_no">
                       </div>
                       <br><br><br><br>

                         <div class="col-12">
                          <label for="second_no">Enter your second number</label>
                             <input type="number" id="second_no" name="second_no"class="form-control second_no" placeholder="second_no" aria-label="second_no">

                           </div>

                            <br><br><br><br>

                         <div class="col-12">
                           <button type="submit" name="submit_btn" class="btn btn-danger">submit</button>
                             <button type="reset" class="btn btn-secondary">rest</button>

                           </div>
                           </div>
                            </form>

                            <div><?php echo $add;?></div>
                  </div>
                </div>
              </div>

              
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
  </body>
</html>

