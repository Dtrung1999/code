<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php 
session_start();
if (!isset($_SESSION['username'])) { header('Location: access.php'); }
?>
<title>Trang chủ</title>
<style>
a{border:none;text-decoration:none}
#total{width:1280px; height:1000px;margin:auto;background-color:#9F0}
#head{width:1280px; height:30px; float:left; background-color:#F00}
#head a{padding-left:15px;}
#mid{width:1080px;float:left;background-color:#0F0;margin-top:30px}
#right_mid{width:200px;background-color:#000;float:left;margin-top:30px}	
#clr{clear:both}
</style>
</head>
<body bgcolor="#CCCCCC" >
	<div id="total">
    	<div id="head">
        	<a href="index.php">Trang chủ</a>
            <a href="register.php">Đăng kí</a>
            <a href="access.php">Đăng nhập</a>
            <a href="#">Chủ đề</a>
			<a href="#">BXH</a>
            <a href="#">Video</a>
        </div>
        <div id="clr"></div>
        <div id="mid">
        <table border="1">
        	<tr>
            	<td>
                	<a href="" style="font-size:24px">Nghe nhiều ></a>
                </td>
            </tr>
            <tr>
            	<td>
                	<a href="">Bài hát 1 </a>
                </td>
                <td>
                		
                </td>
            </tr>
            <tr>
            	<td>
                	<a href="">Bài hát 2</a>
                </td>
            </tr>
            <tr>
            	<td>
            		<a href="">Bài hát 3</a>
            	</td>
            </tr>
            
        </table>
        </div>
        <div id="right_mid">
        	
        </div>
    </div>
</body>
</html>
