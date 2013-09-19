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
      <title>报刊订阅管理系统-修改信息</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-修改信息</h1>
      <?php 
	      include 'header.php';
		  if(!isset($_SESSION['identity'])||$_SESSION['identity']!="user"){
			  ?>
                 <script Language="JavaScript">
                    alert("未登录用户账号，不能进行相关操作！");
                    window.location.href="index.php"; 
				 </script>
			  <?php	
		  }else{
	  ?>
      
      <div>
      <form name="form_2" method="post" onsubmit="return checkinput(this);" action="userCheckChangeInfo.php">
        <table>
          <tr>
            <td>用户账号：</td>
            <td><input type="text" name="uid" maxlength="20"/></td>
            <td class="spe_1">*请输入数字，字母，下划线组合(4-20位)</td>
          </tr>
          <tr>
            <td>用户姓名：</td>
            <td><input type="text" name="uname" maxlength="8"/></td>
            <td class="spe_1">*请输入姓名(2-4位)</td>
          </tr>
          <tr>
            <td>身份证号：</td>
            <td><input type="text" name="uidnum" maxlength="18"/></td>
            <td class="spe_1">*请输入身份证号(18位)</td>
          </tr>
          <tr>
            <td>用户电话：</td>
            <td><input type="text" name="uphone" maxlength="16"/></td>
            <td class="spe_1">*请输入的数字组合(7-16位)</td>
          </tr>
          <tr>
            <td>用户地址：</td>
            <td><input type="text" name="uad" maxlength="30"/></td>
            <td class="spe_1">*请输入汉字，数字，字母，下划线组合(30位以内)</td>
          </tr>
          <tr>
            <td>所在部门：</td>
            <td class="spe_1"><select name="did" >
                    <option value="KF001">开发一部 </option>                 
                    <option value="KF002">开发二部 </option>
                    <option value="KF003">开发三部 </option>
                    <option value="KF004">开发四部 </option>
                    <option value="KF005">开发五部 </option>  
                    <option value="KF006">开发六部 </option>                 
                    <option value="XQ101">需求一部 </option>
                    <option value="XQ102">需求二部 </option>
                    <option value="XQ103">需求三部 </option>
                    <option value="SJ201">设计一部 </option> 
                    <option value="SJ202">设计二部 </option>                 
                    <option value="SJ203">设计三部 </option>
                    <option value="SJ204">设计四部 </option>
                    <option value="CS301">测试一部 </option>
                    <option value="CS302">测试二部 </option>
                    <option value="CS303">测试三部 </option>
                    <option value="CS304">测试四部 </option>
                    <option value="BG401">版本管理一部 </option>
                    <option value="BG402">版本管理二部 </option>
                    <option value="YW501">运维一部 </option> 
                    <option value="YW502">运维二部 </option>
                    <option value="YW503">运维三部 </option>
                    <option value="YW504">运维四部 </option>
                    <option value="YW505">运维五部 </option>
                    <option value="YW506">运维六部 </option>           
                 </select>
            </td>
            <td class="spe_1">*请从下拉列表中选择部门</td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="确认修改" /></td>
            <td class="spe_1">*不作修改的项不用填入</td>
          </tr>
        </table> 
      </form>
      </div>
      <?php } ?>
    </body>

  </html>