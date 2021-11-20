<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);




    if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance!!")';  
        echo '</script>';
    }


    else if (($amount)<0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Negative amount cannot be transferred!!")';  
        echo '</script>';
    }

    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero amount cannot be transferred!!')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Amount transferred Successfully!!');
                                     window.location='transactions.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Money Transfer</title>



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
                        <a class="nav-link  text-nowrap" aria-current="page" href="index.php" ><b>Home</b></a>
                    </li>
                    
                    <li class="nav-item" style="margin-left:10px;margin-right:20px">
                        <a class="nav-link text-nowrap" href="customers.php"><b>All Customers</b></a>
                    </li>
            </ul>
        </div>
    </nav>
</div>

    
    <style>


    	
		.btn{
			border:none;
			background-color:rgb(16, 73, 148);
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            font-weight: bold;
            font-size:15px;
            color:white;
            height:40px;
            width:30%;
        }
        
	    .btn:hover{
			background-color:rgb(52, 223, 143);
			transform: scale(1.1);
			color:black;
		}

    </style>
</head>

<body style="background-image:linear-gradient(#83a4d4,#b6fbff)">
 

	<div class="container">
        <h1 class="text-center pt-4" style="color:rgb(20, 25, 92);padding:20px; font-size:30px"><b>MONEY TRANSFER</b></h1>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div style="margin-left:90px;margin-right:90px">
            <table class="table table-striped table-condensed table-bordered table-sm">
                <tr style="color:rgb(58, 17, 122); font-size:20px">
                    <th class="text-center">Account No.</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">E-mail</th>
                    <th class="text-center">Balance(in Rs)</th>
                </tr>
                <tr style="color:black; font-size:15px;font-weight: bold;">
                    <td height="30" class="text-center py-2"><?php echo $rows['id'] ?></td>
                    <td class="text-center py-2"><?php echo $rows['name'] ?></td>
                    <td class="text-center py-2"><?php echo $rows['email'] ?></td>
                    <td class="text-center py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br>
        <label style="color:rgb(58, 17, 122); font-size:15px;margin-left:90px;margin-right:90px"><b>Transfer to Account :</b></label>
        <div  style="margin-left:90px;margin-right:90px">
        <select name="to" class="form-control"  required>
            <option value="" disabled selected>Choose account</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            </div>
        </select>
        <br>
            <label style="color:rgb(58, 17, 122); font-size:15px"><b>Amount :</b></label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
            <div class="text-center" style="font-color:white" >
               <button class="btn mt-3" name="submit" type="submit" id="myBtn" >Send Money</button>
            </div>
        </form>
    </div>




<footer class="text-center" style="padding:90px; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:10px">
        <p>&copy 2021  <b>Samiksha Phand</b> </br>Founder, The Sparks Bank</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>