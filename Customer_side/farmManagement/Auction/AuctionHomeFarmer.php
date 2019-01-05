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
    <li><a href="vegetables.php">VEGETABLES</a></li>
    <li><a href="fruits.php">FRUITS</a></li>
    <li><a href="add_listInter.php">ADD LISTING</a></li>
    <li><a href="#ghg">MY ACCOUNT</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <H1>Bid Products</H1>

    <div class="w3-container">
        <div class="form-group">
            <a href="Onsale.php" class="w3-button w3-black w3-round-xlarge btn btn-primary active" role="button" aria-pressed="true">ON SALE</a>
            <a href="Latest.php" class="w3-button w3-black w3-round-xlarge " role="button" aria-pressed="true">LATEST </a>
            <a href="past.php" class="w3-button w3-black w3-round-xlarge " role="button" aria-pressed="true">PAST </a>
            <a href="featured.php" class="w3-button w3-black w3-round-xlarge " role="button" aria-pressed="true">FEATURED </a>

        <br />
    </div>


</div>


</body>
</html>
