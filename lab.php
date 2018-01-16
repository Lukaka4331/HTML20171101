<?php
session_start();
?>
<?php if (isset($_SESSION['id'])) {
    include("mysql_connect.inc.php");
    $sql = "SELECT * FROM `user` where id = '$id'";
    $result = mysqli_query($link,$sql);
    $row = @mysqli_fetch_row($result);
}
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">

    <style>
        /* Set height of the grid so .sidenav
         can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }




        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to \'auto\' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <ul class="nav nav-pills nav-stacked">';
if (isset($_SESSION['id'])) {
    echo '<li ><a href = "logout.php" ><span class="glyphicon glyphicon-log-in"> Logout</span></a ></li >
<li ><a href = "member.php" ><span style="font-family: sans-serif;"> 控制台</span></a ></li >';
}else{
    echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Login</a></li>';
}
echo'
            
            
                <br>
                <img src="wzyang.jpg" class="img-circle" alt="Cinque Terre" width="120" height="150">
                <li><a href="index.php">首頁</a></li>
                <li><a href="teacherintroduce.php">簡歷</a></li>
                <li><a href="publications.php">刊物</a></li>
                <li><a href="courseMaterials.php">課程教材(Course materials)</a></li>
                <li><a href="miscellany.php">雜記(Miscellanies)</a></li>
                <li><a href="link.php">連結(Link)</a></li>
                <li class="active"><a href="lab.php">實驗室(Lab)</a></li>

            </ul><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
            </div>
        </div>

        <div class="col-sm-9  " align="center" style="font-family: \'Kalam\', cursive;height: 100%;background-color: #fe9aff" 　>
            <h1>Wei-Zu Yang 楊偉儒</h1>
            <h4><small>Assistant Professor of Department of Computer Science and Information Engineering,</small></h4>
            <h4><small>Asia University, WuFeng, Taichung, Taiwan.</small></h4>
            <p> Tel: +886-4-23323456-1843</p>
            <p>Email: wzyang@asia.edu.tw</p>



            <hr>
            <h1>指導學生:</h1>
            <h3><span >邱寶瑩 (惠聖公司)</span></h3>
            <h3><span > 耿履夷 (中華聯網寬頻)</span></h3>
            <h3><span >尤良昌 (彰化鹿港國小)</span></h3>
            <h3><span >陳泰良 (合勤)</span></h3>







        </div>
    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>
';?>