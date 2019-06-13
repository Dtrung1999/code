<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$conn = mysqli_connect('localhost', 'root', ''); 
	if(!$conn) {
  die("Kết nối không thành công:".mysqli_connect_error());
}else{
  echo "";
};
	mysqli_select_db($conn,'account');
?>
</body>
</html>