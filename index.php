<?php
function addmem()
{



}
echo " <form action='check.php' method='post'> " ;
echo "username:<input type='text' name='user' id='a1' placeholder='enter user name' /> "."<br />";   
echo "password:<input type='password' name='pass' id='a2' placeholder='enter password' /> "."<br />"; 
echo "<input type='submit' name='login' value='login' placeholder='enter password' onclick='return check()'/>" ;
echo "</form>";
function add()
{

//add header 
}
?>
<script>
function check()
{
	var user = document.getElementById("a1").value;
	var pass= document.getElementById("a2").value;
	if(user==""||pass=="")
	{
		alert("please fill all field");
		return false
	}
	else
	{
		return true;
	}
}





</script>
