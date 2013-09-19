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
      <title>报刊订阅管理系统-订阅报刊</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-订阅报刊</h1>
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
      <?php
	  
		//取页面传来的值
		$_SESSION['nid']=$_POST["choise"];
	    //连接MYSQL数据库
	    $con = mysql_connect("localhost:3306","root","root");
		//判断连接是否成功
        if (!$con){
            die('Could not connect:'.mysql_error());
        }
		//解决中文乱码
		mysql_query("set names UTF8");
        //选择将要用到的数据库
        mysql_select_db("newspaperbook", $con);
		//取得需要用到的报刊信息
		$result = mysql_query("SELECT NNAME,NNUM FROM newspaper WHERE NID='$_SESSION[nid]'");
		$row = mysql_fetch_array($result);
		?>
        <form name="form_6" method="post" onsubmit="return checkinput(this);" action="userNewspBook_2.php">
          <table>
            <tr>
              <th>用户账号</th>
              <td><?php echo $_SESSION["id"]; ?></td>
            </tr>
            <tr>
              <th>报刊编号</th>
              <td><?php echo $_SESSION["nid"]; ?></td>
            </tr>
            <tr>
              <th>报刊名称</th>
              <td><?php echo $row["NNAME"]; ?></td>
            </tr>
            <tr>
              <th>可订份数</th>
              <td><?php echo $row["NNUM"]; ?></td>
            </tr>
            <tr>
              <th>订阅份数</th>
              <td><input type="text" name="bct" /></td>
            </tr>
            <tr>
              <th>订阅月数</th>
              <td><input type="text" name="bmonth" /></td>
            </tr>
            <tr>
              <th></th>
              <td><input type="submit" name="submit" value="确认订阅" /></td>
            </tr>
          </table>
        </form>
        <?php
		
        //断开连接
        mysql_close($con);
	  }
	  ?>
      </div>
    <script language="javascript">
	  function checkinput(form_6)
      {
		  if(form_6.nnum.value><?php echo $row["NNUM"]; ?>){
			  alert("订阅的份数不能超过报刊的可订份数");
			  return false;
		  }
		  if(form_6.bct.value==null||form_6.bct.value==""){
			  alert("请输入订阅份数");
			  return false;
		  }
		  if(form_6.bmonth.value==null||form_6.bmonth.value==""){
			  alert("请输入订阅月数");
			  return false;
		  }
	  }
	</script>
    </body>
  </html>