<?php
if($_POST["name"] == "root" && $_POST["pass"] == "1234"){
  $msg = "ログインしました<br>";
  //次回からのID入力を省略するにチェックがあったら、クッキーをセット
  if(isset($_POST["ck"]) == "on"){
    //有効期限1時間でクッキーをセット
    setcookie("name" , $_POST['name'] , mktime(0,0,0,1,5,2016));
    setcookie("pass" , $_POST['pass'] , mktime(0,0,0,1,5,2016));
	setcookie("ck"   , $_POST['ck']   , mktime(0,0,0,1,5,2016));
  }else{
	  setcookie("name" , "");
	  setcookie("pass" , "");
	  setcookie("ck"   , "");
	  }
} else{
  $msg = "ユーザー名またはパスワードが間違っています。<br>";
  setcookie("name", "");
  setcookie("pass", "");
}
?>
<html>
<head><title>会員ページ１</title></head>
<body>
<h1>会員ページ１</h1>
<hr>
<?php print $msg; ?>
<a href="cookie4_0.php">ログインページに戻る</a>
</body>
</html>
