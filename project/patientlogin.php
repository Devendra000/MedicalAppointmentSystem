<?php include('../project/datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
    
    #patientform{
            width:50%;
            height:auto;
            background:pink;
            position:absolute;
            top:20%;
            left:20%;
        }

    label{
            margin-left:5px;
        }
        
    .btn{
        display: block;
        color: white;
        text-align: center;
        padding: 5px 7px;
        text-decoration: none; 
        background: grey;  
        margin-left:5px; 
        border:none;
    }    
    
    .btn::after{
        content:'';
        width:0%;
        height:2px;
        background:#f44336;
        display:block;
        margin:auto;
    }
    
    .btn:hover::after{
        content:'';
        width:100%;
        height:2px;
        background:#f44336;
        display:block;
        margin:auto;
        transition:0.3s;
    }

    .btn:hover {
    background-color: #111;
    }
    
    ul li a{
        text-decoration:none;
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

<div id="patientform">
<form method="post" action="patientlogin.php">

	<?php include ('../project/datalayer/errors.php')?>

    <h2>PATIENT LOGIN</h2>
	<div class="input-group">
		<label> Patient ID:</label>
		<input type="text" name="UserID">
	</div>

	<div class="input-group">
		<label> Password:</label>
		<input type="Password" name="password">
    </div>

	<div class="input-group">
		<button type="submit" name="Login" class="btn"> Login </button>
	</div>

	<p>
		Not a member? <a href="signup.php">Sign Up </a>
	</p>

</form>
</div>

</body>
</html>