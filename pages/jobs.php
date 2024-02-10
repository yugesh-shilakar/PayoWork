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

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../resources/work.png" />

    <!-- Custom styles for this template -->
    <link href="../css/hs_style.css" rel="stylesheet">
    <link href="../css/new.css" rel="stylesheet">

    <script>
        function showResult(str) {
            if (str.length==0) {
                document.getElementById("alljob").innerHTML="";
                document.getElementById("alljob").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("alljob").innerHTML=this.responseText;
                    document.getElementById("alljob").style.border="1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET","jobload.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">
          <img src="../resources/logo_light.png" width="160" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link rs_menu" href="../index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <?php  
            if(isset($_SESSION['loggedUser']))
              {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='message.php'>Messages</a></li>";
               echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='logout.php'>Logout</a></li>";
              }

              else
              {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='login.php'>Login</a></li>";


              }
              ?>
            
          </ul>
        </div>
      </div>
    </nav>


<div style="margin-top: 4%;" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-lg-3 ">
			  <h1 class="text-left text-success-category">Choose Catagory</h1>
			  
			  <a href="#" id="jobs" onclick="showResult('all')"><p>All Jobs</p></a>
			  <a href="#" id="Category_1" onclick="showResult('Category_1')"><p>Category 1</p></a>
			  <a href="#" id="Category_2" onclick="showResult('Category_2')"><p>Category 2</p></a>
			  <a href="#" id="Category_3" onclick="showResult('Category_3')"><p>Category 3</p></a>
			  <a href="#" id="Category_4" onclick="showResult('Category_4')"><p>Category 4</p></a>
			  <a href="#" id="Category_5" onclick="showResult('Category_5')"><p>Category 5</p></a>
			  <a href="#" id="Category_6" onclick="showResult('Category_6')"><p>Category 6</p></a>
			  <a href="#" id="Category_7" onclick="showResult('Category_7')"><p>Category 7</p></a>
			</div>
			<div id="job" class="col-md-9 col-lg-9 col-sm-12 col-12">
				<div id="alljob">

					<div style="background-color: #f9f9f9; padding: 4%; border-bottom: 1px solid #c3c3c3;">
            <h4 class="text-left">My Job Feed</h4>
          </div>
          <?php
include 'config.php';
 
$conn = OpenCon();

  
  $sql = "SELECT  * FROM job";
$result = $conn->query($sql);
$count_u = 0;

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "
         <div class='col-lg-12 col-md-12 col-sm12 col-12 pr-md-1 pb-md-1'><div class='rs_browse_job' style='padding:2%;'><h3><a href='#' id='jobs' onclick='showjob(".$row['job_id'].")'>" . $row["job_title"]. "</a> <span style='float:right;'>$" . $row["job_rate"]. "</span> </h3>  <p style='margin-bottom:0px;'>Description :  " . $row["job_description"]."</p><p style='margin-bottom:0px;'>Posted by :" . $row["job_postedby"]."
        <span style='margin-bottom:0px; float:right;'> "  . $row["job_duration"]. "days</span> </p></div></div> ";
        echo "<input type='hidden' name='jobid' value='".$row['job_id']."'>";
        $count_u++;
          echo "<br>";
          echo "<hr>";
    }
} else {
    echo "0 results";
}
 
CloseCon($conn);
 
?>
				</div>
			</div>
			
		</div>
	</div>
</div>

 <div class="container-fluid">

    <div class="row">
    	<div class="col-lg-8 col-md-8 col-sm-12 col-12"></div>
    	<div class="col-lg-2 col-md-2 col-sm-12 col-12">
    		

    	</div>
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

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
    



  </body>

</html>
