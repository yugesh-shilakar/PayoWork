<?php
session_start();
if (!(isset($_SESSION['loggedUser']))){
    header("location:login.php");

}//else //{
	$user= $_SESSION['loggedUser'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Logo Nav - Start Bootstrap Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="../resources/work.png" />

    <!-- Bootstrap core CSS -->
    <!-- <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

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
                    document.getElementById("alljob").style.border="0 1px 6px rgba(57,73,76,0.35)";
                }
            }
            xmlhttp.open("GET","jobload.php?q="+str,true);
            xmlhttp.send();
        }

        function showjob(str) {
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
                    document.getElementById("alljob").style.border="0 1px 6px rgba(57,73,76,0.35)";
                }
            }
            xmlhttp.open("POST","showjob.php?q="+str,true);
            xmlhttp.send();
        }

        function showpjob(str) {
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
                    document.getElementById("alljob").style.border="0 1px 6px rgba(57,73,76,0.35)";
                }
            }
            xmlhttp.open("GET","profile_job.php?q="+str,true);
            xmlhttp.send();
        }

        function showcjob(str) {
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
                    document.getElementById("alljob").style.border="0 1px 6px rgba(57,73,76,0.35)";
                }
            }
            xmlhttp.open("GET","client_job.php?q="+str,true);
            xmlhttp.send();
        }

        function showemp(str) {
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
                    document.getElementById("alljob").style.border="0 1px 6px rgba(57,73,76,0.35)";
                }
            }
            xmlhttp.open("GET","employee.php?q="+str,true);
            xmlhttp.send();
        }


    </script>
    <style type="text/css">
      p {
    margin-top: 0;
    margin-bottom: 0.4rem;
     }
    </style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">
          <img src="../resources/payowork.png" width="160" height="100" alt="">
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
            <li class="nav-item">
              <a class="nav-link rs_menu" href="message.php">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link rs_menu" href="logout.php">Log Out</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

<div style="margin-top: 2.3%;" class="container-fluid main_content">
  <div class="container">
    <div class="row">
    </div>
  </div>
</div>

<div class="container-fluid main_content">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-lg-2 ">
			  <h3 class="text-left text-success">Choose Catagory</h3>
			  
			  <a href="#" id="job" onclick="showResult('all')"><p>All Jobs</p></a>
			  <a href="#" id="Category_1" onclick="showResult('Category_1')"><p>Category_1</p></a>
			  <a href="#" id="Category_2" onclick="showResult('Category_2')"><p>Category_2</p></a>
			  <a href="#" id="Category_3" onclick="showResult('Category_3')"><p>Category_3</p></a>
			  <a href="#" id="Category_4" onclick="showResult('Category_4')"><p>Category_4</p></a>
			  <a href="#" id="Category_5" onclick="showResult('Category_5')"><p>Category_5</p></a>
			  <a href="#" id="Category_6" onclick="showResult('Category_6')"><p>Category_6</p></a>
			  <a href="#" id="Category_7" onclick="showResult('Category_7')"><p>Category_7</p></a>
			</div>
			<div id="job" class="col-md-7 col-lg-7 col-sm-12 col-12 job_view">
				<?php include 'freelancer.php';?>
				<div id="alljob">
          <div style="background-color: #f9f9f9; padding: 4%; border-bottom: 1px solid #c3c3c3;">
            <h4 class="text-left">My Job Feed</h4>
          </div>
          <?php
include 'config.php';
 
$conn = OpenCon();

  
  $sql = "SELECT  * FROM job where job_status not in ('2','3')";
$result = $conn->query($sql);
$count_u = 0;

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "
       <div class='col-lg-12 col-md-12 col-sm12 col-12 pr-md-1 pb-md-1'><div class='rs_browse_job' style='padding:2%;'><h3><a href='#' id='jobs' onclick='showjob(".$row['job_id'].")'>" . $row["job_title"]. " </a><span style='float:right;'>$" . $row["job_rate"]. "</span> </h3>  <p style='margin-bottom:0px;'>";

       $string = $row["job_description"];
if (strlen($string) > 200) {
$trimstring = substr($string, 0, 200). ' <a href="#" id="jobs" onclick="showjob('.$row["job_id"].')">Read More...</a>';
} else {
$trimstring = $string;
}


       echo "Description :  " . $trimstring."</p><p style='margin-bottom:0px;'>Posted by :" . $row["job_postedby"]."
        <span style='margin-bottom:0px; float:right;'> "  . $row["job_duration"]. "days</span> </p></div></div> ";
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
			<div class="col-md-3 col-lg-3 rs_profile_show">
				
				<?php
 
$conn = OpenCon();


$sql = "SELECT  name, dob, skill, rate, dp,balance, country FROM freelancer where username='$user'";
//Added

$total_tranc = "SELECT SUM(bid_amount) as total FROM bid WHERE (bid_by = '$user' or job_by = '$user') and bid_status = '4'";

$total_job = "SELECT count(*) as totaljob FROM bid WHERE (bid_by = '$user' or job_by = '$user') and bid_status = '4'";


//added
$result = $conn->query($sql);
$result2 = $conn->query($total_tranc);
$result3 = $conn->query($total_job);
$summ= $result2->fetch_assoc();
$row1=$result3->fetch_assoc();
$totalj=$row1['totaljob'];
$sum=$summ['total'];
$count_u = 0;


if ($result->num_rows > 0) {
   
    while(($row = $result->fetch_assoc()) ) {
        echo "
        <div class='rs_profile'><h2>My Profile</h2><hr>" . '<img class="dp_photo" src="data:image/jpeg;base64,'.base64_encode( $row['dp'] ).'" height="150px;" width="150px;"/>'."<br><h4 class='text-center'>". $row["name"]. "</h4><p class='text-center'>". $row["skill"]." </p> <hr><span> Rate <span style='float:right;'>$" . $row["rate"]. "/hr</span></span>  <p style='margin-bottom:0px;'>DOB :  <span style='float:right;'>" . $row["dob"]."</span>  </p><p style='margin-bottom:0px;'>Country : <span style='float:right;'>" . $row["country"]."</span>
        <p>Job Done : <span style='float:right;'>"  . $totalj. "</span></p><p>Balance : <span style='float:right;'>$"  . $row["balance"]. "</span></p><p>Total Transaction : <span style='float:right;'>$"  .$sum. "</span></p> </p>
        </div> ";
        $count_u++;
          echo "<br>";
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
