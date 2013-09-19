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
      <title>报刊订阅管理系统-修改密码</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-修改密码</h1>
      <?php 
	      include 'header.php';
		  if(!isset($_SESSION['identity'])||$_SESSION['identity']!="admin"){
			  ?>
                 <script Language="JavaScript">
                    alert("未登录管理员账号，不能进行相关操作！");
                    window.location.href="index.php"; 
				 </script>
			  <?php	
		  }else{
	  ?>
      
      <div>
      <form name="form_7" method="post" onsubmit="return checkinput(this);" action="adminCheckChangePass.php">
        <table>
          <tr>
            <td>请输入原密码：</td>
            <td><input type="password" name="apass" maxlength="20"/></td>
            <td class="spe_1">*请输入当前账号的密码</td>
          </tr>
          <tr>
            <td>请输入新密码：</td>
            <td><input type="password" name="apass_1" maxlength="20"/></td>
            <td class="spe_1">*请输入数字，字母，下划线组合(4-20位)</td>
          </tr>
          <tr>
            <td>请确认新密码：</td>
            <td><input type="password" name="apass_2" maxlength="20"/></td>
            <td class="spe_1">*请再次输入上框中输入的新密码</td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="确认修改" /></td>
            <td></td>
          </tr>
        </table> 
      </form>
      </div>
      <script type="text/javascript"> 
	  function checkinput(form_4)
      {  
	     if(form_7.apass.value==""||form_7.apass.value==null)
		 {
           alert("请输入原密码!");
           return false; 
		 }
	     if(!isN_L(form_7.apass_1.value))
         {
           alert("密码格式输入错误!");
           return false;
         }
         if(form_7.apass_1.value != form_7.apass_2.value)
         {
           alert("两次密码输入结果不一致，请重新输入!");
           return false;
         }
      }
      function isN_L(str){
         var reg = /^[a-zA-Z0-9_]{4,20}$/;
         return (reg.test(str));
      }
     </script>
     <?php }?>
    </body>

  </html>