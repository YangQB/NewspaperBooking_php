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
      <title>报刊订阅管理系统-订阅信息</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-订阅信息</h1>
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
			
			$result = mysql_query("SELECT BID,booking.NID,NNAME,BCT,BMONTH FROM newspaper,booking WHERE newspaper.NID=booking.NID AND UID='$_SESSION[id]'");
			?>
              <table class="newsp">
                <tr class='newsp_1'>
                  <th>订单编号</th>
                  <th>报刊编号</th>
                  <th>报刊名称</th>
                  <th>订阅份数</th>
                  <th>订阅月数</th>
                </tr>
            <?php
			$i = 1;
			while($row = mysql_fetch_array($result)){
				if($i%2==0){
				    echo "<tr class='newsp_1'>";
				}else{
					echo "<tr class='newsp_2'>";
				}
				echo "<td>".$row["BID"]."</td>";
				echo "<td>".$row["NID"]."</td>";
				echo "<td>".$row["NNAME"]."</td>";
				echo "<td>".$row["BCT"]."</td>";
				echo "<td>".$row["BMONTH"]."</td>";
				echo "</tr>";
				$i++;
			}
			?>
            </table>
            <?php
			
		}
		  //断开连接
          mysql_close($con); 
		?>
        <script language="javascript">
		  function fun_1(){
			  window.location.href="userChangeInfo.php";
		  }
	      function checkinput(form_6){
		    if(form_5.nmonth.value==null||form_6.nmonth.value==""){
			  alert("请输入订阅月数");
			  return false;
		    }
		  }
		</script>
    </body>

  </html>