<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php
$Midasi = "#E1E1BC";
$Tuujou = "#E7E7E7";
$TextColor = "red";
 
$Aomori_P = 1407;
$Aomori_M = 663;
$Aomori_W = 744;
$Iwate_P = 1364;
$Iwate_M = 652;
$Iwate_W = 712;
$Akita_P = 1121;
$Akita_M = 527;
$Akita_W = 593;

?>

<table  border="1">
  <tr bgcolor=<?php echo $Midasi ?>>
    <th rowspan = "2">県名</th>
    <th rowspan = "2">総人口</th>
    <th rowspan = "2">男性人口</th>
    <th rowspan = "2">女性人口</th>
    <th colspan = "2">男女比</th>
  </tr>
  <tr bgcolor=<?php echo $Midasi ?>>
    <td>男性</td>
    <td>女性</td>
  </tr>
  <tr bgcolor=<?php echo $Tuujou ?>>
    <td>青森県</td>
    <td><?php echo $Aomori_P?></td>
    <td><?php echo $Aomori_M?></td>
    <td><?php echo $Aomori_W?></td>
    <td><?php printf ("%.1f" , ($Aomori_M/$Aomori_P)*100) ?>%</td>
    <td style="color:<?php echo $TextColor;?>"><?php printf ("%.1f" , ($Aomori_W/$Aomori_P)*100) ?>%</td>
  </tr>
  <tr bgcolor=<?php echo $Tuujou ?>>
    <td>岩手県</td>
    <td><?php echo $Iwate_P?></td>
    <td><?php echo $Iwate_M?></td>
    <td><?php echo $Iwate_W?></td>
    <td style="color:<?php echo $TextColor;?>"><?php printf ("%.1f" , ($Iwate_M/$Iwate_P)*100) ?>%</td>
    <td><?php printf ("%.1f" , ($Iwate_W/$Iwate_P)*100) ?>%</td>
  </tr>
  <tr bgcolor=<?php echo $Tuujou ?>>
    <td>秋田県</td>
    <td><?php echo $Akita_P?></td>
    <td><?php echo $Akita_M?></td>
    <td><?php echo $Akita_W?></td>
    <td><?php printf ("%.1f" , ($Akita_M/$Akita_P)*100) ?>%</td>
    <td style="color:<?php echo $TextColor;?>"><?php printf ("%.1f" , ($Akita_W/$Akita_P)*100) ?>%</td>
  </tr>
</table>






</body>
</html>