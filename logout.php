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
      <title>报刊订阅管理系统-退出</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-退出</h1>
      <?php 
	    include 'header.php';
		if(isset($_SESSION['id'])){
	      session_unset($_SESSION['id']);
		    ?>
              <script Language="JavaScript">
                  alert("退出成功！");
                  window.location.href="index.php"; 
		      </script>
		  <?php
		}else{
			?>
            <script Language="JavaScript">
                alert("未登录系，统无需退出！");
                window.location.href="index.php"; 
		    </script>
		  <?php
		}
	  ?>
    </body>
  </html>