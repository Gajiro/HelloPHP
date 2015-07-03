<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<table width="200" border="1">
  <tr>
    <th scope="col">名前</th>
    <th scope="col">最終アクセス時刻</th>
    <th scope="col">最終修正時刻</th>
    <th scope="col">作成時刻</th>
    <th scope="col">サイズ</th>
  </tr>
  
  
<?php
 
$status = stat(opendir("."));

foreach($status as $val);
	print "<tr>";
	print "<td>" . $val . "</td>";
	print "</tr>";
  
?>  
</table>


</body>
</html>