<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="http://localhost/assignment_mvc_php/css/main.css" rel='stylesheet' type='text/css' />
</head>
<body>
    <?php 
        $message = $this->uri->segment(3);
        $flag = false;
        if(isset($message)) {
            $this->db->where('code', $message);
            $query = $this->db->get("company");
            foreach ($query->result() as $row) {
                $flag = true;
                ?>
                    <div class="container company_details">
                        <p>Job Details : </p>
                        <h2><?php echo $row->name; ?></h2>
                        <h5><?php echo $row->title; ?></h5><br>
                        <p><?php echo $row->description ?></p>
                    </div><br>
                <?php
            } 
        }
        if($flag) {
            ?>
    <div class="container user-form">
        <h2>Apply Here</h2>
        <form action="http://localhost/assignment_mvc_php/index.php/User/user_data/<?php echo $message ?>"  method="post" onSubmit="return CheckTerms()">
            <div class="form-group">
                <label for="uname">First Name:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter first name" name="fname" required> 
            </div>
            <div class="form-group">
                <label for="uname">Last Name:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter last name" name="lname" required>
            </div>
            <div class="form-group">
                <label for="uname">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                <span id="email_message"></span>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                <span id="password_checker">
                   password between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character
                </span>
            </div>
            <div class="form-group">
                <label for="pwd">Gender:</label>
                <select name="gender" class="form-control">
					<option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Other</option>
				</select>
            </div>
            <div class="form-group">
                <label for="pwd">Date Of Birth:</label>
                <input type="date" class="form-control" id="pwd" placeholder="Enter DOB" name="dob" required>
            </div>
           <div class="form-group">
                <label for="pwd">Education:</label>
                <div style="margin:10px;">
                <div class="form-group">
                    <label for="pwd">10th(In percentage):</label>
                    <input type="text" class="form-control" id="tenth" placeholder="Enter 10th percentage" name="tenth" required>
                    <span id="tenth_check"></span>
                </div>
                <div class="form-group">
                    <label for="pwd">12th(In percentage):</label>
                    <input type="text" class="form-control" id="twelve" placeholder="Enter 12th " name="twelve" required>
                    <span id="twelve_check"></span>
                </div>
                <div class="form-group">
                    <label for="pwd">Btech(In percentage):</label>
                    <input type="text" class="form-control" id="btech" placeholder="Enter Btech percentage" name="btech" required>
                    <span id="btech_check"></span>
                </div>
            </div>
            <div class="form-grougp">
                <label for="pwd">Github Link:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter github link" name="github" required>
            </div>
             <div class="form-group">
                <label for="pwd">Linkdin Link:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter Linkdin link" name="linkdin" required>
            </div>
            <button type="submit" class="btn btn-primary" style="width:20%;"  id="submit">Submit</button>
        </form>
    </div>
    <?php
        } else {
            echo "No Data Found";
        }
    ?>

  <script src="http://localhost/assignment_mvc_php/js/formValidation.js"></script>
</body>
</html>
