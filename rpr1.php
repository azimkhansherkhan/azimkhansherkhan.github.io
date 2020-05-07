<?php
$db_connection = pg_connect("host=localhost dbname=sellcardb user=sellcaru password=q1");
$result = pg_query($db_connection, "SELECT * FROM benzinovyi where marka='Toyota' and god_vypuska>2000");

$resultArr = pg_fetch_all($result);
//print_r($resultArr);

echo '<table>
        <tr>
         <td>Marka</td>
         <td>Model</td>
         <td>God vypuska</td>
         <td>Prodano</td>
        </tr>';

foreach($resultArr as $array)
{
    echo '<tr>
            <td>'. $array['marka'].'</td>
            <td>'. $array['model'].'</td>
	    <td>'. $array['god_vypuska'].'</td>
	    <td>'. $array['prodano'].'</td>
          </tr>';
}
echo '</table>';
?>	
