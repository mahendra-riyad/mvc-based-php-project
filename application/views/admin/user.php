
<!DOCTYPE HTML>
<html>
<head>
<title>Admin | Login</title>
<?php $this->load->view("admin/all_other_file"); ?>
</head>
<body>
            <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#" style="color:white; letter-spacing: 1px; word-spacing: 2px; padding-right: 5rem;">Admin Dashboard</a>
            </div>
            <ul class="nav navbar-nav">
            <li><a href="http://localhost/assignment_mvc_php/index.php/Admin/index">Home</a></li>
            <li class="active"><a href="http://localhost/assignment_mvc_php/index.php/Admin/user">Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
        </nav>


    <?php 
        $cookieData = get_cookie('admin');
        if(!isset($cookieData)) {
            redirect('http://localhost/assignment_mvc_php/index.php/Admin/admin_login');
        }
    ?>
    <div class="container">
      <div class="col-sm-2"></div>  
      <div class="col-sm-8">
        <h1 class="heading">All User</h1>
      </div>  
      <div class="col-sm-2"></div>  
      <div class="container">
        <?php
            $query = $this->db->get("user");
            foreach ($query->result() as $row) {
        ?>      
                <div class="col-sm-2"></div>
                <div class="col-sm-8 company-data">
                    <h3><?php echo $row->fname ?> <?php echo $row->lname ?></h3>
                    <h5><?php echo $row->email ?></h5>
                    <p><?php echo $row->dob ?></p>
                 </div>       
        <?php 
            }
        ?>
        </div>
    </div>
    <?php $this->load->view("admin/footer"); ?>
</body>
</html>
