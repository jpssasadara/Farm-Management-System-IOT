<?php
session_start();
?>


<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 25%;
            background-color: #7a7a7a;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li a {
            display: block;
            color:  #f1f1f1;
            padding: 8px 16px;
            text-decoration: none;
        }

        li a.active {
            background-color: #555;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        .form-group {

            float: left;
        }


    </style>
</head>
<body>

<ul>

    <li><a class="active" href="#home">QUICK BID</a></li>
    <li><a href="vegetablesFarmer.php">VEGETABLES</a></li>
    <li><a href="fruitsFarmer.php">FRUITS</a></li>
    <li><a href="add_listInter.php">ADD LISTING</a></li>
    <li><a href="view_bids.php">VIEW COMMING BIDS</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <H1>Bid Products</H1>



</div>


</body>
</html>
