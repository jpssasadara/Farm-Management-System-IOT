<div class="container container-fluid">
  <div class="well">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4 col-lg-8">  
    
    <center><h1><span>Registration</span></h1>
    <hr>

    <?php if (isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>

    <?php

    } ?>
    <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
    
    <form action="" method="POST"> 
    <div class="form-group row flex-v-center">
        <div class="col-xs-2 col-sm-4">
            <label for="from">First Name</label>
        </div>
        <div class="col-xs-6">
        <!-- <label>First Name</label> -->
            <p class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="firstname" 
                id="firstname" placeholder="First Name" required="required">             
            </p>
        </div>
    </div>

    <div class="form-group row flex-v-center">
        <div class="col-xs-2 col-sm-4">
            <label for="from">Last Name</label>
        </div>
        <div class="col-xs-6">
        <p class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="lastname"  
            id="lastname" placeholder="Last Name" required="required">             
        </p>
        </div>
    </div>

    <div class="form-group row flex-v-center">
        <div class="col-xs-2 col-sm-4">
            <label for="from">Department/Office</label>
        </div>
        <div class="col-xs-6">
        <p class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
                <select class="form-control" name="department" id="department">
                    <option value="none">Select your Department/Office</option>   
                    <option value="Computer Science">Computer Science</option>   
                    <option value="Information System">Information System</option> 
                    <option value="Physical">Physical</option>     
                    <option value="Engineering">Engineering</option>            
                </select>
        </p>
        </div>
    </div>
    <div class="form-group row flex-v-center">
        <div class="col-xs-2 col-sm-4">
            <label for="from">Username</label>
        </div>
        <div class="col-xs-6">
        <p class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="username"  
                id="username" placeholder="Username" required="required">             
        </p>
        </div>
    </div>

    <div class="form-group row flex-v-center">
        <div class="col-xs-2 col-sm-4">
            <label for="from">Password</label>
        </div>
        <div class="col-xs-6">
        <p class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="password" 
                name="password" placeholder="Password" required="required">             
            </p>
        </div> 
    </div>

    <div class="form-group row flex-v-center">
        <div class="col-xs-2 col-sm-4">
            <label for="from">Confirm Password</label>
        </div>
        <div class="col-xs-6">
        <p class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="password2" 
                id="password" placeholder="Confirm password" required="required">             
            </p>
        </div> 
    </div>

    <div class="form-group row flex-v-center">
        <div class="col-xs-2 col-sm-4">
            <label for="from">Email</label>
        </div>
        <div class="col-xs-6">
        <p class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" name="email"  
                id="email" placeholder="Email" required="required">             
            </p>
        </div>
    </div>

    <div class="form-group row flex-v-center">
        <div class="col-xs-2 col-sm-4">
            <label for="from">Contact No.</label>
        </div>
        <div class="col-xs-6">
        <p class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="text" class="form-control" name="mobile"  
                id="mobile" placeholder="(639)" required="required">             
            </p>
        </div>
    </div>

        <div class="form-group">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
            <button type="submit" name="registration" class="btn btn-warning login-btn btn-block">Add Course 
            <span class="glyphicon glyphicon-send"></span></button>
        </div></div>
        </div>
        </div> 
    </form>
</div>
</div>


    </div>
    