<?php
require_once "conDB.php";

$strSQL = "SELECT * FROM tb_member ODER BY user";
$obj = mysqli_query($link,$strSQL);
?>
<table>
    <thead>
    <tr>
        <td>NO.</td>
        <td>User</td>
        <td>Age</td>
        <td>Sex</td>
        <td>Fav</td>
        <td>Prov</td>
        <td></td>  
    </tr>
    </thead>
    <tbody>
        <?php
         while($row = mysqli_fetch_array($obj)){
        ?>
    <tr>
        <td>NO.</td>
        <td><?=$row['User']?></td>
        <td><?=$row[1]?></td>
        <td><?=$row['sex']?></td>
        <td><?=$row[3]?></td>
        <td><?=$row[4]?></td>
        <td><a href="del_member.php?user=<?=$row['User']?>"> ลบ </td>
    </tr>
    <?php
         }
    ?>
    </tbody>
</table>
