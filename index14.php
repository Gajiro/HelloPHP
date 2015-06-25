<?php
$name = "";
if(isset($_POST['exe'])){
	$name = $_POST['username'];
	$name = "<p>{$name}さんですね。</p>\n";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>始めようphp</title>
</head>

<body>
    <h1>動的なWebページの作成</h1>
    <form method="post" action="">
        <label>名前<input type="text" name="username" required></label>
        <input type="submit" name="exe" value="実行">
    </form>
    <?php echo $name;?>
</body>
</html>