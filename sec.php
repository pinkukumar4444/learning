<?php
function verify()
{


}
$cookie_name="login";
if(!isset($_COOKIE[$cookie_name])) {
    header('Location: index.php');  
}
echo "this is secure page"."<br />";
 
echo " <input type='submit' name='login' value='logout' placeholder='enter password' onclick='logout()' /> ";
function delete_user()
{


}

?>
<script>
function logout()
{ 
	var name="login";
	document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    window.location.href = "index.php";
}

</script>



