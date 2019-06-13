<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
 
    
    if (!isset($_POST['txtUsername'])){
        die('');
    }
     
    
    include('conn_acc.php');
          
    
    header('Content-Type: text/html; charset=UTF-8');
          
    
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
          
    
    if (!$username || !$password )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        
        $password = md5($password);
          
    
    @$addmember = mysqli_query($conn,"
        INSERT INTO acc (
            Username,
            Password
        )
        VALUE (
            '{$username}',
            '{$password}'
        )
    ");
                          
    
    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='index.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
?>
</body>
</html>
