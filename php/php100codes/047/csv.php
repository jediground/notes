<?php
/*
 * php100-47视频教程,输出csv、excel文件
 */
 header("Content-type:application/vnd.ms-excel");
 header("Content-Disposition:filename=php100.xls");

?>
<table width="200" border="1">
  <tr>
    <td colspan="3"><font color=red>学员统计</font></td>
  </tr>
  <tr>
    <td>编号</td>
    <td>姓名</td>
    <td>年龄</td>
  </tr>
  <tr>
    <td>1</td>
    <td>张三</td>
    <td>28</td>
  </tr>
  <tr>
    <td>2</td>
    <td>李四</td>
    <td>23</td>
  </tr>
   <tr>
    <td>=A3+A4</td>
    <td></td>
    <td>=SUM(C3:C4)</td>
  </tr>
</table>

