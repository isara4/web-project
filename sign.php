

<!DOCTYPE html>
<html lang="ar" dir ="rtl">
  <head>
  
     <title> sign up </title>

	 </head>
	 
	 <body>
	 <h1> انشاء حساب</h1>
<form  method="post">
	الاسم الاول* : 
	<input type="text" name="FirstName" placeholder = "مطلوب" required>
	<br>
	الاسم الثاني :
	<input type="text" name="LastName" placeholder = "اختياري">
	</br>
	الايميل* : 
	<input type="email" name="email" placeholder = "example@abc.com"required>
	</br>
	كلمة المرور* :
	<input type="password" name="password" required>
	
</br>
	 <button type="submit" name="signup">الانضمام</button>
	<a href = "log.php"> لدي حساب بالفعل </a>
	
</form>
  </body>
 </html> 
 
<?php
		  
require 'Hairdb.php';



if(isset($_POST['signup'])){

		  
	$Fname = $_POST['FirstName'];
	$Lname = $_POST['LastName'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	
	$qu ="INSERT INTO user(Fname,Lname,Email,PASS) VALUEs ('$Fname','$Lname','$email','$pass')";
	
	 
	if(mysqli_query($con, $qu)){
		echo 'تم انشاء الحساب بنجاح يمكنك تسجيل الدخول الان';
		
	}	
}
?>