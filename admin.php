<!DOCTYPE HTML>
  <?php 
    header("Content-type:text/html;charset=utf-8");
	session_start(); 
  ?>
  <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style/newsp.css" />
      <link rel="Shortcut Icon" type="image/x-icon" href="pics/newsp.png" />
      <title>报刊订阅管理系统-管理员</title>
    </head>
    
    
    <body>
      <h1>报刊订阅管理系统-管理员</h1>
      <?php 
	      include 'header.php';
		  if(!isset($_SESSION['identity'])||$_SESSION['identity']!="admin"){
			  ?>
                  <script Language="JavaScript">
                     alert("未登录用户账号，不能进行相关操作！");
                     window.location.href="index.php"; 
				  </script>
			  <?php	
		  }
	  ?>
      
      <div class="center">管理员<?php echo $_SESSION['id'];?>,请继续选择相关操作！</div>
    </body>

  </html>