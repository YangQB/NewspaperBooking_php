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
      <title>报刊订阅管理系统-删除用户</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-删除用户</h1>
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
			
			$result = mysql_query("SELECT UID,UNAME,UIDNUM,UPHONE,UAD,DNAME FROM user,department WHERE user.DID=department.DID");
			?>
            <form name="form_8" method="post" onsubmit="return checkinput(this);" action="adminDeluser_2.php">
              <table class="newsp">
                <tr class='newsp_1'>
                  <th></th>
                  <th>用户编号</th>
                  <th>用户姓名</th>
                  <th>身份证号</th>
                  <th>联系电话</th>
                  <th>用户地址</th>
                  <th>所在部门</th>
                </tr>
            <?php
			$i = 1;
			while($row = mysql_fetch_array($result)){
				if($i%2==0){
				    echo "<tr class='newsp_1'>";
				}else{
					echo "<tr class='newsp_2'>";
				}
				echo "<td>"."<input type ='radio' name='choise' value=".$row['UID'].">"."</td>";
				echo "<td>".$row["UID"]."</td>";
				echo "<td>".$row["UNAME"]."</td>";
				echo "<td>".$row["UIDNUM"]."</td>";
				echo "<td>".$row["UPHONE"]."</td>";
				echo "<td>".$row["UAD"]."</td>";
				echo "<td>".$row["DNAME"]."</td>";
				echo "</tr>";
				$i++;
			}
			?>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><input type="submit" value="删除用户" /></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
            </table>  
          </form>
            <?php
			
		}
		  //断开连接
          mysql_close($con); 
		?>
    </body>

  </html>