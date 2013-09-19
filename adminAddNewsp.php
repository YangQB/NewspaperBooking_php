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
		}else{?>
     
      <div>
      <form name="form_9" method="post" onsubmit="return checkinput(this);" action="adminAddNewsp_2.php">
        <table>
          <tr>
            <td>报刊编号：</td>
            <td><input type="text" name="nid" maxlength="4"/></td>
            <td class="spe_1"></td>
          </tr>
          <tr>
            <td>报刊名称：</td>
            <td><input type="text" name="nname" maxlength="20"/></td>
            <td class="spe_1"></td>
          </tr>
          <tr>
            <td>出版报社：</td>
            <td><input type="text" name="nps" maxlength="20"/></td>
            <td class="spe_1"></td>
          </tr>
          <tr>
            <td>出版周期：</td>
            <td><input type="text" name="npd" maxlength="4"/></td>
            <td class="spe_1"></td>
          </tr>
          <tr>
            <td>季度报价：</td>
            <td><input type="text" name="nct" maxlength="4"/></td>
            <td class="spe_1"></td>
          </tr>
          <tr>
            <td>报刊简介：</td>
            <td><input type="text" name="npr" maxlength="30"/></td>
            <td class="spe_1"></td>
          </tr>
          <tr>
            <td>可订份数：</td>
            <td><input type="text" name="nnum" maxlength="4"/></td>
            <td class="spe_1"></td>
          </tr>
          <tr>
            <td>所属分类：</td>
            <td class="spe_1"><select name="sid" >
                    <option value="01">时事新闻 </option>
                    <option value="02">经济理财 </option>
                    <option value="03">娱乐新闻 </option>
                    <option value="04">体育新闻 </option>
                    <option value="05">科普益智 </option>  
                    <option value="06">健康生活 </option>
                    <option value="07">国外新闻 </option>
                              
                 </select>
            </td>
            <td class="spe_1"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="确认添加" /></td>
            <td></td>
          </tr>
        </table> 
      </form>
    </div>
    
    <script type="text/javascript"> 
	  function checkinput(form_9)
      {
         if(form_9.nid.value==null||form_9.nid.value=="")
         {
           alert("报刊编号不能为空!");
           return false;
         }
         if(form_9.nname.value==null||form_9.nname.value=="")
         {
           alert("报刊名称不能为空!");
           return false;
         }
         if(form_9.nps.value==null||form_9.nps.value=="")
         {
           alert("出版报社不能为空!");
           return false;
         }
         if(form_9.npd.value==null||form_9.npd.value=="")
         {
           alert("出版周期不能为空!");
           return false;
         }
         if(form_9.nct.value==null||form_9.nct.value=="")
         {
           alert("季度报价不能为空!");
           return false;
         }
         if(form_9.npr.value==null||form_9.npr.value=="")
         {
           alert("报刊简介不能为空!");
           return false;
         }
         if(form_9.nnum.value==null||form_9.nnum.value=="")
         {
           alert("可订份数不能为空!");
           return false;
         }
      }
     </script>
     <?php }?>
    </body>

  </html>