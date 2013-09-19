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
	    //连接MYSQL数据库
	    $con = mysql_connect("localhost:3306","root","root");
		//判断连接是否成功
        if (!$con){
            die('Could not connect:'.mysql_error());
        }
        //选择将要用到的数据库
        mysql_select_db("newspaperbook", $con);
		//提取登陆界面的信息
		$bct= $_POST["bct"];
		$bmonth = $_POST["bmonth"];
		//取得订单表中的最大订单号
		$result_1 = mysql_query("SELECT MAX(BID) FROM booking");
		//取得可订阅数量
		$result_2 = mysql_query("SELECT NNUM FROM newspaper WHERE NID='$_SESSION[nid]'");
		//最大订单号+1
		$row_1 = mysql_fetch_array($result_1);
		$bid = $row_1["MAX(BID)"]+1;
		//可订阅份数减去订阅的数量
		$row_2 = mysql_fetch_array($result_2);
		$nnum = $row_2["NNUM"]-$bct;
		//报刊表中可订份数更新，订单表中插入心的订阅信息
		$result_3 = mysql_query("UPDATE newspaper SET NNUM='$nnum'");
		$result_4 = mysql_query("INSERT INTO booking VALUES('$bid','$_SESSION[id]','$_SESSION[nid]','$bct','$bmonth') ");
		if(mysql_affected_rows()==1){
			?>
              <script Language="JavaScript">
                    alert("订阅成功！");
                    window.location.href="user.php"; 
			  </script>
            <?php
		}else{
			?>
              <script Language="JavaScript">
                    alert("订阅失败！");
                    window.location.href="userNewsp.php"; 
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