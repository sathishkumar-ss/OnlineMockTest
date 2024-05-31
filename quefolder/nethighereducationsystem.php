
  
<!DOCTYPE>
<html>
<?php
require 'dbconfig.php';
session_start(); 
header('Cache-Control: max-age=900');
?>
<head>
<title>Quiz</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {
    background-color:pink;
  background-size:100%;
  background-repeat: no-repeat;
  position: relative;
  background-attachment: fixed;
}
/* button */
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 500px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
 
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
 
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
 
.button:hover span {
  padding-right: 25px;
}
 
.button:hover span:after {
  opacity: 1;
  right: 0;
}
.title{
  background-color: #ccc11e;
  font-size: 28px;
  padding: 20px;
  text-align: center;
  
}
.button3 {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f4e542;
}
 
.button3:hover {
    background-color: #f4e542;
    color: Black;
}
input[type=radio]{
  transform:scale(1.8);
}
.center {
  margin: auto;
  height: 100%;
  width: 60%;
  padding: 20px;
  background-color: white;
  text-align: center;
  border-radius: 40px;
}
.result{
  text-align: center;
  bottom:32px;
}
.result {
   break-inside: .center;
}





</style>
</head>

<body>
<div class="title">Welcome have a nice day!!!</div><br><br>
<?php                               
                                
                                if (isset($_POST['click']) || isset($_GET['start'])){
                                @$_SESSION['clicks'] += 1 ;
                                $c = $_SESSION['clicks'];
                                if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
                                
                                $fetchqry2 = "UPDATE `nethighereducation` SET `userans`='$userselected' WHERE `id`=$c-1"; 
                                $result2 = mysqli_query($con,$fetchqry2);
                                }
      
                                  
                                } else {
                                  $_SESSION['clicks'] = 0;
                                }
                                
                                //echo($_SESSION['clicks']);
                                ?>

<center class="center">
<div class="bump "><br><form><center><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" float="left"><span>START QUIZ</span></button> <?php } ?></center></form></div>

<form action="" method="post">

<table>
  <?php if(isset($c)) {   $fetchqry = "SELECT * FROM `nethighereducation` where id='$c'"; 
        $result=mysqli_query($con,$fetchqry);
        $num=mysqli_num_rows($result);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


          }  
      ?>
 

<div class="wrap-content">
<div class="option">
<tr><td><h1><br><?php echo @$row['que'];?></h1></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 16){ ?>
  <tr><td><h2><input required type="radio"  name="userans" value="<?php echo $row['option 1'];?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['option 1']; ?><br></h2></td></tr>
  <tr><td><h2><input required type="radio" width="50%" name="userans" value="<?php echo $row['option 2'];?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['option 2'];?></h2></td></tr>
  <tr><td><h2><input required type="radio" name="userans" value="<?php echo $row['option 3'];?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['option 3']; ?></h2></td></tr>
  <tr><td><h2><input required type="radio" name="userans" value="<?php echo $row['option 4'];?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['option 4']; ?><br><br><br></h2></td></tr>
  <tr><td><button class="button3" name="click" >Next</button></td></tr> 
<?php }  
                ?> 
</div>



</table>
</form>


 <?php if($_SESSION['clicks']>15){ 
  $qry3 = "SELECT `ans`, `userans` FROM `nethighereducation`;";
  $result3 = mysqli_query($con,$qry3);
  $storeArray = Array();
  while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['ans']==$row3['userans']){
     @$_SESSION['score'] += 1;
    }
  }
  

 
 ?>
 <h3>The Answers are</h3>
  <?php
$sql = "SELECT id,ans FROM nethighereducation";
$result = $con->query($sql);
if ($result->num_rows> 0) 
{
echo "<table border=2 width=100% height=50%><tr><th>Q.NO</th><th>Correct Answers</th></tr>";
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>".$row["id"]."</td><td>".$row["ans"]."</td></tr>";
    }
echo "</table>";
} else 
{
echo "0 results";
}

?>


</center> 
 <div class="result">
 <h1>Result</h1>
 <button>
 <span><h1>No. of Correct Answer:&nbsp;<?php echo $no = @$_SESSION['score']; 
 session_unset(); ?></h1></span>
 <span><h1>Your Score:&nbsp<?php echo $no*2; ?></h1></span>
 
</button><br><br><br>

 </div>
<?php } ?>
</div>
 </body>
</html>
