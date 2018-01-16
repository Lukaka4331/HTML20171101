<?php
session_start();
?>
<?php if (isset($_SESSION['id'])) {
    include("mysql_connect.inc.php");
    $sql = "SELECT * FROM `user` where id = '$id'";
    $result = mysqli_query($link,$sql);
    $row = @mysqli_fetch_row($result);
}
echo '


<!DOCTYPE html>
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
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
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


        table {
            border-collapse: collapse;
            border-spacing: 0;
            /*width: 100%;*/

            margin: 30px;
            margin-top: 30px;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 30px;
            border: 10px solid #ff724f;
            font-size: 15px;

        }

        th, td {
            text-align: left;
            padding: 16px;
        }

        /*tr:nth-child(even) {*/
        /*background-color: #ff0000*/

        /*}*/
        /*tr:nth-child(Odd) {*/
        /*background-color: #3e8e41*/

        /*}*/




    </style>
</head>
<body>

<div class="container-fluid ">
    <div class="row content">
        <div class="col-sm-3 sidenav ">
            <!--<h4>Wei-Zu Yang\'s Blog</h4>-->
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
                <!--<img src="wzyang.jpg" class="img-thumbnail" alt="Cinque Terre" width="250" height="200">-->
                <li><a href="index.php">首頁</a></li>
                <li class="active"><a href="teacherintroduce.php">簡歷</a></li>
                <li><a href="publications.php">刊物</a></li>
                <li><a href="courseMaterials.php">課程教材(Course materials)</a></li>
                <li><a href="miscellany.php">雜記(Miscellanies)</a></li>
                <li><a href="link.php">連結(Link)</a></li>
                <li ><a href="lab.php">實驗室(Lab)</a></li>


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
            <p><a href="mailto:wzyang@asia.edu.tw">Email: wzyang@asia.edu.tw</a></p>

            <!--<h2> <span class="label label-primary">Education</span></h2>-->

            <hr>

            <div style="font-size: 20px">
            <h1>Welcome</h1>
            <h3>基本資料:</h3>
            <p>姓名：楊偉儒／Wei-Zu Yang</p>
            <p>任職單位：資訊工程學系 專案助理教授</p>
            <p>E-mail：wzyang@asia.edu.tw</p>

                <br>
                <h1>學歷</h1>
                <p>交通大學 -- 博士</p>
                <br>
                <h1>經歷</h1>
                <p>國立交通大學資訊工程 研究助理教授</p>



        </div>




        </div>
    </div>
</div>

<footer class="container-fluid">
    <p >Footer Text</p>
</footer>

</body>
</html>';
?>