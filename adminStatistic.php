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
      <title>报刊订阅管理系统-统计信息</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-统计信息</h1>
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
			
			$result_1 = mysql_query("SELECT 部门名称,订阅总数 FROM ST_DEP");
			$result_2 = mysql_query("SELECT 报刊类别,订阅总数 FROM ST_SORT");
			?>
              <h2>部门订阅统计</h2>
              <table class="newsp">
                <tr class='newsp_1'>
                  <th>部门名称</th>
                  <th>订阅总数</th>
                </tr>
            <?php
			$i = 1;
			while($row = mysql_fetch_array($result_1)){
				if($i%2==0){
				    echo "<tr class='newsp_1'>";
				}else{
					echo "<tr class='newsp_2'>";
				}
				echo "<td>".$row["部门名称"]."</td>";
				echo "<td>".$row["订阅总数"]."</td>";
				echo "</tr>";
				$i++;
			}
			?>
            </table>
            <br/>
             <h2>报刊类别订阅统计</h2>
              <table class="newsp">
                <tr class='newsp_1'>
                  <th>报刊类别</th>
                  <th>订阅总数</th>
                </tr>
            <?php
			$i = 1;
			while($row = mysql_fetch_array($result_2)){
				if($i%2==0){
				    echo "<tr class='newsp_1'>";
				}else{
					echo "<tr class='newsp_2'>";
				}
				echo "<td>".$row["报刊类别"]."</td>";
				echo "<td>".$row["订阅总数"]."</td>";
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