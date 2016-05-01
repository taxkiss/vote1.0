<?php
session_start();
    $vote_elector_id=$_REQUEST['vote_elector_id'];
    $vote_address_id=$_REQUEST['vote_address_id'];
    $vote_month=$_REQUEST['vote_month'];
    
    $link=mysqli_connect("localhost", "root", "root", "vote") or die("数据库连接失败！");
    $sql="insert into vote values('$vote_elector_id','$vote_month','$vote_address_id')";
    mysqli_query($link, $sql);
?>

<html><head><title>2016年总统竞选</title></head>
<body>
    <h1>2016年度美国总统选举概况</h1>
    <?php
    $sql2="select count(*) from vote where vote_elector_id=1601 group by vote_month with rollup";
    $result1=mysqli_query($link, $sql2);
    $arr1=array();
    while ($row1=mysqli_fetch_row($result1)){
        $arr1[]=(int)$row1[0];
    }
/*     echo "<pre>";
    var_dump($arr1);
    echo "<hr/>"; */
    $sql3="select count(*) from vote where vote_elector_id=1602 group by vote_month with rollup";
    $result2=mysqli_query($link, $sql3);
    $arr2=array();
    while ($row2=mysqli_fetch_row($result2)){
        $arr2[]=(int)$row2[0];
    }
/*     echo "<pre>";
    var_dump($arr2); */
    
   // $arr1=intval($arr1);
   // $arr2=intval($arr2);
    $_SESSION["datay1"]=$arr1;
    $_SESSION['datay2']=$arr2;
    
    echo "<pre>";
    var_dump($_SESSION['datay2']);
    header("Location:showlist.php")
    ?>
</body>
</html>