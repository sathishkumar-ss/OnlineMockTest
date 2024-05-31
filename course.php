<!DOCTYPE html>
<html>  
<head>
	<title>our courses</title>
			

	<style type="text/css">

		.course button {
           display: inline-flex;
           padding:40px;
           width:400px;
           height: 150px;
           margin: 20px;
          	text-align: center;
           border-radius:50px;
          
         

        }
        .course a button{
        	width:250px;
        	margin:35px;
        	left:20%;
        	padding: 50px;
        	background-color: skyblue;
        	text-align: center;
        	font-family: timesofindia;
        	font-size: 24px;
        	text-decoration: none;

        }
        .course button:hover {
        	background-color:pink; 
       }
       .course::after {
		  content: "";
		  clear: both;
		  display: table;
		}

@media screen and (max-width: 700px){
  .course{
  	position: relative;
  }
}
@media screen and (min-width: 300px){
.course{
	position:relative;
}
 
}

	</style>
</head>
<body>
	

<div class="course">

<h1 style="text-align: center;padding:18px 18px ;color: blue;margin:20px auto;">OUR COURSES</h1>
<a href="railways.php"><button>RAILWAYS</button></a>
<a href="sscjee.php"><button> SSC JEEE</button></a>
<a href="gate.php"><button>GATE EXAMS</button></a>
<a href="cs.php"><button>COMPUTER SCIENCE</button></a>
<a href="ssc.php"><button>SSC</button></a>
<a href="tnpsc.php"><button>TNPSC</button></a>
<a href="aptitude.php"><button>APTITUDE</button></a>
<a href="upse.php"><button>UPSC</button></a>
<a href="defence.php"><button>DEFENCE</button></a>
<a href="bankpo.php"><button>BANK/PO</button></a>
<a href="airways.php"><button>AIRWAYS</button></a>
<a href="net.php"><button>NET</button></a>



</div>
</body>
</html>
	
