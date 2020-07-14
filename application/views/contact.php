
<!DOCTYPE HTML>
<html>
<head>
<title>Latest Job | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
    .map-container-6{
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
    }
    .map-container-6 iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
    }
    .card {
        border: 1px solid red;
        border-radius: .25rem;
        padding: 2rem;
    }
</style>
<?php $this->load->view("allInOne"); ?>
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:white; letter-spacing: 1px; word-spacing: 2px; padding-right: 5rem;">Latest Job</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="http://localhost/assignment_mvc_php/index.php/User/index">Home</a></li>
        <li class="active"><a href="http://localhost/assignment_mvc_php/index.php/User/contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> Welcome</a></li>
        </ul>
    </div>
    </nav>
<!--Section: Contact v.1-->
<section class="section pb-5" style="margin:5px;">

  <!--Section heading-->
  <h2 class="section-heading h1 pt-4">Contact us</h2>
  <!--Section description-->
  <p class="section-description pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
    amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a
    pariatur accusamus veniam.</p>

  <div class="row" style="width:100%;">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

      <!--Form with header-->
      <div class="card">

        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3> Write to us:</h3>
          </div>
          

            <form action="/action_page.php">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="pswd">
                </div>
                <div class="form-group">
                    <label for="email">Subject:</label>
                    <input type="text" class="form-control" placeholder="Enter Subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="email">Description:</label>
                    <textarea name="" id="" rows="5" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

      </div>
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
       <iframe src="https://maps.google.com/maps?q=Mukta Prasad Colony Rd, Sector Number 2, M P Colony, Bikaner, Rajasthan 334004&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
      </div>

      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
          <p>Bikaner, Mukta Prasad Nagar </p>
          <p>India</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
          <p>+91 90 94 XX XX 30</p>
          <p>Mon - Fri, 8:00-22:00</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
          <p>latestjob@gmail.com</p>
          <p>findjob@gmail.com</p>
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.1-->
</body>
</html>
