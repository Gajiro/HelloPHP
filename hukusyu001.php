<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>カレンダー</title>
<head>
<style type="text/css">
th{
  height:10px;  width:70px;  background:#aaaaaa;
}
td{
  font-size:15px;  height:50px;  width:70px;
}
td.today{
  font-size:25px;  font-weight:bold;  background:#ffff00;
}
</style>
</head>
<body>


<?php

$dt = getdate(); 
$fm = mktime(0, 0, 0, $dt["mon"], 1 ,$dt["year"]); 
$fw = date("w", $fm);
$ld = date("t", $fm); 
$em = mktime(0, 0, 0, $dt["mon"], $ld ,$dt["year"]); 
$ew = date("w", $em); 
$wd = array("?", "?", "?", "?", "?", "?", "?"); 
print "<h1>".$dt["month"].",".$dt["year"]."</h1>";
print "<table border='2'>";
print "<tr>";
foreach($wd as $value){
  print "<th>".$value."</th>"; 
}
print "</tr>";
print "<tr>";
for($i=0; $i<$fw; $i++){
  print "<td>&nbsp;</td>";
}
for($j=1; $j<=$ld; $j++){
  if($j == $dt["mday"]){
    print "<td class='today'>".$j."</td>"; 
  } else{
    print "<td>".$j."</td>";
  }  
}
  if(($i+$j)%7 == 0){ 
    print "</tr><tr>";
  }
for($k=0; $k<6-$ew; $k++){
  print "<td>&nbsp;</td>"; 
}
print "</tr>";
print "</table>";
?>
</body>
</html>