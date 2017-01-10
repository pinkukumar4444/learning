
<?php
$dbname = 'task1';
$i=0;
$table_name=array();
if (!mysql_connect('localhost', 'root', 'password')) {
    echo 'Could not connect to mysql';
    exit;
}

$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_row($result)) {
   $table_name[$i]= $row[0];
   $i++;
}

mysql_free_result($result);
echo "Table:<select id='a1' onChange='show()'>";
for($j=0;$j<$i;$j++)
{
 echo  "<option value=$table_name[$j]>$table_name[$j]</option>";	
}
echo "</select>";
echo "<div id='b1'>


</div>";


?>
<script type="text/javascript">
	function show()
	{
     	var av = document.getElementById("a1").value;


	try
	{
        ajaxRequest=new XMLHttpRequest();
    }
	
	catch(e)
	{
        try
		{
            ajaxRequest=new ActiveXObject("Msxml2.XMLHTTP");
        }
		
		catch(e)
		{
            try
			{
                ajaxRequest=new ActiveXObject("Microsoft.XMLHTTP");
            }
			
			catch(e)
			{
                alert("Your browser broke!");
                return false;
            }
        }
    }
	
	ajaxRequest.onreadystatechange=function()
	{
        if(ajaxRequest.readyState==4)
		{
            var ajaxDisplay=document.getElementById('b1');
            ajaxDisplay.innerHTML=ajaxRequest.responseText;
			b1.style.display="block";
        }
    }
	
    var queryString="?av="+av;
    ajaxRequest.open("GET","display.php"+queryString,true);
    ajaxRequest.send(null);
      




	}
</script>
<style>
#b1
{
	position: absolute;
	background-color:  	#A9A9A9;
	top: 70px;
	width: auto;
	height: auto;
	left: 50px
	


</style>