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

        * {
            box-sizing: border-box;
        }



        #myTable {
            /*border-collapse: collapse;*/
            /*width: 100%;*/
            border: 10px solid #ff724f;
            background-color: #ffffff;

            font-size: 20px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

         #myTable tr:hover {
            background-color: #f1f1f1;
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
                <li class="active"><a href="courseMaterials.php">課程教材(Course materials)</a></li>
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
            <p>Email: wzyang@asia.edu.tw</p>


            <br>


            <table id="myTable" >

                <tr>
                    <td>2002:</td>
                    <td>資料結構,資訊網路,網際網路管理與實作, PDA 程式設計.</td>
                </tr>

                <tr>
                    <td>2003:</td>
                    <td>離散數學,線性代數,網際網路效能分析,網際網路程式設計,通訊/網路協定工程</td>
                </tr>

                <tr>
                    <td>2004:</td>
                    <td>線性代數,資訊網路,通訊協定工程, 機率，排隊理論</td>
                </tr>

                <tr>
                    <td>2005:</td>
                    <td>線性代數,計算機網路,通訊協定工程,行動計算概論,高等數值方法, 機率, 計算機概論,

                        網路安全與管理.</td>
                </tr>

                <tr>
                    <td>2006:</td>
                    <td>工程數學,行動計算概論,計算機概論,機率,計算機網路概論, 系統安全</td>
                </tr>

                <tr>
                    <td>2007:</td>
                    <td>工程數學,行動計算概論, 計算機網路概論</td>
                </tr>

                <tr>
                    <td>2008:</td>
                    <td>程式設計, Java 網路程式設計,電腦網路概論,行動計算概論</td>
                </tr>

                <tr>
                    <td>2009:</td>
                    <td>程式設計, Java 網路程式設計,電腦網路概論,行動計算概論</td>
                </tr>

                <tr>
                    <td>2010:</td>
                    <td>程式設計, 視窗程式設計,電腦網路概論,普式運算</td>
                </tr>

                <tr>
                    <td>2011:</td>
                    <td>程式設計, 視窗程式設計,電腦網路概論,普式運算</td>
                </tr>

                <tr>
                    <td>2012:</td>
                    <td>程式設計, 行動裝置程式設計, 電腦網路概論, 網路程式設計</td>
                </tr>

                <tr>
                    <td>2013:</td>
                    <td>程式設計(一), 計算機網路概論,資料結構(與洪振偉教授合開, 由洪教授授課, 請參考洪教授網站)</td>
                </tr>

                <tr>
                    <td></td>
                    <td>資訊與生活, 雲端計算與近端服務應用, 程式設計(二)(與洪振偉教授合開, 由洪教授授課, 請參考洪教授網站)</td>
                </tr>

                <tr>
                    <td>2014:</td>
                    <td>視窗程式設計, 計算機網路概論, 雲端計算與近端服務應用, 資料庫系統理論, 資料庫系統管理</td>
                </tr>

                <tr>
                    <td>2015:</td>
                    <td>視窗程式設計(亦可請參見學校 Moodle 平台)、網頁系統開發、資訊與生活</td>
                </tr>

                <tr>
                    <td>2016:</td>
                    <td>資料庫系統理論 、資料庫系統管理、無線網路、視窗程式設計、網頁系統開發、行動應用軟體開發</td>
                </tr>

                <tr>
                    <td>2017:</td>
                    <td>程式語言應用、資料庫系統管理、雲端計算、資訊與科技、 HTML5 跨平台程式開發</td>
                </tr>

            </table>
            <hr>


        </div>
    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>
';?>