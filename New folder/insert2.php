<!DOCTYPE html>
<head>
<title>insert data to db</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {
list-style: none;
}
</style>
</head>

<body>
<h2>insert to table electrocar</h2>
<ul>
<form name="insert" action="insert2.php" method="POST" >
<li>Car ID:</li><li><input type="text" name="car_id" /></li>
<li>Car brand:</li><li><input type="text" name="car_brand" /></li>
<li>Car model:</li><li><input type="text" name="car_model" /></li>
<li>Produced year:</li><li><input type="text" name="produced_year" /></li>
<li>Sell count:</li><li><input type="text" name="sell_count" /></li>
<li><input type="submit" /></li>
</form>
</ul>
</body>

</html>

<?php
//echo "$_POST[car_id]"
if (isset($_POST['car_id']) or isset($_POST['car_brand']) or isset($_POST['car_model']) or isset($_POST['produced_year']) or isset($_POST['sell_count']))
{
$db_connection = pg_connect("host=localhost dbname=sellcardb user=sellcaru password=q1");
$query = "insert into electrocar values ('$_POST[car_id]','$_POST[car_brand]','$_POST[car_model]','$_POST[produced_year]','$_POST[sell_count]')";
$result = pg_query($db_connection, $query); 
}
?>