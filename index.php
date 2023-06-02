<?php
//echo "<pre>";
//print_r($_SERVER);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 align="center" >Welcome</h1>
    <table class="table table-bordered">
        <thead>


            <tr>
                <td>Name</td>
                <td>Value</td>
            </tr>
            <tbody>
                <?php foreach($_SERVER as $key => $value):?>
                <tr>
                    <td><?php echo $key; ?></td>
                    <td><?php echo $value; ?></td>
                </tr>
                <tr>
                        <!--Compine URL from super globel server-->
                    <td><?php echo $_SERVER['REQUEST_SCHEME']."://".$_SERVER['REMOTE_ADDR'].$_SERVER['PHP_SELF']?></td>
                    <td><?php 
                            //$url = explode("/", $_SERVER['SCRIPT_NAME']);
                            //$name = explode(".",count($url)-1);
                            
                    ?></td>
                </tr>
                <?php  endforeach;?>
            </tbody>
        </thead>
    </table>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
