<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Transfer History</title>

</head>      

<body style="background-image:linear-gradient(#83a4d4,#b6fbff)">

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
                        <a class="nav-link text-nowrap" href="customers.php"><b>All Customers</b></a>
                    </li>
            </ul>
        </div>
    </nav>
</div>

    

	<div  class="container" style="padding:30px  ">
        <h1 class="text-center pt-4" style="color:rgb(20, 25, 92);
                  font-family:Constantia;padding:30px; font-size:30px"><b>TRANSFER  HISTORY </b></h1>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-bordered table-sm ">
        <thead style="color:rgb(58, 17, 122); -weight:bold; font-size:20px;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color:black; font-weight:bold; font-size:15px">
            <td height="30" class="text-center py-2"><?php echo $rows['sno']; ?></td>
            <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
            <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
            <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
            <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>



<footer class="text-center" style="padding:90px; font-family: Verdana, Geneva, Tahoma, sans-serif;font-size:10px">
        <p>&copy 2021  <b>Samiksha Phand</b> </br>Founder, The Sparks Bank</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>