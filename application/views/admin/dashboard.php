
<!DOCTYPE HTML>
<html>
<head>
<title>Admin | Login</title>
<?php $this->load->view("admin/all_other_file"); ?>
</head>
<body>
    <?php 
        $this->load->view("admin/header"); 
        $cookieData = get_cookie('admin');
        if(!isset($cookieData)) {
            redirect('http://localhost/assignment_mvc_php/index.php/Admin/admin_login');
        }
    ?>
    <div class="container new-job">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 ">
            <h2>Add New Job</h2><br>
            <div class="form-group">
                <form action="http://localhost/assignment_mvc_php/index.php/Admin/new_job" method="post">
                    <div class="form-group">
                        <label>Company Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Company Name" name="company_name" required>
                    </div>
                    <div class="form-group">
                        <label >Job Title:</label>
                        <input type="text" class="form-control"  placeholder="Enter Title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label >Description:</label>
                        <textarea class="form-control" rows="5" name="description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form><br>
            </div>
            <?php  
                $message = $this->uri->segment(3); 
                
                if( $message ==  "insert") {
                    ?>
                   <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Data inserted.
                    </div><?php
                }
            ?>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="container">
      <div class="col-sm-2"></div>  
      <div class="col-sm-8">
        <h1 class="heading">All Jobs</h1>
      </div>  
      <div class="col-sm-2"></div>  
      <div class="container">
        <?php
            $query = $this->db->get("company");
            foreach ($query->result() as $row) {
        ?>      
                <div class="col-sm-2"></div>
                <div class="col-sm-8 company-data">
                    <h3><?php echo $row->name ?></h3>
                    <h5><?php echo $row->title ?></h5>
                    <p><?php echo $row->description ?></p>
                 </div>       
        <?php 
            }
        ?>
        </div>
    </div>
    <?php $this->load->view("admin/footer"); ?>
</body>
</html>
