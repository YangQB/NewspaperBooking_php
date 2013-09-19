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
      <title>报刊订阅管理系统-添加报刊</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-添加报刊</h1>
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
      <?php
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
		//提取登陆界面的信息
		$nid   = $_POST["nid"]  ;
		$nname = $_POST["nname"];
		$nps   = $_POST["nps"]  ;
		$npd   = $_POST["npd"]  ;
		$nct   = $_POST["nct"]  ;
		$npr   = $_POST["npr"]  ;
		$nnum  = $_POST["nnum"] ;
		$sid   = $_POST["sid"]  ;
		//查看报刊表中是否有将要添加的报刊编号或报刊名称
		$result_1 = mysql_query("SELECT * FROM newspaper WHERE NID='$nid'");
		$result_2 = mysql_query("SELECT * FROM newspaper WHERE NNAME='$nname'");
		//若有该报刊号或报刊名称，添加失败
		if(mysql_num_rows($result_1)>0||mysql_num_rows($result_2)>0){
			?>
              <script Language="JavaScript">
                    alert("已存在将要添加的报刊编号或报刊名称，请重新添加！");
                    window.location.href="adminAddNewsp.php"; 
			  </script>
            <?php
		}else{
			//报刊表中添加入新的元组
			$result_3 = mysql_query("INSERT INTO newspaper(NID,NNAME,NPS,NPD,NCT,NPR,NNUM,SID,AID) VALUES('$nid','$nname','$nps','$npd','$nct','$npr','$nnum','$sid','admin_2')"); 
			
			
			if(mysql_affected_rows()>0){
				?>
                    <script Language="JavaScript">
                        alert("添加成功！");
                        window.location.href="admin.php"; 
			        </script>
                <?php
			}else{
				?>
                    <script Language="JavaScript">
                        alert("添加失败！");
                        window.location.href="adminAddNewsp.php"; 
			        </script>
                <?php
			}
		}
        //断开连接
        mysql_close($con);
	  }
	  ?>
      </div>
    </body>
  </html>