<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:58
 */

session_start();
?>
<!-- 設定網頁編碼為UTF-8 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="connect.php">
    帳號：<input type="text" name="id" /> <br>
    密碼：<input type="password" name="pw" /> <br>
    <input type="submit" name="button" value="登入" />&nbsp;&nbsp;
    <a href="register.php">申請帳號</a>
</form>
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

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {

                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }

        /*.bgimg{*/
        /*min-height: 100%;*/
        /*background-position: center;*/
        /*background-size: cover;*/
        /*background-image: url("teddy.jpg")*/

        /*}*/





    </style>
</head>
<body>

<div class="container-fluid ">
    <div class="row content">
        <div class="col-sm-3 sidenav ">
            <!--<h4>Wei-Zu Yang's Blog</h4>-->
            <ul class="nav nav-pills nav-stacked">

                <hr>
                <img src="wzyang.jpg" class="img-circle" alt="Cinque Terre" width="120" height="150">
                <!--<img src="wzyang.jpg" class="img-thumbnail" alt="Cinque Terre" width="250" height="200">-->
                <li class="active"><a href="index.html">首頁</a></li>
                <li><a href="#section2">簡歷</a></li>
                <li><a href="#section3">學術</a></li>
                <li><a href="publications.html">刊物</a></li>
                <li><a href="courseMaterials.html">課程教材(Course materials)</a></li>
                <li><a href="#section6">雜記(Miscellanies)</a></li>
                <li><a href="#section7">連結(Link)</a></li>
                <li ><a href="lab.html">實驗室(Lab)</a></li>


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

        <div class="col-sm-9  " align="center" style="font-family: 'Kalam', cursive;">


            <h1>Wei-Zu Yang 楊偉儒</h1>
            <h4><small>Assistant Professor of Department of Computer Science and Information Engineering,</small></h4>
            <h4><small>Asia University, WuFeng, Taichung, Taiwan.</small></h4>
            <p> Tel: +886-4-23323456-1843</p>
            <p>Email: wzyang@asia.edu.tw</p>

            <!--<h2> <span class="label label-primary">Education</span></h2>-->

            <hr>
            <table class="table table-striped" >
                <tr>
                    <th style="background-color:#ff0000;"> Education</th>
                    <th style="background-color:#a2a2a2;"> BS~Ph. D.: CSIE in National Chiao-Tung University</th>

                </tr>


                <tr>
                    <th style="background-color:#ff6400;"> Research Interest:</th>
                    <th style="background-color:#a2a2a2;"> Performance of PCS networks, VoIP, High speed network</th>

                </tr>


                <tr>
                    <th style="background-color:#ffff00;"> Entertainment:</th>
                    <th style="background-color:#a2a2a2;"> (table) tennis, badminton,
                        basketball, swimming,
                        mountain climbing
                        chess, games.</th>
                </tr>

            </table>

            <hr>

            <table class="table table-bordered">

                <tr>

                    <th style="background-color:#00ff00;">Others:</th>
                </tr>

                <tr>

                    <th style="background-color:#00BFFF;">6th 龍騰論文優等獎，NCS 2001 最佳論文, Mobile Computing Workshop 2004 Excellent Paper Award。</th>

                </tr>

                <tr>

                    <th style="background-color:#a2a2a2;">指導學生參加”第六屆工程科技與中西醫學應用會議”論文競試，獲得佳作. Sep., 2003.</th>

                </tr>

                <tr>

                    <th style="background-color:#00BFFF;">教育部通訊課程改進計畫無線網路組種子教師.</th>

                </tr>

                <tr>

                    <th style="background-color:#a2a2a2;">92 年優良教師</th>

                </tr>

                <tr>

                    <th style="background-color:#00BFFF;">93 年優良教師</th>

                </tr>


            </table>





        </div>
    </div>
</div>

<footer class="container-fluid">
    <p >Footer Text</p>
</footer>

</body>
</html>
