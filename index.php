<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    
    <title>The Sparks Bank</title>

</head>

<body style="background-image:linear-gradient(#83a4d4,#b6fbff)">
    <div id="lock"><img src="" alt="" style="width:50%; margin-top:50%;"><br>
     <h1 style="color:black; margin-top: 25px; font-size:20px"><b>Please rotate the device.</b>
          <br>Only landscape mode is supported.</h1>
    </div>

    <style>


        #lock{
            display:none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 20;
            background:skyblue center no-repeat;
            text-align:center;        
        }
        @media screen (orientation:landscape) {
            #lock{display:none;}
            #container{display:block;}
        }

        @media screen and (orientation:portrait) {
            #lock{display:block;}
            #container{display:none;}
        }
            
    </style>

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
                        <a class="nav-link active text-nowrap" aria-current="page" href="index.php" ><b>Home</b></a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;margin-right:5px">
                        <a class="nav-link text-nowrap" href="customers.php"><b>All Customers</b></a>
                    </li>
                    <li class="nav-item" style="margin-left:10px;margin-right:20px">
                        <a class="nav-link text-nowrap" href="transactions.php"><b>Transfer History</b></a>
                    </li>
            </ul>
        </div>
    </nav>
</div>
    
        
<div class="main">
    <h1 style="font-family:Bodoni MT;font-size:50px; padding:20px"><b>Welcome to The Sparks Bank</b></h1>
       <p style="font-size:15px">The Sparks Bank is a part of Sparks Foundation. It is one of the leading private banks.Today, The Sparks Bank has a banking network of more than 3000 branches. 
           It offers a various banking services to customers through digital channels like Netbanking, MobileBanking and many more.</p>       
        <div style="margin:70px 20px 40px 80px">
                <div class="row" >
                    <div class="col-lg">
                        <div class="card">
                            <i class="fas fa-users fa-5x center"></i><br><br>
                            <a href="customers.php"><br>
                              <button type="button" class="btn btn-outline-light mybtn">View Customers</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg" style="padding: ">
                        <div class="card" >
                            <i class="fas fa-hand-holding-usd fa-5x center"></i><br><br>
                            <a href="transactions.php"><br>
                               <button type="button" class="btn btn-outline-light mybtn">View Transactions</button>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
          
    

    <style>

        .main{
            text-align:center;
            padding:20px;
            color:rgb(1, 15, 58)
        }

        .card{
            margin-right: auto;
            margin-left: auto;
            width: 250px;
            height: 320px;
            padding: 20px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.2);
        }
        .fas{
            padding:20px;
            
        }

        .mybtn {
            
            box-shadow: 2px 2px 5px black;
            border-radius: 30px;
            background-color: rgb(125, 145, 236);
            font-size:10px;
            font-weight:bold;
            color: rgb(1, 15, 58);
            height:40px;
            width:60%;
        }
        .mybtn:hover{
            background-color:rgb(226, 243, 164)
        }
        .mybtn:active {
            background-color: rgb(226, 243, 164);
            color: black;
        }

        
        .text-center{
            color:rgb(15, 20, 44);
            font-size:10px;
            padding: 50px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>

   
<footer class="text-center">
        <p>&copy 2021  <b>Samiksha Phand</b> </br>Founder, The Sparks Bank</p>
</footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
        
</div>
</body>

</html>