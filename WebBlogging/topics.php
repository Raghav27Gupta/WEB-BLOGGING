<?php
session_start();
if(!isset($_SESSION["sess_user"]))
{
    header("location:signin.php");
} 
else
{
	$host="localhost";
	$username="root";
	$password="raghav";
	$connect=mysql_connect($host,$username,$password);

	if(!mysql_connect($host,$username,$password) || !mysql_select_db("vista"))
	{
		die("Could Not Connect");
	}
	else
	{
		$query=mysql_query("SELECT * FROM signup WHERE UserId='".$_SESSION["sess_user"]."' ");
		while($row=mysql_fetch_assoc($query))
		{
			$dbusername=$row['Username'];
			$dbpassword=$row['Password'];
			$dbfname=$row['FirstName'];
			$dblname=$row['LastName'];
			$dbdp=$row['DP'];
			$dbid=$row['UserId'];
		}
	}


	$connect=mysql_connect("localhost","root","raghav") or die(mysql_error());
  mysql_select_db("vista") or die("cannot select DB");


	if(isset($_POST['submit']))
	{
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		$t3=$_POST['t3'];
		$t4=$_POST['t4'];
		$t5=$_POST['t5'];
		
		
		$connect=mysql_connect("localhost","root","raghav") or die(mysql_error());
		mysql_select_db("vista") or die("cannot select DB");
		$sql="INSERT INTO topic(UserId,Fitness,Food,Sports,Technology,Programming)
		VALUES('$dbid','$t1','$t2','$t3','$t4','$t5')";

		if(mysql_query($sql))
		{
			header("Location: timeline.php");
		}
		else
		{
			echo  "<script type='text/javascript'>alert('Invalid username/password.  Please try again');</script>";
		}



	}
}
?>


<html>
<head>
  <link rel="shortcut icon" href="uplogo.ico" />
  <link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="header.css">
  <link href="button.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/.min.js"> </script>
  <script>
  function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
  }

  /* Set the width of the side navigation to 0 */
  function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
  }

  </script>
  <style>

  body{

    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 0px;

  }

  .text {

    color: black;
    font-size: 70px;
    text-align: center;
    margin-top: 0px;
    margin-bottom: 10px;

    font-family:Comic Sans MS;
  }

  .font {
  font-size:20px;
    font-family: Comic Sans MS;
  }


    div.gallery {
        margin-left: 10px;
        border: 1px solid #ccc;
        float: left;
        width: auto;
        margin-bottom: 10px;

    }

    div.gallery:hover {
        border: 1px solid #777;
        opacity: 0.7;
				cursor:pointer;
    }

    div.gallery img {
        width: 250px;
        height: 150px;
    }

    div.desc {
        padding: 5px;
        text-align: center;
    	background: #555;
    	font-family:Comic Sans MS;
    	color:white;
    }
    input:invalid {
        border-color:red;
        border-width: 3px;
}
input[type=checkbox] {
   position: absolute;
   width:250px;
   height:150px;
   opacity:0;


   /* For mobile, it's typically better to position checkbox on top of clickable
      area and turn opacity to 0 instead. */
}



input[type=checkbox]:checked ~ div.gallery {
   opacity:0.5;
}

.get_value{
height: 150px;
width:250px;

}

#proname{
  color:#BBBBBB;
  font-size: 30px;

}

</style>

<title > Topics</title>
<link rel="stylesheet" href="slide.css">
</head>


<body  bgcolor="#555"  >

    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <center><img src="<?php echo $dbdp; ?>" alt="pro" height=120 width=120 style="border-radius:100%"></center>
    <br>
    <br>
    <center><span id="proname" ><?php echo $dbfname ?></span></center>

    <a href="profile.php">Profile</a>
    <a href="settings.php">Settings</a>
    <a href="contact.php">Contact</a>
    <b><a href="logout.php">Log Out</a></b>
  </div>


<header>
   <ul>
    <a href="hgfd"><img src="images/logo.png"height="40" width="160" align="left" id="logo" ></a>

    <li class="name">

   <form method="get" action="/search" id="searchbox5">
      <input id="search5" name="q" type="text" size="40" placeholder="Search..." />

   </form>

    </li>
<li class="name"  style="float:right;"><a onclick="openNav()" style="cursor:pointer" >&#9776;</a></li>
    <li class="name"style="float:right" ><a href="timeline.php">Home</a></li>


    </ul>
  </header>

  <div style="background:url('images/back.png');">


      <center >
        <p class=text >Vista.</p>
        <p class=font>
          Come for what you love.<br>
          Stay for what you discover.<br>
         </p>
       <p class=font>
       Tell us what you like.We'll bring it to you.<br>
     </p></center>
  <center>
       <script>



function abc(id){
a=document.getElementById(id);
if(a.style.opacity==1)
{
a.style.opacity='0.99';
a.style.filter='sepia(200%)';

}
else
{
a.style.opacity='1';
a.style.filter='';

}
}

</script>
<form action="" method="POST">
    	 
	
    <div class="gallery" id="1" style="opacity:1"  onclick=abc(id)>
       <input type="checkbox"  name="t1" class="get_value" value="Fitness"/>
        <img src="images/fitness.jpg" alt="fitness" width="300" height="200">

      <div class="desc">Fitness</div>
    </div>
     <div class="gallery" id="2" style="opacity:1" onclick=abc(id)>
      <input type="checkbox"  name="t2" class="get_value" value="Food"/>
        <img src="images/food.jpg" alt="food" width="300" height="200">

      <div class="desc">Food</div>
    </div>
      
     <div class="gallery" style="opacity:1" id="3" onclick=abc(id)>
      <input type="checkbox"  name="t3" class="get_value" value="Sports"/>
        <img src="images/sports.jpg" alt="sports" width="300" height="200">

      <div class="desc">Sports</div>
    </div>
     <div class="gallery" style="opacity:1" id="4" onclick=abc(id) >
      <input type="checkbox"  name="t4" class="get_value" value="Technology"/>
        <img src="images/tech.jpg" alt="tech" width="300" height="200">

      <div class="desc">Technology</div>
    </div>
     
     <div class="gallery" style="opacity:1" id="5" onclick=abc(id)>
       <input type="checkbox"   name="t5" class="get_value" value="Programming"/>
        <img src="images/code.jpg" alt="code" width="300" height="200">

      <div class="desc">Programming</div>
    </div>
    

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



    <button  type="submit" name="submit" class="button"  style="height:60px">
      <span class="shift">Start Exploring ›</span>
      <div class="mask"></div>
    </button>

    </form>
            <br>
          </center>

  </div>





  <footer class="footer-distributed">
  <div class="footer-left">
       <a href="hgfd"><img src="images/logo.png"height="60" width="230" align="left" id="logo" ></a><br><br><br><br><br>
       <p class="footer-links">
         <a href="main.html">Home</a>
         ·
         <a href="terms.html">Terms of Service</a>
         ·
         <a href="aboutus.html">About</a>
         ·
         <a href="faq.html">FaQ</a>
         ·
         <a href="privacy.html">Privacy</a>
       </p>
       <p class="footer-company-name">VISTA &copy; 2017</p>
     </div>
  <div class="footer-center">
       <div>
         <i class="fa fa-map-marker"></i>
         <p><span>University of Petroleum and Energy Studies</span> Dehradun,Uttarakhand</p>
       </div>
       <div>
         <i class="fa fa-phone"></i>
         <p>+91-9927200619<br>+91-9927200619<br>+91-9927200619</p>
       </div>

       <div>
         <i class="fa fa-envelope"></i>
         <p><a href="mailto:support@company.com">help@vista.com</a></p>
       </div>
     </div>
  <div class="footer-right">

       <p class="footer-company-about">
         <span>About the company</span>
         Write |
         Read |
         Share <br>
         <br>
       </p>
       <p class="footer-company-about">
       <span> Follow us on:</span>
       <div class="footer-icons">
         <a href="#"><i class="fa fa-facebook"></i></a>
         <a href="#"><i class="fa fa-twitter"></i></a>
         <a href="#"><i class="fa fa-linkedin"></i></a>
         <a href="#"><i class="fa fa-github"></i></a>
       </div>
  </div>
  </footer>
</body>
</html>
