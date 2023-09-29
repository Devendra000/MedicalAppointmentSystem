<?php include('../project/datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    
    <style>
    .adminlogin{
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

    <div class="adminlogin">
    <h2>Login as ADMIN</h2>
    
    <form method="post" action="adminlogin.php">

        <?php include ('../project/datalayer/errors.php')?>
        <div class="adminin">
            <label>Admin ID:</label>
            <input type="text" name="adminID">
        </div>

        <div class="adminin">
            <label>Password:</label>
            <input type="Password" name="adminpassword">
        </div>

        <div class="adminin">
            <button type="submit" name="Login3" class="btn3">Login</button>
        </div>

    </form>

</body>
</html>