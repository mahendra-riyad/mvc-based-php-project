
<!DOCTYPE HTML>
<html>
<head>
<title>Admin | Login</title>
<?php $this->load->view("admin/all_other_file"); ?>
</head>
<body>
    <?php 
     
       $cookieData = get_cookie('admin');
       if(isset($cookieData)) {
          redirect('http://localhost/assignment_mvc_php/index.php/Admin/dashboard');
       } 
    ?>
   
    <div class="container">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 admin-login">
            <h2>Admin Login</h2><br>
            <form action="http://localhost/assignment_mvc_php/index.php/Admin/login_data" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form><br>
            <p>
                <?php  
                    $message = $this->uri->segment(3); 
                    if(isset($message)) {
                        ?>Incorrect Email or Password.<?php
                    }
                ?>
            </p>
        </div>
        <div class="col-sm-3"></div>
    </div>

    <?php $this->load->view("admin/footer"); ?>
</body>
</html>
