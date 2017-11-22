<?php

//session_start();

{
  if(!mysql_connect("localhost","root","raghav") || !mysql_select_db("vista"))
  {
    die("Could Not Connect");
  }
  else{
  
  //$query=mysql_query("SELECT * FROM signup WHERE UserId='1'");
  $query=mysql_query("SELECT * FROM signup group by UserId");
 
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

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="uplogo.ico" />
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="slide.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="button.css">

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

  #left_div{
      flex: 1;
      overflow:hidden;
      background-color: #111;
      height: 200px;
      color: #fff;
      height: 580px;
      width: 330px;
      float: left;
      margin-top: 0px;
      position: fixed;
  }
  .post{
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 15px;
    padding-bottom: 15px;
    height: auto;
    width: 500px;
    margin-left: 400px;
    background-color: #808080;
    word-wrap: break-word;
    margin-top: 20px;
    float: center;
    position:relative;
    color: #fff;
    font-family: "Trebuchet MS", Helvetica, sans-serif;
}




    .comment
    {
    padding-left: 5px;
    padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    background-color: #333;
    margin-top: 10px;
    height: auto;
    margin-left: 0;
    margin-right: 0;


    }
    textarea {
      padding: 10px;
      vertical-align: top;
      width: 410px;
      background-color: #C0C0C0	;
      font-size: 13px;
    }
    textarea:focus {
      outline-style: solid;
      outline-width: 2px;
    }



.container {
	width: 45px;
	height: 45px;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: auto;
}

.btn {
	width: 45px;
	height: 45px;
    border: none;
    color: inherit;
    background: black;
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 300;
    outline: none;
    position: absolute;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

.btn img{
    top: 0;
    bottom: 0;
    left: 0;
    right: 5px;

}

.btn:after {
    content: '';
    position: absolute;
    z-index: -1;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.bg {
    height: 32px;
    width: 32px;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

.btn-boarder {
    border: 1.4px solid #fff;
    border-radius: 50%;
}

.animation {
    -webkit-transform: translate(50px, -50px);
    -moz-transform: translate(50px, -50px);
    -o-transform: translate(50px, -50px);
    -ms-transform: translate(50px, -50px);
    transform: translate(50px, -50px);
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    opacity: 0;
}

.animation2 {
    -webkit-animation: fadeIn 0.4s ease-out;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-fill-mode: forwards;
    -webkit-animation-delay: 0.4s;
    -moz-animation: fadeIn 0.4s ease-out;
    -moz-animation-iteration-count: 1;
    -moz-animation-fill-mode: forwards;
    -moz-animation-delay: 0.4s;
    animation: fadeIn 0.4s ease-out;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
    animation-delay: 0.4s;
}


@keyframes fadeIn {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}
.around {
    width: 51px;
    height: 51px;
    border: none;
    color: inherit;
    background: none;
    cursor: pointer;
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 300;
    outline: none;
    position: absolute;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

.around:after {
    content: '';
    position: absolute;
    z-index: -1;
}
#proname{
  color:#BBBBBB;
  font-size: 30px;

}

.newpost{
  padding-left: 15px;
  padding-right: 15px;
  padding-top: 15px;
  padding-bottom: 15px;
  height: auto;
  width: 500px;
  margin-left: 400px;
  background-color: #aaaaaa;
  word-wrap: break-word;
  margin-top: 20px;
  float: center;
  position:relative;

}
.newpost textarea{
  font-family: "Trebuchet MS", Helvetica, sans-serif;
  font-size: 18px;
  background:#aaaaaa;
  width: 90%;



}


#myInput {
  background-position: 1px 1px;
  background-repeat: no-repeat;
  width: 70%;
  font-size: 16px;
  margin-top: 0px;
  padding: 10px 20px 12px 0px;
  margin-bottom: 0px;
  background: #aaaaaa;
  outline: none;
  border: 0px;
  position:relative;



}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
  background: #aaaaaa;
  position: absolute;
  display: none;
  max-height: 100px;
  overflow: scroll;
  width: 70%;
  outline: none;
  border: 0px;
  margin-left:25px;
}

#myUL li a {
  border: 0px solid #ddd;
  margin-top: -1px;
  background-color: #808080;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  width: 350px;
  float:center;
  z-index: 3;
  margin-right: 100px;

}
.intext
{
  font-family: "Courier New", Courier, monospace;
  font-size: 20px;
  color:#999999;
  margin-left: 10px;

}



#myUL li a:hover:not(.header) {
  background-color: #eee;
}


.heart {
  cursor: pointer;
  height: 70px;
  width: 70px;
  background-image:url( 'images/heart.png');
  background-position: left;
  background-repeat:no-repeat;
  background-size:2900%;
  border-radius: 100%;
}

.heart:hover {
  background-position:right;
}

.is_animating {
  animation: heart-burst 1s steps(28) 1;
}

@keyframes heart-burst {
  from {background-position:left;}
  to { background-position:right;}
}
div.fileinputs {
	position: relative;
}

div.fakefile {
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: 1;
}

input.file {
	position: relative;
	text-align: right;
	-moz-opacity:0 ;
	filter:alpha(opacity: 0);
	opacity: 0;
	z-index: 2;
}
.upload-wrap {
    position: relative;
}
.upload-btn {
    position: absolute;
    left: 0;
    opacity: 0;
    margin-left: 0%;
    margin-top: -9%;
    height: 100%;
    width: 33%;
    cursor: pointer;
}
</style>
<title > Vista</title>
</head>
<!--------------------------------------------------------------------------------------------------->
<body bgcolor="#555">


<!-------------------------------------------------------------------------------------------->


 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <center><img src=" " alt="pro" height=120 width=120 style="border-radius:100%"></center>
  <br>
  <br>
  <center><span id="proname" ></span></center>
  <a href="timeline.php">Home</a>
  <a href="profile.php">Profile</a>
  <a href="settings.php">Settings</a>
  
  <a href="contact.php">Contact</a>
  <b><a href="logout.php">Log Out</a></b>
</div>






<div id="main">
  <header  >
  <ul>
    <a href="main.php"><img src="images/logo.png"height="40" width="160" align="left" id="logo" ></a>
<!--
    <li class="name">

  <form method="get" action="search.php" id="searchbox5">
      <input id="search5" name="q" type="text" size="50" placeholder="Search..." />

  </form>

    </li>
-->
<!--
    <li class="name"  style="float:right;"><a onclick="openNav()" style="cursor:pointer" >&#9776;</a></li>
--> 
	<li class="name"  style="float:right;"><a onclick="openNav()" style="cursor:pointer" >&#9776;</a></li>
	</ul>
  </header>
</div>



<div width="900">
<div id='left_div' >
  <center><p style='font-family:"Courier New", Courier, monospace; font-size:20px;'>  - Recent Blogs Topics - </p>
    <?php  $sql = "SELECT * FROM post p WHERE Date = (SELECT max(Date) from post where p.TopicId =post.TopicId)  ORDER BY PostId DESC ";
    $result = mysql_query($sql);
    $i=0;
    while(($row = mysql_fetch_assoc($result)) && ($i<5) )
	{
      $dbtopicnew=$row['TopicId'];
    ?>
      <p class="intext"><?php echo  $dbtopicnew ?></p>
<?php
  $i+=1;
    }
?>
  </center>
</div>
<!--

<div class="newpost" >
  <form method="post" action="" enctype="multipart/form-data">
<img src="images/search.png" height="15" width="20"  >
<input type="text" id="myInput" onkeyup="myFunction()"name="topicnew" placeholder="Topic" title="Topic Name" >

<ul id="myUL" >
  
  <li><a href="#" id="Fitness" onclick="puttext(id)">Fitness</a></li>
  <li><a href="#" id="Food" onclick="puttext(id)">Food</a></li>
  <li><a href="#" id="Sports" onclick="puttext(id)">Sports</a></li>
  <li><a href="#" id="Technology" onclick="puttext(id)">Technology</a></li>
  <li><a href="#" id="Programming" onclick="puttext(id)">Programming</a></li>
  
  </ul>

<script>


					$(document).keyup(function(e) {
            var keyCodeESC = 27;
					    if (e.keyCode == keyCodeESC) {
					    	$("#myUL").hide();
				        	}
					});
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    ul.style.display="block";
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
  }
    function puttext(z){
      document.getElementById("myUL").style.display="none";
      document.getElementById("myInput").value=z;
    }
    function hidelist(){
      document.getElementById("myUL").style.display="none";
    }

</script>
<!--
  <textarea placeholder="Write a post..." name="contentnew" style="resize:none;outline:none;border:0px;"></textarea>
  <div id="container" style="width:100%;height:auto;">
  <img id="blah" src="#" alt="" style="opacity:0.5;width:100%;margin-top:8%;"/>
  </div>
  -->
  <script>
(function() {

var img = document.getElementById('container').firstChild;
img.onload = function() {
    if(img.height > img.width) {
        img.height = '100%';
        img.width = 'auto';
    }
};

}());

  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
  </script>
  <br>
<!--
  <div class="upload-wrap">
    <button name="postimage" type="file" class="button" style=" color: #FFFFFF;height:-100%;margin-left:0%;width:53%;">
      <span class="shift"> Upload Photo</span></a>
      <div class="mask"></div>
    </button>
      <input type="file" name="postphoto" class="upload-btn" onchange="readURL(this);" >


  </div>


  <button class="button" name="postnew"  onclick=Refresh() style="height:10px; width:80px; padding-top:7px;padding-bottom:17px;margin-left:415px;z-index:0;">
    <span class="shift">Post</span>
  </button>
</form>
</div>

-->
<script>
function Refresh()
{
  window.location.reload(true);

}
</script>
<?php
  /*
  if(isset($_POST['postnew']))
  {
    date_default_timezone_set('Asia/Kolkata');
    $topicnew=$_POST['topicnew'];
    $contentnew=$_POST['contentnew'];
    $time=date("H:i:s");
    $date=date("Y-m-d");
    if(!empty($topicnew) && !empty($contentnew))
	{


      if(!empty($_FILES['postphoto']['name']))
		{

                $fileName = $_FILES['postphoto']['name'];
                $tmpName  = $_FILES['postphoto']['tmp_name'];
                $filePath = "images/". $fileName;
                $result = move_uploaded_file($tmpName, $filePath);
                $sql="INSERT INTO post(TopicId,UserId,Time,Date,Content,Likes,Image) VALUES('$topicnew','$dbid','$time','$date','$contentnew',0,'$filePath')";
                $result=mysql_query($sql);



        }

       else
		{
                  $sql="INSERT INTO post(TopicId,UserId,Time,Date,Content,Likes) VALUES('$topicnew','$dbid','$time','$date','$contentnew',0)";
                  $result=mysql_query($sql);
        }



    }


  }
  */


  /*$query=mysql_query("SELECT UserId,MAX(Fitness) As Fitness,MAX(Food) As Food,MAX(Sports) As Sports,MAX(Technology) As Technology,MAX(Programming) As Programming
  FROM topic WHERE GROUP BY UserId");
  while($row=mysql_fetch_assoc($query))
  {
    
    $d1=$row['Fitness'];
    $d2=$row['Food'];
    $d3=$row['Sports'];
    $d4=$row['Technology'];
    $d5=$row['Programming'];
  }
  */
    
    $sql = "SELECT * from post WHERE TopicId='Fitness' OR TopicId='Food' OR TopicId='Sports' OR TopicId='Technology' OR TopicId='Programming' ORDER BY Date DESC,Time DESC";
    $result = mysql_query($sql);
    while ( $row = mysql_fetch_assoc($result) )
	{
          $dbtopicnew=$row['TopicId'];
          $dbcontent=$row['Content'];
          $time=$row['Time'];
          $date=$row['Date'];
          $dbdate=date('d-M-Y', strtotime($date));
          $dbtime=date('h:i:ma', strtotime($time));
          $ID=$row['UserId'];
          $dbpostid=$row['PostId'];
          $dbimage=$row['Image'];
          $query=mysql_query("SELECT * FROM signup WHERE UserId=$ID ");
          while($row=mysql_fetch_assoc($query))
          {

          $dbfname=$row['FirstName'];
          $dblname=$row['LastName'];
          }


?>
<div class="post">

  <h3><?php echo $dbtopicnew ?></h3>
  <span style="color:#dcdcdc"><?php echo $dbdate ?> <?php echo $dbtime ?></span><span style="margin-left:100px"> By: <?php echo $dbfname.' '.$dblname;?></span><br>
  <p>
    <?php echo $dbcontent ?>
  </p>



  <div id="container" style="width:100%;height:auto;">
  <img id="blah" src="<?php echo $dbimage ?>" alt="" style="opacity:1;width:100%;"/>
  </div>
  
  <!--   for replying to A POST
  <div id="reply" style="width:100%;height=100%;">
  <span style="color:#dcdcdc"><?php echo $dbdate ?> <?php echo $dbtime ?></span><span style="margin-left:300px"> Reply by: <?php echo $dbfname.' '.$dblname;?></span>
  </div>
-->
<!--
<center>
  
  <div class="heart" id="<?php echo $dbpostid ?>"></div>

  <script>

  $("#<?php echo $dbpostid ?>").on('click touchstart', function()
  {
    var click = +$(this).data('clicks') || 0;
    if (click % 2 == 0)
	{
      $(this).toggleClass('is_animating');
      $(this).css({
      'background-position':'right'
      });

    }
	else
	{
         $(this).css({
         'background-position':'left'
         });

    }

       $(this).data('clicks',click+1);

  });

  /*when the animation is over, remove the class*/
  $("#<?php echo $dbpostid ?>").on('animationend', function(){
  $(this).toggleClass('is_animating');
  });

  </script>
</center>
-->
 <!--
 <div class="comment">
  <textarea placeholder="Write a comment..." style="resize:none;" name="reply";></textarea>
  
  <!-- <script src='dist/autosize.js'></script> 
  <script>
    autosize(document.querySelectorAll('textarea'));
  </script>
  
  <div class="container" style="margin-top:4px;margin-right:4px;position:relative;float:right">
  			<button class="btn btn-inside btn-boarder" id="<?php echo $dbpostid ?>"><img src="https://i.cloudup.com/gBzAn-oW_S-2000x2000.png" width="33px" height="40px" id="plane" >
			</button>
  			<div class="bg"><img src="https://i.cloudup.com/2ZAX3hVsBE-3000x3000.png" id="bg" width="25px" height="25px" style="opacity:0; position:center;margin-left:5px; margin-top:3px;">
			</div>
  			<div class="around around-boarder" onclick="ani(); anitwo();"></div>
  		</div>

 </div>
-->

</div>
	<?php
}

 ?>

  <script>
      
	  
	  function ani()
	  {
                document.getElementById('plane').className ='animation';
      }
              function anitwo(){
                  document.getElementById('bg').className ='animation2';
              }


  </script>

<?php

 ?>




</body>
</html>
<?php
}
?>
