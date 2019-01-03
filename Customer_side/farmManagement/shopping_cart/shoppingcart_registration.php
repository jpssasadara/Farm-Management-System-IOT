<?php
/**
 * Created by PhpStorm.
 * User: Anjana
 * Date: 1/2/2019
 * Time: 12:09 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
</style>
<body>

<form action="shoppingcartDatabase.php" method="post">
    <!-- Grid row -->
    <div class="form-group row">
        <!-- Material input -->
        <label for="cname" class="col-sm-2 col-form-label">Item Name</label>
        <div class="col-sm-10">
            <div class="md-form mt-0">
                <input type="text" class="form-control" name="Iname"  value="<?php echo $_GET['Iname'];?>" >
            </div>
        </div>
    </div>


    <!-- Grid row -->
    <div class="form-group row">
        <!-- Material input -->
        <label for="name" class="col-sm-2 col-form-label">Item code</label>
        <div class="col-sm-10">
            <div class="md-form mt-0">
                <input type="text" class="form-control" name="Icode" value="<?php echo $_GET['Icode'];?>">
            </div>
        </div>
    </div>

    <!-- Grid row -->
    <div class="form-group row">
        <!-- Material input -->
        <label for="email" class="col-sm-2 col-form-label">Owner Id</label>
        <div class="col-sm-10">
            <div class="md-form mt-0">
                <input type="text" class="form-control" name="id" placeholder="ID">
            </div>
        </div>
    </div>

    <!-- Grid row -->
    <div class="form-group row">
        <!-- Material input -->
        <label for="email" class="col-sm-2 col-form-label">Date you want</label>
        <div class="col-sm-10">
            <div class="md-form mt-0">
                <input type="date" class="form-control" name="date" placeholder="Date">

            </div>
        </div>
    </div>

    <!-- Grid row -->
    <div class="form-group row">
        <!-- Material input -->
        <label for="email" class="col-sm-2 col-form-label">Quentity</label>
        <div class="col-sm-10">
            <div class="md-form mt-0">
                <input type="text" class="form-control" name="quentity" placeholder="Quentity">
            </div>
        </div>
    </div>


    <!-- Grid row -->
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit">
        </div>
    </div>
</form>
</body
</html>
</html>


