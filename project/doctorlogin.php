<?php include('../project/datalayer/server.php') ?>

<!DOCTYPE html>
<html>

<head>

	<title>Doctor Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
    
    .Dform{
            width:50%;
            height:auto;
            background:pink;
            position:absolute;
            top:20%;
            left:20%;
        }

    .adminin{
            margin-left:5px;
        }
        
    .btn3{
        display: block;
        color: white;
        text-align: center;
        padding: 5px 7px;
        text-decoration: none; 
        background: grey;  
        margin-left:5px; 
        border:none;
    }    
    
    .btn3::after{
        content:'';
        width:0%;
        height:2px;
        background:#f44336;
        display:block;
        margin:auto;
    }
    
    .btn3:hover::after{
        content:'';
        width:100%;
        height:2px;
        background:#f44336;
        display:block;
        margin:auto;
        transition:0.3s;
    }

    .btn3:hover {
    background-color: #111;
    }
    
    ul li a{
        text-decoration-style:none;
        color:white;
    }

    </style>
</head>

<body>



    <ul> 
        <li><button type="button"><a href="adminlogin.php">ADMIN</a></button></li>
        <li><button type="button"><a href="doctorlogin.php">DOCTOR</a></button></li>
        <li><button type="button"><a href="patientlogin.php">PATIENT</a></button></li>
        <li style="float:left"><a class="active" href="index.php">HOME</a></li>
    </ul>

    <form method="post" action="doctorlogin.php" class="Dform">

        <?php include ('../project/datalayer/errors.php')?>
    
        <div>
	        <h2>Login as Doctor</h2>
        </div>

        <div class="doc">
            <label>Doctor ID:</label>
            <input type="text" name="doctorID">

        </div>

        <div class="doc">
            <label>Password:</label>
            <input type="Password" name="doctorpassword">

        <div class="doc">
            <button type="submit" name="Login2" class="btn3"> Login</button>
        </div>

    </form>

</body>
</html>