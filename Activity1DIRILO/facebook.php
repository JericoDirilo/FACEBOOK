<?php 
       include 'connect.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
<style >
.Facebook{
		width: 100%;
		height: 80px;
		color: white;
		font-family: Bahnschrift SemiBold;
		font-size: 40px;
		background-color: #3F5C9A;
		align-content: center; 
}

.Email{
	font-size: 15px;

}
.Password{
	font-size: 15px;
}
.login{
	background-color:#187bcd ;
	color: white;
}
.Sign {
	margin-left: 730px;
	font-size: 33px;
}
.Quick {
	margin-left: 730px;
		font-size: 33px;
		line-height: 150px;
		margin-top: -50px;
}
.text3{
		letter-spacing: 1px;
		font-size: 20px;
		margin-top: -120px;
		position: absolute;
		left: -70px;
		
		}
		
input[type=name]{
		padding: 10px;
		font-size: 15px;
		border-radius: 3px;
		border: black;
		margin-bottom: 5px;
	}
	input[type=Pass]{
		padding: 10px;
		font-size: 15px;
		border-radius: 3px;
		border: black;
		margin-bottom: 5px;
	}
	.FL{
		margin-top: -50px;

	}
	.T1 {
			margin-left: 725px;
	}
	.Birth
	{
		margin-left: 725px;
		color: gray;
	}
	.Month {
		margin-left: 725px;
		margin-right: 0px;
	}
	#Day {
		margin-left: 827px;
		margin-top: -21px; 
	}
	#Year {
		margin-left: 887px;
		margin-top: -22px; 
	}
	.Gender {
		margin-left:  725px;
		margin-top: -5px;
		color: gray; 
	}
	 .Button{
	 	margin-left: 725px;
	
	 }
	 .privacy {
	 	color: gray;
	 }
	 .SignUp{
		background-color: #088A08;
		color: white;
		width: 30%;
		size: 40px
		font-size: 30px;
		padding: 10px;
		border-radius: 5px;
		}
	.img-read{
		position: absolute;
		width: 40px;
		display: inline-block;
		margin-left: 60px;
		margin-top: -20px;

	}
	.img-timeline{
		position: absolute;
		width: 40px;
		display: inline-block;
		margin-left: 60px;
		margin-top: 70px;
	}
	.img-search{
		position: absolute;
		width: 40px;
		display: inline-block;
		margin-left: 60px;
		margin-top: 170px;
	}
	.text-read{
		position: absolute;
		margin-left: 100px;
		margin-top: -10px;
	}
	.text-search{
		position: absolute;
		margin-top: 80px;
		margin-left: 100px;
	}
	.text-timeline{
		position: absolute;
		margin-top: 180px;
		margin-left: 100px;
		
	}
body{

	background-color: #D8D8D8;

}
*{
	margin: 0px;
	padding: 0px;
	font-family: arial;
}

</style>


</head>
<body>
	<table width="100%">
		<tr>
		<td>
		
		<table class="Facebook">


<form method="POST" action="facebook.php">

		<tr>
		<td> &emsp; &nbsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <b>facebook</b>
			<td class="Email"> Email or Phone&emsp;&emsp;&emsp;&emsp;&emsp; Password<br>
				<input type="text" name="Mail"> 
				<input type="text" name="Pass"> 
				<button type="submit" class="btnlogin" name="login">Log In</button>
				<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Forgot account?</td>
		</td>
		</tr>
		</table>

 <?php
          if(isset($_POST['login']) && ($_POST['Mail']) && ($_POST['Pass'])){
$Email = $_POST['Mail'];
$Password = $_POST['Pass'];
          $sqlSelect="SELECT * FROM tblFacebook WHERE mobileemail='$Email' AND npassword='$Password'";
          $query=mysqli_query($connect,$sqlSelect);
          $rows=mysqli_fetch_assoc($query);  
               if($rows['mobileemail']==$Email && $rows['npassword']==$Password){
                   echo '<script>alert("Log In")</script>';
               }
               else{
                    echo '<script>alert("Incorrect")</script>';
               }    
}
?>

	</form>


			<div class="Sign"><h3>Sign Up</h3></div>
			<div class="Quick"><h6>It's quick and easy.</h6></div>
			<div class="text3"><h2>&emsp; &nbsp; &emsp; &emsp;Connect with friends and the<br>&emsp; &nbsp; &emsp; &emsp;world around you on Facebook.</h2></div>
			<div >
				<img class="img-read" src="Pics/read.png"><p class="text-read"><b>See photos and updates</b>&nbsp; form friends in News Feed.</p>
				<img class="img-timeline" src="Pics/timeline.png"><p class="text-timeline"><b>Share what's new</b>&nbsp; in your life in Timeline.</p>
				<img class="img-search" src="Pics/search.png"><p class="text-search"><b>Find more</b>&nbsp; of what you are looking for with Facebook Search.</p>
			</div>

<table class="T1">
		<tr>
			<td>

<form method="POST" action="facebook.php">



				<div class="FL">
			<input type="name" name="firstname"  placeholder="First name" size="25px" height="20">&nbsp;
			<input type="name" name="lastname" placeholder="Last name" size="25px" height="20"></div>
		</td>
		</tr>
	</table>

	<table class="T1">
		<tr>
			<td><div >
			<input type="name" name="mobile" placeholder="Mobile number or email" size="58">
		


		</div></td>
		</tr>
		</table>

		<table class="T1">
			<tr>
				<td><div>
				<input type="Pass" name="newpass" placeholder="New password" size="58">
		</div></td>
			</tr>
		</table>
		





		<div class="Birth"> <br><b>&nbsp;Birhthday</b></div>
		<tr>
			<td >	
		<div class="Month"> 
		<select name="Month">
			
			    <option value=''> <b>Month</b></option>
    			<option value='1'>January</option>
			    <option value='2'>February</option>
			    <option value='3'>March</option>
			    <option value='4'>April</option>
			    <option value='5'>May</option>
			    <option value='6'>June</option>
			    <option value='7'>July</option>
			    <option value='8'>August</option>
			    <option value='9'>September</option>
			    <option value='10'>October</option>
			    <option value='11'>November</option>
			    <option value='12'>December</option>
		</select></td></div>
		
					</td>
				</tr>
			<td>
					<div id="Day">

			        <select name='number'>
			    <option value=''> <b>Day </b></option>
			    <option value='1'>1</option>
			    <option value='2'>2</option>
			    <option value='3'>3</option>
			    <option value='4'>4</option>
			    <option value='5'>5</option>
			    <option value='6'>6</option>
			    <option value='7'>7</option>
			    <option value='8'>8</option>
			    <option value='9'>9</option>
			    <option value='10'>10</option>
			    <option value='11'>11</option>
			    <option value='12'>12</option>
			    <option value='13'>13</option>
			    <option value='14'>14</option>
			    <option value='15'>15</option>
			    <option value='16'>16</option>
			    <option value='17'>17</option>
			    <option value='18'>18</option>
			    <option value='19'>19</option>
			    <option value='20'>20</option>
			    <option value='21'>21</option>
			    <option value='22'>22</option>
			    <option value='23'>23</option>
			    <option value='24'>24</option>
			    <option value='25'>26</option>
			    <option value='26'>26</option>
			    <option value='27'>27</option>
			    <option value='28'>28</option>
			    <option value='29'>29</option>
			    <option value='30'>30</option>
			    <option value='31'>31</option>
			</select>
				</div></td>

			<tr>
				<td>
					<div id="Year">

			        <select name='Year'>
			    <option value=''> <b>Year </b></option>
			     <option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
			<option value="1999">1999</option>
			<option value="1998">1998</option>
			<option value="1997">1997</option>
			<option value="1996">1996</option>
			<option value="1995">1995</option>
			<option value="1994">1994</option>
			<option value="1993">1993</option>
			<option value="1992">1992</option>
			<option value="1991">1991</option>
			<option value="1990">1990</option>
			<option value="1989">1989</option>
			<option value="1988">1988</option>
			<option value="1987">1987</option>
			<option value="1986">1986</option>
			<option value="1985">1985</option>
			<option value="1984">1984</option>
			<option value="1983">1983</option>
			<option value="1982">1982</option>
			<option value="1981">1981</option>
			<option value="1980">1980</option>
			<option value="1979">1979</option>
			<option value="1978">1978</option>
			<option value="1977">1977</option>
			<option value="1976">1976</option>
			<option value="1975">1975</option>
			<option value="1974">1974</option>
			<option value="1973">1973</option>
			<option value="1972">1972</option>
			<option value="1971">1971</option>
			<option value="1970">1970</option>
			<option value="1969">1969</option>
			<option value="1968">1968</option>
			<option value="1967">1967</option>
			<option value="1966">1966</option>
			<option value="1965">1965</option>
			<option value="1964">1964</option>
			<option value="1963">1963</option>
			<option value="1962">1962</option>
			<option value="1961">1961</option>
			<option value="1960">1960</option>
			<option value="1959">1959</option>
			<option value="1958">1958</option>
			<option value="1957">1957</option>
			<option value="1956">1956</option>
			<option value="1955">1955</option>
			<option value="1954">1954</option>
			<option value="1953">1953</option>
			<option value="1952">1952</option>
			<option value="1951">1951</option>
			<option value="1950">1950</option>
			<option value="1949">1949</option>
			<option value="1948">1948</option>
			<option value="1947">1947</option>
			<option value="1946">1946</option>
			<option value="1945">1945</option>
			<option value="1944">1944</option>
			<option value="1943">1943</option>
			<option value="1942">1942</option>
			<option value="1941">1941</option>
			<option value="1940">1940</option>
			<option value="1939">1939</option>
			<option value="1938">1938</option>
			<option value="1937">1937</option>
			<option value="1936">1936</option>
			<option value="1935">1935</option>
			<option value="1934">1934</option>
			<option value="1933">1933</option>
			<option value="1932">1932</option>
			<option value="1931">1931</option>
			<option value="1930">1930</option>
			</select>
				</div></td> </tr>
				

			<td><div class="Gender"> <br><b>&nbsp;Gender<br></b><div></td>
			<tr>
			<td>
			<div class="Button"><br> 
				<input type="radio" name="gender" value="female"> <b>Female </b>&emsp;&emsp;
				<input type="radio" name="gender" value="male"><b>Male</b> &emsp;&emsp; 
				<input type="radio" name="gender" value="custom"><b>Custom </b>
			
				<br>
				<br>
				<div class="privacy">By clicking Sign Up, you agree to our Terms, Data Policy and <br>Cookies Policy. You may receive SMS Notifications from us and <br>can opt out any time.</div>
				<br>
				<button class="SignUp"  type="submit" name="SignUp"><b>Sign Up</b></button>
			</div>
			</td>
			</tr>		
			</td>
		</tr>
	</table>
</form>
<?php
if(isset($_POST['SignUp'])){
     if(isset($_POST['gender'])){
          $Firstname = $_POST['firstname'];
          $Lastname = $_POST['lastname'];
          $Mobileoremail = $_POST['mobile'];
          $Newpassword = $_POST['newpass'];
          $Month = $_POST['Month'];
          $Day = $_POST['number'];
          $Year = $_POST['Year'];
          $Gender = $_POST['gender'];
          $sqlInsert = "INSERT INTO tblFacebook(fname,lname,mobileemail,npassword,month,day,year,gender)VALUES('$Firstname','$Lastname','$Mobileoremail','$Newpassword','$Month',$Day,$Year,'$Gender')";
          $query = mysqli_query($connect,$sqlInsert);
          if($query == TRUE){
               echo "<strong>Record added</strong>";
          }else{
               echo "<strong>Record not Added</strong>";
          }
     }
}
 ?>
</body>
</html>