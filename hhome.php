 
<?php
		  
require 'Hairdb.php';
?>
<!DOCTYPE html>
 <html lang="ar-sa" dir="rtl">
   
<head>
<title> the boeuty of natural hair </title>

<link rel="stylesheet" href= "stty.css">
<style>

</style>
</head>

<BODY onLoad="getLogonTime()">
<img src="https://i.ibb.co/DGsxhPg/30953635-6928-48cc-ae17-975e36a31c7d.jpg" alt="the beauty of natural hair" height ="150" width="150">

</br>
<nav>

<ul>
<li> <a href="#"> الرئيسية </a> </li>
<li> <a href="hair type.html">أنواع الشعر </a> </li>
<li> <a href="hair pattren.html">انماط الشعر</a>
 <ul>
 <li> <a href="hair pattren.html" >أنماط الشعر</a> </li>
<li> <a href="stright.html" >الشعر الأملس</a> </li>
<li> <a href="wavy.html" >الشعر المموج</a> </li>
<li> <a href="curly.html">الشعر المجعد</a> </li>
<li> <a href="coily.html">الشعر شديد التجعيد</a> </li>
 </ul>
 </li>
<li><a href="mm.html">المسامية </a></li>
<li> <a href="care.php"> العناية بالشعر </a>
<ul>
<li> <a href="problem.php"> مشاكل الشعر </a></li>
<li> <a href="care.php"> العناية بالشعر </a></li>
</ul>
 </li>
<li> <a href="#"> أخرى </a> </li>
<li> <a href="log.php"> 
<?php 
if(isset($_SESSION['Email'])){
	/*$name = mysqli_query ($con,"select Fname from user where Email=");*/
echo $_SESSION['Email'] ; }
else{
	echo 'تسجيل الدخول';
}
?>
 </a></li>
</ul>
</nav>
</br>
<h1> رسالتنا </h1>
<p> سواء كان شعرك ناعمًا أو سميكاً أو خفيفًا,طويلاً أو قصيراً,منسدلًا أو مجعدًا ,فأن شعرك يستحق الأحترام أياً كان حاله.</p>
<p>ولأن شعرك يستحق الحب والأحترام؛ تعرفي هنا على أنماط تجعيد شعرك ونوعه ومساميته واحتياجاته وطرق تصفيفه والعناية به .</p>





<div class="main">

<div class="cards">
<div class="image">
<img src="https://i.ibb.co/b27Wmt1/photo.jpg" alt="curlyphoto" class="card-img">
</div>

<div class="title">
<h3>الشعر المجعد</h3>
</div>
<div class="des">

<h5> هذا النوع من الشعر يحتوي
 على خصل تدور حول نفسها مثل الزنبرك و يصنف حسب..
<a href="curly.html">المزيد</a></h5>


</div>
</div>




<div class="cards">
<div class="image">
<img src="https://i.ibb.co/GxFXmGq/03c1b361-bf83-43c7-ae5f-b4f9ba7f4464.jpg" alt="صوره" border="0">
</div>

<div class="title">
<h3>مشاكل الشعر</h3>
</div>
<div class="des">

<h5>
يتأثر شعرنا بعوامل عديدة والتي تؤثر على صحة وجمال شعرنا.
<a href="problem.php">المزيد</a></h5>


</div>
</div>


<div class="cards">
<div class="image">
<img src="https://i.ibb.co/VBv24X7/Whats-App-Image-2020-11-20-at-9-59-46-PM.jpg" alt="img " border="0">
</div>

<div class="title">
<h3>العناية بالشعر</h3>
</div>
<div class="des">

<h5>
يحتاج الشعر الى بعض العنايه والاهتمام ليظهر بمظهر صحي ..
<a href="care.php">المزيد</a></h5>


</div>
</div>
</div>
</br>
<FORM><INPUT TYPE=button value="الوقت الذي قضيتة بالصفحة" onClick=getLogoffTime()></FORM>

</body>
</html>

 <SCRIPT>
<!--  Activate Cloaking Device
 var onHours = " ";
 var onMinutes = " ";
 var onSeconds = " ";
 var offHours = 0;
 var offMinutes = 0;
 var offSeconds = 0;
 var logSeconds = 0;
 var logMinutes = 0;
 var logHours = 0;
 var OnTimeValue = " ";
 var OffTimeValue = " ";
 var PageTimeValue = " ";
 // Back to previous page.
 function WinOpen() 
    {
    getLogoffTime();
    window.location="js-timet.htm"
    window.location="js-timet.htm"   // double call for Mac users??
    }
 // Loads HTML page to full window for View Source.
 function WinOpen1() 
    {
    alert('View/Document Source from menu bar..., then close new window to return to this page. The animation of the radio buttons on the JavaScript index will be dead upon return. Reload the JavaScript page to get them going again. ');
    window.open("js-timer.htm","DisplayWindow","menubar=yes,scrollbars=yes");
    }
 // Captures logon time.
 function getLogonTime()
    {
    var now = new Date();
    // Used to display logon time.
    var ampm = (now.getHours() >= 12) ? " مساءً" : " صباحاً"
    var Hours = now.getHours();
          Hours = ((Hours > 12) ? Hours - 12 : Hours);
    var Minutes = ((now.getMinutes() < 10) ? ":0" : ":") + now.getMinutes();
    var Seconds = ((now.getSeconds() < 10) ? ":0" : ":") + now.getSeconds();
    // String to display log-on time.
    OnTimeValue =(" "
        + Hours
        + Minutes
        + Seconds
        + " "
        + ampm);
    // Capture logon time for use in timer().
    onHours = now.getHours();
    onMinutes = now.getMinutes();
    onSeconds = now.getSeconds();  
    }
 function getLogoffTime()
    {
    var now = new Date();
    // Used to display logoff time.
    var ampm = (now.getHours() >= 12) ? " مساءً" : " صباحاً"
    var Hours = now.getHours();
          Hours = ((Hours > 12) ? Hours - 12 : Hours);
    var Minutes = ((now.getMinutes() < 10) ? ":0" : ":") + now.getMinutes();
    var Seconds = ((now.getSeconds() < 10) ? ":0" : ":") + now.getSeconds();
    // String to display log-off time.
    OffTimeValue =(" "
        + Hours
        + Minutes
        + Seconds
        + " "
        + ampm);
    // Capture logoff time for use in timer().
    offHours = now.getHours();
    offMinutes = now.getMinutes();
    offSeconds = now.getSeconds(); 
    timer(); 
    }
 // Compute difference between logoff time and logon time. 
 function timer()
    { 
    if (offSeconds >= onSeconds)
       { logSeconds = offSeconds - onSeconds; }
    else
       {
       offMinutes -= 1;
       logSeconds = (offSeconds + 60) - onSeconds;      
       }
    if (offMinutes >= onMinutes)
       { logMinutes = offMinutes - onMinutes; }
    else
       {
       offHours -= 1;
       logMinutes = (offMinutes + 60) - onMinutes;
       }
    logHours = offHours - onHours;
    // Used to display time on page.
    logHours =  ((logHours < 10) ? "0" : ":") + logHours;
    logMinutes = ((logMinutes < 10) ? ":0" : ":") + logMinutes;
    logSeconds = ((logSeconds < 10) ? ":0" : ":") +logSeconds;
    // String to display time on page.
    PageTimeValue =(" "
        + logHours
        + logMinutes
        + logSeconds);
    displayTimes();
    }
 function displayTimes()
    {
    alert("\n,وقت دخول الصفحة    : " +OnTimeValue+"\n\nالوقت الآن  : "+OffTimeValue+"\n\nالوقت الذي قضيته بالصفحة هو : " + PageTimeValue);
    }
 // Deactivate Cloaking -->
// هذا الكود جاهز من موقع الأحمد جافا سكريبت http://www.elahmad.com/api/ ... http://www.elahmad.com/java.php?java=13
 </SCRIPT>
