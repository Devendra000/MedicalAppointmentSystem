<?php include('../project/datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Signup</title>
    <link href='style.css' rel = 'stylesheet'>
    
    <style>
        .signupform{
            width:50%;
            height:auto;
            background:pink;
            position:absolute;
            top:10%;
            left:20%;
        }

        .labels{
                margin-left:5px;
                margin-bottom:10px;
            }
            
        .btn1{
            display: block;
            color: white;
            text-align: center;
            padding: 5px 7px;
            text-decoration: none; 
            background: grey;  
            margin-left:5px; 
            border:none;
        }    
        
        .btn1::after{
            content:'';
            width:0%;
            height:2px;
            background:#f44336;
            display:block;
            margin:auto;
        }
        
        .btn1:hover::after{
            content:'';
            width:100%;
            height:2px;
            background:#f44336;
            display:block;
            margin:auto;
            transition:0.3s;
        }

        .btn1:hover {
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

<div class = "signupform">
    <form method="post" action="signup.php" enctype="multipart/form-data">

        <?php include ('../project/datalayer/errors.php'); ?>

        <div class="labels">
                <label>User ID:</label>
                <input type="text" name="UserID" >
        </div>

        <div class="labels">
            <label>Name:</label>
            <input type="text" name="Name" >
        </div>

        <div class="labels">
            <label>Address:</label>
            <input type="text" name="Address">
        </div>

        <div class="labels">
            <label>Contact Number:</label>
            <input type="text" name="ContactNumber">
        </div>


        <div class="labels">
            <label>Email address:</label>
            <input type="email" name="Email">
        </div>

        <div class="labels">
            <label>Password:</label>
            <input type="text" name="password">
        </div>

        <div class="labels">
            <label>Blood type:</label>
            <input type="text" name="bloodtype">
        </div>
    

        <div class="labels">
            <button type="submit" name="Register" class="btn1">Register</button>
        </div>

        <p>
            Already a member? <a href="patientlogin.php">Log in </a>
        </p>
        
    </form>
</div>

</body>
</html>