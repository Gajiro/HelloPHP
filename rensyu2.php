<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php
$mile = 1.6;
$Aom_Tok = 715/$mile;
$Aom_Mor = 180/$mile;
$Aom_Sen = 350/$mile;

print "東京{$Aom_Tok}マイル\n";
print "<br>\n";
print "盛岡{$Aom_Mor}マイル\n";
print "<br>\n";
print "仙台{$Aom_Sen}マイル\n";


define ("MILE" , 1.6);

$toTokyo = 715;   //km
$ToMorioka = 180; //km
$ToSendai = 350;  //km

print "東京" . ($toTokyo/MILE) . "マイル";
print "盛岡" . ($ToMorioka/MILE) . "マイル";
print "仙台" . ($ToSendai/MILE) . "マイル";

?>
</body>
</html>