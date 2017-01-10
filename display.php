<?php
$table_name = $_GET['av'];
echo "Table name -".$table_name;
define('MYSQL_SERVER', 'localhost');
define('MYSQL_DATABASE_NAME', 'task1');
define('MYSQL_USERNAME', 'root');
define('MYSQL_PASSWORD', 'password');
$pdo = new PDO(
        'mysql:host=' . MYSQL_SERVER . ';dbname=' . MYSQL_DATABASE_NAME, 
        MYSQL_USERNAME, 
        MYSQL_PASSWORD
);
$statement = $pdo->query('DESCRIBE ' . $table_name);
 
//Fetch our result.
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
echo "<table style='width:100%'>
  <tr>
    <th>Field</th>
    <th>Type</th> 
    <th>Null</th>
    <th>Default</th>
  </tr>";
foreach($result as $column){
	echo "<tr>
    <td>$column[Field] </td>
    <td>$column[Type] </td>
    <td>$column[Null] </td>
    <td>Null </td>
    </tr>";
}
echo "</table>";
function hero()
{

}
function add()
{
}
?>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
