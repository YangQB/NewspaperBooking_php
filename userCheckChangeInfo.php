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
      <?php
	  
		//取页面传来的值
		$uid    = $_POST["uid"]   ;
		$uname  = $_POST["uname"] ;
		$uidnum = $_POST["uidnum"];
		$uphone = $_POST["uphone"];
		$uad    = $_POST["uad"]   ;
		$did    = $_POST["did"]   ;
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
		//提取现有账号信息
		$result_1 = mysql_query("SELECT UID,UNAME,UIDNUM,UPHONE,UAD,DID FROM user WHERE UID='$_SESSION[id]'");
		//操作结果
		$row = mysql_fetch_array($result_1);
		//根据页面输入的信息确定将要修改的项
		if($uid    == null) $uid    = $row["UID"];
		if($uname  == null) $uname  = $row["UNAME"];
		if($uidnum == null) $uidnum = $row["UIDNUM"];
		if($uphone == null) $uphone = $row["UPHONE"];
		if($uad    == null) $uad    = $row["UAD"];
		if($did    == null) $did    = $row["DID"];
		
		//修改操作
		$result_2 = mysql_query("UPDATE user SET UID='$uid',UNAME='$uname',UIDNUM='$uidnum',UPHONE='$uphone',UAD='$uad',DID='$did' WHERE UID='$_SESSION[id]'");
		if(mysql_affected_rows()>0)
		{
			$_SESSION['id']=$uid;
			?>
                  <script Language="JavaScript">
                    alert("修改成功！");
                    window.location.href="userInfo.php"; 
				  </script>
			<?php
		}else{
		  ?>
                  <script Language="JavaScript">
                    alert("修改失败！");
                    window.location.href="userInfo.php"; 
				  </script>
	      <?php
		}
        //断开连接
        mysql_close($con);
	  }
	  ?>
      </div>
    </body>
  </html>