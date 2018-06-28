<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Register </title>
</head>
<style type="text/css">
     .header{
        
        background-color: greenyellow;
        width: 100%;
        height: 70px;
        text-align: center;
        color: Black;
        float: left ;
        
               
     }
     .newsbar{
        
        background-color: green;
        width: 100%;
        height: 30px;
        float: left;
        color: white;
        
     }
     .menu{
        
        background-color: greenyellow;
        width: 100%;
        height: 30px;
        text-align: center;
        color: Black;
        float: left ;
       
       
     }
       .left{
        
        background-color: cornsilk;
        width: 50%;
        height: 500px;
        text-align: center;
        color: Black;
        float: left ;
        
     }
     .right{
        
        background-color: cornsilk;
        width: 50%;
        height: 500px;
        text-align: center;
        color: Black;
        float: left ;
        
     }
     .footer{
         background-color: greenyellow;
        width: 100%;
        height: 20px;
        text-align: center;
        color: white;
        float: left ;
        font: sans-serif ;
       
       
     }


</style>
<script>
function f1()
{  
    
    var name = document.getElementById('name').value;
    var up = name.toUpperCase();
    document.getElementById('name').value=up;
   

}
function f2()
{
    
    var email = document.getElementById('uname').value;
    document.getElementById('uname').value=email + '@xyz.com';
    
    
}

function f3()
{
    var n1 = document.getElementById('pass').value;
    var n2 = document.getElementById('rpass').value;
  
    var com = n1.localeCompare(n2);
    if(com == 1)
    {
        
        alert('Passwords does not match. Please check it');
    }
}
function f4()
{    
    var n = document.getElementById('pnumber').value;
    
  if (isNaN(n))
    {
        alert('No alphabets are accepted in this field');
    }
}
function f5()
{
    document.abc.src='img/b.jpg';
    
}
function f6()
{
    
    document.abc.src='img/a.jpg';
    
}

</script>
<body>
<div class="header" >
<h1>XYZ.com</h1>
</div>
<div class="newsbar" >
<marquee> News bar. All exciting new and updates shows up in this section. Read it regularly to stay updated. </marquee>
</div>

<div class="menu" >
<a href="my.php" >Home &nbsp;</a> &nbsp;|
<a href="under.php" >Shop </a> |
<a href="under.php" >Our Brands </a> |
<a href="under.php" >Query </a> |
<a href="contactus.php" >Contact Us </a> |
<a href="under.php" >About Us </a>
</div >

<form method="post" >
<div class="left">
<br /><br /><br /><br /><br /><br /><br /><br />
<img src="img/a.jpg" name='abc' onmouseover="f5()" onmouseout="f6()"  />

</div>
<div class="right" >

<h1><b><i> Registeration Form </i></b></h1>
<div></a><br/> Name :<input type="text" name="name" id="name" placeholder="Eg.(Mr XYZ)" onkeyup="f1()"  required /></div>
<div></a><br/> Username :<input type="text" name="uname" id="uname" placeholder="xyz123" onblur="f2()"   required /></div>
<div><br/> Password :<input type="password" name="pass" id="pass" placeholder="Password " required /></div>
<div><br/> Re-enter Password :<input type="password" id="rpass" placeholder="Re-enter Password " onblur="f3()" required /></div>
<div><br/> Gender :   Male<input type="radio" name="gender" value="male" />  |   Female<input type="radio" name="gender" value="female" /></div>
<div></a><br/> Contact No. :<input type="text" name="pnumber" id="pnumber" placeholder="Phone Number" maxlength="10"      onkeyup="f4()" required   /></div>
<div><br/>Date of Birth :<input type="text" id="date" placeholder="Date" size="7px" maxlength="2" required /> - <input type="text" id="month" placeholder="Month(eg : 04 or 4)" size="10px" maxlength="2" required /> - <input type="text" id="year" placeholder="Year" required size="7px" maxlength="4" /> </div> 
<div><br />Accept Terms & Conditions.<input type="checkbox" name="t&c" required ></div>
<div><br /><input type="submit" value="Submit"></div>



</div>
</form>


</div>
<div class="footer"> Created by : Mohd Oamr Aslam . All copy rights are reserved. 
 </div>

</body>
</html>