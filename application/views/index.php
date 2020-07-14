
<!DOCTYPE HTML>
<html>
<head>
<title>Latest Job | Home</title>
<?php $this->load->view("allInOne"); ?>
</head>
<body>
    <?php 
        $this->load->view("header"); 
    ?>
    <div class="container">
        <?php 
            $message = $this->uri->segment(3); 
            if($message == "insert" ) {
                ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Data inserted.
                    </div>
                <?php
            }
        ?>
        <h1 class="heading">All Jobs</h1>
        <?php
            $query = $this->db->get("company");
            foreach ($query->result() as $row) {
        ?>      <div class="col-sm-3 company-data">
                    <h3><?php echo $row->name ?></h3>
                    <h5><?php echo $row->title ?></h5>
                    <a href="http://localhost/assignment_mvc_php/index.php/User/viewJobDetails/<?php echo $row->code ?>" class="view-button">View Details</a>
                 </div>       
        <?php 
            }
        ?>
        </div>
    </div>
    <?php $this->load->view("footer"); ?>
</body>
</html>
