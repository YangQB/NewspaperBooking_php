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
      <title>报刊订阅管理系统-查看报刊</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-查看报刊</h1>
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
			
			$result = mysql_query("SELECT NID,NNAME,NPS,NPD,NCT,NPR,NNUM,SNAME FROM newspaper,sort WHERE newspaper.SID=sort.SID ORDER BY NID");
			?>
              <table class="newsp">
                <tr class='newsp_1'>
                  <th>报刊编号</th>
                  <th>报刊名称</th>
                  <th>出版报社</th>
                  <th>出版周期</th>
                  <th>报刊价格</th>
                  <th>报刊简介</th>
                  <th>剩余数量</th>
                  <th>报刊类型</th>
                </tr>
            <?php
			$i = 1;
			while($row = mysql_fetch_array($result)){
				if($i%2==0){
				    echo "<tr class='newsp_1'>";
				}else{
					echo "<tr class='newsp_2'>";
				}
				echo "<td>".$row["NID"]."</td>";
				echo "<td>".$row["NNAME"]."</td>";
				echo "<td>".$row["NPS"]."</td>";
				echo "<td>".$row["NPD"]."</td>";
				echo "<td>".$row["NCT"]."</td>";
				echo "<td>".$row["NPR"]."</td>";
				echo "<td>".$row["NNUM"]."</td>";
				echo "<td>".$row["SNAME"]."</td>";
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
    </body>

  </html>