<?php
echo "<p align='right'>";
echo "<img src='gae1.jpg' width='200' height='100' alt='appengine'/>";
echo ' <br>Welcome <b>'.$_GET['uname'].'</b>';
echo '</p>';
echo '<table width="50%" align="center">';
echo '<tr> <td> Name </td> <td>'. $_GET['uname'].'</td></tr>';
echo '<tr> <td> Password </td> <td>'. $_GET['pwd'].'</td></tr>';
echo '<tr> <td> Register Number </td> <td>'. $_GET['rno'].'</td></tr>';
echo '<tr> <td> EMail id </td> <td>'. $_GET['mid'].'</td></tr>';
echo '<tr> <td> Mobile </td> <td>'. $_GET['mobile'].'</td></tr>';
echo '<tr> <td> Branch </td> <td>'. $_GET['dept'].'</td></tr>';
echo '<tr> <td> College </td> <td>'. $_GET['clg'].'</td></tr>';
echo '</table>';
?>