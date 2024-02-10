<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PayoWork - Not only Remote</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/hs_style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="resources/work.png" />


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="resources/payowork.png" width="160" height="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link rs_menu" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link rs_menu" href="pages/jobs.php">Browse Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link rs_menu" href="pages/dashboard.php">DashBoard</a>
            </li>
            
            <?php  
            if(isset($_SESSION['loggedUser']))
              {
               echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='pages/logout.php'>Logout</a></li>";
              }

              else
              {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='pages/registration.php'>Become Freelnacer</a></li>";
                echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='pages/login.php'>Login</a></li>";


              }
              ?>
            
              
            
          </ul>
        </div>
      </div>
    </nav>

 <div class="container-fluid rs_slider">

      <h1 class="text-white">Are you looking for Work?</h1>
      <p class="text-white">Find Your Perfect Freelancer, Explore Limitless Possibilities. <br/>The Freelancer's Hub for Offline and Online Projects.</p>
</div>

   <div class="container-fluid bg-success">
      <div class="container rs_call">
      <div class="row">
      <div class="col-lg-10 col-md-8 col-sm-8">
         <h1 class="text-white1"><span class="need">Need</span> Assistance? </h1>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 center-block">
         <a href="pages/postjob.php" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Post Job</a>
         
      </div>
</div>
</div>
</div>
      
    <!-- Page Content -->
    <div class="container" style="padding: 4% 0% 8% 0%">
      <h1 class="text-center text-success">About Us</h1>
      <hr class="rs_hr" color=green>
      <p class="text-center-w">PayoWork is a unique freelancing platform in Nepal that caters to individuals seeking one-time work 
         opportunities, both online and offline. This innovative platform recognizes that not all projects can be accomplished remotely 
         and offers a marketplace where individuals in need of assistance in any sector can post their requirements. 
         Whether it's a task that requires physical presence or a project that can be completed remotely, PayoWork provides a 
         platform for both job posters and interested freelancers to connect and collaborate.<br>
              <br>
         By enabling individuals to post their specific work requirements, PayoWork facilitates a seamless process for interested 
         freelancers to apply and join these projects. Freelancers can browse through the posted tasks and projects, 
         choose the ones that align with their skills and interests, and earn a certain sum upon successful completion. 
         This approach opens up opportunities for freelancers in various sectors to find work that suits their preferences, 
         whether it's online or offline, providing them with a flexible and diverse range of options to earn income.
      </p>

    </div>

    <div class="container">
       
    </div>

    <div class="container-fluid bg-success" style='padding: 0% 0% 0% 0%;'>
       
       <div class="container1" style="padding: 5% 0% 8% 0%;" style="background-color: #5D8AA8;">
         <h1 class="text-center text-white">How It Works</h1>
         <hr class="rs_hr" color=white>
         <div class="row">
         <div class="col-lg-2 col-md-6 col-6">
            <p class="text-left text-white">Post Your Job</p>
            <img style="width: 60%" src="resources/arrow.png">
         </div>
         <div class="col-lg-2 rs_step col-md-6 col-6">
            <img style="width: 60%" src="resources/post.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <p class="text-left text-white">Choose Seller</p>
            <img style="width: 60%" src="resources/arrow.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <img style="width: 60%" src="resources/hire.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <p class="text-left text-white">Get Work Done</p>
            <img style="width: 60%" src="resources/arrow.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <img style="width: 60%" src="resources/done.png">
         </div>
         </div>

    </div>
    </div>


    <div class="container-fluid">   
       <div class="container" style="padding: 5% 0% 8% 0%;">

          <h1 class="text-center text-success">Find Your Catagory</h1>
         <hr class="rs_hr" color=green>

            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/web.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Web Development</p>
               </div>
               </a>
            </div>  

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/mobile.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Mobile Development</p>
               </div>
               </a>
            </div>  

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/graphics.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Graphics Design</p>
               </div>
               </a>
            </div>  

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/writer.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Content Writer</p>
               </div>
               </a>
            </div>   

            
       </div>

       <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/seo.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Search Engine Optimization</p>
               </div>
               </a>
            </div>  

             <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/care.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Customer Care</p>
               </div>
               </a>
            </div>  
             <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/marketing.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Digital Marketing</p>
               </div>
               </a>
            </div>  
             <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/assistant.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Web Assistant</p>
               </div>
               </a>
            </div>  
     
            
       </div>
    </div>
 </div>

<div class='container-fluid bg-success' style='padding: 0% 0% 0% 0%;'>   
       <div class='container1' style='padding: 5% 0% 8% 1%;' style='background-color: #5D8AA8;'>

          <h1 class='text-center text-white'>Top Rated Freelancer</h1>
         <hr class='rs_hr' color=white>
            <div class='row'>


<?php
include 'pages/config.php';
 
$conn = OpenCon();


$sql = "SELECT  name, jobdone, skill, rate, country FROM freelancer";
$result = $conn->query($sql); 
$count_u = 0;

if ($result->num_rows > 0) {
   
    while(($row = $result->fetch_assoc()) && ($count_u<6)) {
        echo "
        <div class='col-lg-6 col-md-6 col-sm-6 col-12 pr-md-1 pb-md-1'><div style='padding:10px;' class='rs_user text-white'><h2>" . $row["name"]. " <span style='float:right;'>$" . $row["rate"]. "/hr</span> </h2>  <p style='margin-bottom:0px;'>Skill :  " . $row["skill"]."</p><p style='margin-bottom:0px;'>Country :" . $row["country"]."
        <span style='margin-bottom:0px; float:right;'>Job Done : "  . $row["jobdone"]. "</span> </p></div></div> ";
        $count_u++;
          echo "<br>";
    }
} else {
    echo "0 results";
}
 
CloseCon($conn);
 
?>

</div></div></div>


<div class="container-fluid">   
       <div class="container text-center" style="padding: 5% 0% 8% 0%;">

          <h1 class="text-center text-success">Customer Feedback</h1>
         <hr class="rs_hr" color=green>
         <q style="font-size: 22px; font-weight: bold;">I’ve been working with them for a few years. Fine tuning and tweaking my website to make sure that I have the edge on my competitors. All I can say is Fast,Reliable,and Patiently Understanding. Thanks A million</q><br><br>
         <p>Justin Skinner</p>
       </div>
 </div>



   <!-- Page Content -->

 <div class="container-fluid bg-dark">   
       <div class="container text-white" style="padding: 5% 0% 4% 0%;">
       	<div class="row">
       		<div class="col-lg-3 col-md-3 col-sm-6 col-12 rs_foot">
       			<h2>PayoWork</h2>			
       			<hr width="100%" color=white>
       			<p>
       				Versatile freelancing platform <br>
       				that offers a wide range of <br>
       				both online and offline work  <br>
       				opportunities for individuals <br>
       				seeking flexible employment.<br>
       			</p>
       		</div>
       		<div class="col-lg-3 col-md-3 col-sm-6 col-12 rs_foot">
       			<h2>For Clients</h2>
       			<hr width="100%" color=white>
       			<p>
                Find Freelancers<br>
                Post Project<br>
                Privacy Policy<br>
       				<!-- Your Track and Claim<br>
       				Become Succesful In <br> -->
       			</p>
       		</div>
       		<div class="col-lg-3 col-md-3 col-sm-6 col-12 rs_foot">
       			<h2>Call Us</h2>		
       			<hr width="100%" color=white>
       			<p>
       				Bijeswori<br>
       				Sainik Awas Marga - 15<br>
       				Kathmandu 44600<br>
       				Nepal<br>
       				+977-9860762545
       			</p>
       		</div>
       		<div class="col-lg-3 col-md-3 col-sm-6 col-12">
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d220.75989523238164!2d85.29897994838544!3d27.712397548022437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1686626338987!5m2!1sen!2snp" width="275" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       		</div>

       	</div>
       		<br>
       	<p style="text-align: center; v" class="text-white">© 2023 PayoWork® Nepal Inc.</p>
       </div>
 </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>


  </body>

</html>
