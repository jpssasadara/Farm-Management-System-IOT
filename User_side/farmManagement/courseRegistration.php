<?php
/**
 * Created by PhpStorm.
 * User: Anjana
 * Date: 12/31/2018
 * Time: 1:15 PM
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

<form action="courseDatabase.php" method="post">
    <!-- Grid row -->
    <div class="form-group row">
        <!-- Material input -->
        <label for="cname" class="col-sm-2 col-form-label">Course Name</label>
        <div class="col-sm-10">
            <div class="md-form mt-0">
                <input type="text" class="form-control" name="cname" placeholder="Course Name" value="<?php echo $_GET['cname'];?>" >
            </div>
        </div>
    </div>


    <!-- Grid row -->
    <div class="form-group row">
        <!-- Material input -->
        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
            <div class="md-form mt-0">
                <input type="text" class="form-control" name="name" placeholder="Full Name">
            </div>
        </div>
    </div>

    <!-- Grid row -->
    <div class="form-group row">
        <!-- Material input -->
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <div class="md-form mt-0">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
        </div>
    </div>

    <!-- Grid row -->
    <div class="form-group row">
        <!-- Material input -->
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <div class="md-form mt-0">
                <input type="password" class="form-control" name="password" placeholder="Password">
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

