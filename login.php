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
      <title>报刊订阅管理系统-登录</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-登录</h1>
      <?php include 'header.php';
	    if(isset($_SESSION['id'])){
		    ?>
              <script Language="JavaScript">
                  alert("已有账号登录，若需登录其他账号，请先退出系统后再登录！");
				  <?php 
				    if($_SESSION['identity']=="user"){
				        ?>
                          window.location.href="user.php";
				        <?php 
					}else{
				        ?>
                          window.location.href="admin.php";
				        <?php 
					}
				  ?>
			  </script>
			<?php  
			        
		}
	  ?>
      
      <form name="form_1" method="post" onsubmit="return checkinput(this);" action="CheckLogin.php">
          <table>
            <tr>
              <td>用户账号：</td>
              <td><input type="text" name="id" /></td>
            </tr>
            <tr>
              <td>用户密码：</td>
              <td><input type="password" name="pass" /></td>
            </tr>
            <tr>
              <td>用户身份：</td>
              <td>
                <input type="radio" name="identity" value="user" checked="checked" /> 用户
                <input type="radio" name="identity" value="admin" /> 管理员
              </td>
            </tr>
            <tr>
              <td></td>
	          <td>
	            <input type="submit" name="submit" value="登录" />
	            &nbsp;&nbsp;&nbsp;&nbsp;
	            <input type="reset" name="reset" value="重置" />
	          </td>
	      </table>
	  </form>
      <script type="text/javascript"> 
	  function checkinput(form_1)
      {
         if(form_1.id.value=="")
		 {
           alert("请输入用户账号!");
           return false;
         }
         if(form_1.pass.value=="")
		 {
           alert("请输入密码!");
           return false;
         }
      }
     </script>
    </body>

  </html>