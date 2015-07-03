<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>
<body>
<table border="1">
  <tr bgcolor="yellow">
    <th scope="col">名前</th>
    <th scope="col">最終アクセス時刻</th>
    <th scope="col">最終修正時刻</th>
    <th scope="col">作成時刻</th>
    <th scope="col">サイズ</th>
  </tr>
  
  
<?php
$curdir = opendir("."); //ディレクトリ情報にアクセス
while($name = readdir($curdir)){ //ディレクトリ名・ファイル名を１つ読み込み
  $status = stat($name);
  //print_r($status);
  $lastAccess = date("Y/m/d H:m:s" , $status["atime"]);
  $lastChange = date("Y/m/d H:m:s" , $status["mtime"]);
  $createTime = date("Y/m/d H:m:s" , $status["ctime"]);
  $size = $status["size"];
  /*
  $isd = is_dir($name) ? "Directory" : "File";
  $isw = is_writeable($name) ? "○" : "×";
  $isr = is_readable($name) ? "○" : "×";
  */
  //読み込んだ名前を表示
  print "<tr><td>$name</td><td>$lastAccess</td><td>$lastChange</td><td>$createTime</td><td>$size</td></tr>"; 
}
closedir($curdir);
?>
</table>
</body>



</html>