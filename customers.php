<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Our Customers</title>
    
</head>


<div id="container">  

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark "
         style="font-family:arial; font-size:15px; box-shadow: 0px 0px 10px 0px black;">
        
      <div class="container-fluid">
        <a href="index.php">
            <img src="images/logo.PNG" alt="logo"
                 style="height: 50px; margin-left:25px; margin-top:10px;border-radius:50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
        </div>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:25px;">
                        <a class="nav-link text-nowrap" aria-current="page" href="index.php" ><b>Home</b></a>
                    </li>
                    
                    <li class="nav-item" style="margin-left:10px;margin-right:20px">
                        <a class="nav-link text-nowrap" href="transactions.php"><b>Transfer History</b></a>
                    </li>
            </ul>
        </div>
    </nav>
</div>

<body style="background-image:linear-gradient(#83a4d4,#b6fbff)">


<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<style>
        .mybtn {
            margin:5px;
            font-size:13px;
            box-shadow: 2px 2px 10px black;
            border-radius: 20px;
            font-weight: bold;
            background-color: lightgreen;
            color: green;
            height:40px
        }
        .mybtn:hover{
            background-color:bisque
        }
        .mybtn:active {
            background-color: green;
            color: lightgreen;
        }
</style>


<div class="container" style="padding:20px">
        <h1 class="text-center pt-4" style="color:rgb(20, 25, 92); 
                   font-family:Constantia;padding:30px;font-size:30px"><b>OUR CUSTOMERS</b></h1>
        <br>
            <div class="table-responsive-sm">
                    <table class="table table-hover table-striped table-sm " >
                        <thead style="color:rgb(58, 17, 122); font-size:20px">
                            <tr>
                            <th scope="col" class="text-center py-2">Account no.</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance(in Rs)</th>
                            <th scope="col" class="text-center py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black; font-weight:bold; font-size:15px;">
                        <td class="text-center py-2"><?php echo $rows['id'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['name']?></td>
                        <td class="text-center py-2"><?php echo $rows['email']?></td>
                        <td class="text-center py-2"><?php echo $rows['balance']?></td>
                        <td><a href="send_money.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn mybtn btn-outline-light"> Send money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>


             
            
<footer class="text-center" style="padding:60px; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:10px">
    <p>&copy 2021  <b>Samiksha Phand</b> </br>Founder, The Sparks Bank</p>
</footer>
                
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>