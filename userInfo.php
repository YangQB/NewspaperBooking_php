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
      <title>报刊订阅管理系统-用户信息</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-用户信息</h1>
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
			
			$result = mysql_query("SELECT UID,UNAME,UIDNUM,UPHONE,UAD,DNAME FROM user,department WHERE UID='$_SESSION[id]' AND user.DID=department.DID");
			
			
			if(mysql_num_rows($result)>0){
				$row = mysql_fetch_array($result);
	            ?>
                <table>
                  <tr>
                    <td>用户账号：</td>
                    <td><?php echo $row['UID'];?></td>
                  </tr>
                  <tr>
                    <td>用户姓名：</td>
                    <td><?php echo $row['UNAME'];?></td>
                  </tr>
                  <tr>
                    <td>身份证号：</td>
                    <td><?php echo $row['UIDNUM'];?></td>
                  </tr>
                  <tr>
                    <td>联系电话：</td>
                    <td><?php echo $row['UPHONE'];?></td>
                  </tr>
                  <tr>
                    <td>用户地址：</td>
                    <td><?php echo $row['UAD'];?></td>
                  </tr>
                  <tr>
                    <td>所在部门：</td>
                    <td><?php echo $row['DNAME'];?></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <input type="submit" value="修改信息" onClick="fun_1();"></input> 
                    </td>
                  </tr>
                </table>
                <?php 
			}else{
				?>
                  <script Language="JavaScript">
                    alert("出错，找不到查询结果！");
                    window.location.href="user.php"; 
				  </script>
			    <?php
			}
			?>
        <?php 
		}
		  //断开连接
          mysql_close($con); 
		?>
        <script language="javascript">
		  function fun_1(){
			  window.location.href="userChangeInfo.php";
		  }
		</script>
    </body>

  </html>