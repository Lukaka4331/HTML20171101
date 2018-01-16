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
    <script src="js/jquery.min.js"></script>


    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height:3000px}

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

        .button {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {background-color: #3e8e41}

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            /*width: 100%;*/
            background-color: #ffffff;

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
        #gotop {
            position: fixed;
            border-radius: 50px;
            center: 20px;
            bottom: 30px;
            padding: 10px 16px;
            font-size: 25px;
            background: rgba(255, 0, 0, 0.75);
            color: #FAFCFD;
            cursor: pointer;
            z-index: 1000;
        }





    </style>
</head>
<body>

<div class="container-fluid">
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
                <li><a href="teacherintroduce.php">簡歷</a></li>
                <li class="active"><a href="publications.php">刊物</a></li>
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
            <p>Email: wzyang@asia.edu.tw</p>

            <!--<h2> <span class="label label-primary">Education</span></h2>-->

            <br>'
;?>

            <div align="left">
            <button class="button"id="a1"  onclick="change()">Journals:</button><br>
            <div id="d1" style="display: none">



                <table border="1">
                    <tr>
                        <td >
                            W.-Z. Yang, M.-F. Chang and Y.-B. Lin, "Priority Call Service on PCS Networks,",SCS Trans. Special Issue on Wireless Networks, 16(3):102-112, Sep., 1999.
                        </td>
                    </tr>

                    <tr>
                        <td>
                            M.-F. Chang and Y.-B. Lin, W.-Z. Yang, "Performance of Hot Billing Mobile Prepaid Service", Computer Networks Journal, 36(2-3):269-290, July 2001.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            M.-F. Chang, W.-Z. Yang and Y.-B. Lin, "Performance Modeling of Service Node in Mobile Prepaid Service", IEEE Transaction on Vehicular Technology, 51(3):597-612, May 2002.
                        </td>
                    </tr>

                    <tr>
                        <td>
                            M.-F. Chang and W.-Z. Yang, "Performance of Mobile Prepaid and Priority Call Services", IEEE Communication Letters, 6(2):61-63, Feb. 2002.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Wei-Zu Yang, Fang-Sun Lu, and Ming-Feng Chang, “Performance Modeling of an Integrated Mobile Prepaid Services”, IEEE Transactions on Vehicular Technology, Vol.56, No.2, pp.899-906, Mar., 2007.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            J.-I Shieh, H.-H. Wu and W.-Z. Yang, "Finding Behavior Patterns and Evaluating Orderliness of Dynamical Systems by Spanning Tree Invariants", Accepted and to appear in Quality & Quantity.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            T.-L. Chen, P.-C. Chen, W.-Z. Yang and L.-C. Yu, "The Design of Web-based Prepaid Services with Freeware over the VoIP Network", Accepted and to appear in Asian Journal of Health and Information Sciences.
                        </td>
                    </tr>



                </table>
            </div>
            <br>

            <script>
                var isShow = false;
                function change() {
                    if(!isShow) {
                        isShow = true;
                        document.getElementById('d1').style.display='';
                    }
                    else {
                        isShow = false;
                        document.getElementById('d1').style.display='none';
                    }
                }
            </script>

            <button class="button"id="a2" onclick="change2()">Conferences:</button><br>
            <div id="d2" style="display: none">



                <table border="1">
                    <tr>
                        <td >
                            H.-C. Fu, C.-M. Liu, Y.-W. Tsai and W.-Z. Yang, “A Neural Network Approach to Multiple Target Tracking”, SPIE Optical Engineering, 1992.                        </td>
                    </tr>

                    <tr>
                        <td>
                            H.-C. Fu, C.-M. Liu, Y.-W. Tsai and W.-Z. Yang, “A Neural Network Approach to Multiple Target Tracking”, Fire Control and Radar Engineering, 1992.                         </td>
                    </tr>
                    <tr>
                        <td>
                            M.-F. Chang and W.-Z. Yang, “Performance Modeling of Mobile Prepaid and Priority Call Services”, in Proceedings of the 8th National Computer Symposium, 2001 ( Selected as the best paper).
                        </td>
                    </tr>

                    <tr>
                        <td>
                            M.-F. Chang and W.-Z. Yang, "Performance of Mobile Prepaid and Priority Call Services", IEEE Communication Letters, 6(2):61-63, Feb. 2002.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Y.-L. Hou, T.-H. Ku, T.-L. Chen and W.-Z. Yang, “Patient-side Medication Checking System,” in Proceedings of the 6th Conference on Engineering Technology and Applications on Chinese and Western Medicine (ETACWM), Taichung, Taiwan, R.O.C., pp. 135-139, Sep. 2003. (Excellent Student Paper Award).                        </td>
                    </tr>
                    <tr>
                        <td>
                            W.-Z. Yang and T. H. Ku, “The Application of Short Message Services and Network Message Services with HIS”, in Proceedings of the 6th Conference on Engineering Technology and Applications on Chinese and Western Medicine (ETACWM), Taichung, Taiwan, R.O.C., pp.384-386, Sep., 2003.                        </td>
                    </tr>
                    <tr>
                        <td>
                            W.-Z. Yang, F.-S. Lu and M.-F. Chang, “Performance Modeling of Integrated Mobile Prepaid Services”, pp. 133-138, in Proceeding of the 10th Mobile Computing Workshop, 2004 (Excellent Paper Award).
                        </td>
                    </tr>

                    <tr>
                        <td>
                            R. Geng and W.-Z. Yang, “The Development Status of New Generation Metro Area Netwroks”, in Proceedings of the 11th Mobile Computing Workshop (MC), Taoyuan, Taiwan, R.O.C., March 2005.
                        </td>
                    </tr>

                    <tr>
                        <td>
                            T.-L. Chen, L.-C. Yu and W.-Z. Yang, “The Design of Providing Prepaid Services with Billing System on the VoIP Platform,” in Proceedings of the 11th Mobile Computing Workshop (MC), Taoyuan, Taiwan, R.O.C., pp. 256-264, March 2005.
                        </td>
                    </tr>

                    <tr>
                        <td>
                            L.-C. Yu, T.-L. Chen and W.-Z. Yang, “The Implementation of Prepaid Services Over the SIP-based VoIP Network”, in Proceedings of the 3rd International Conference on Information Technology: Research and Education (ITRE), pp.151-155, June, 2005.
                        </td>
                    </tr>

                    <tr>
                        <td>
                            許芳榮, 楊偉儒, 夏偉中, “The Design and Implementation of Multiple EST to Genome Alignment”, in 第22屆組合數學與計算理論研討會, 2005.                        </td>
                    </tr>

                    <tr>
                        <td>
                            黃冠凱, 陳永盛, 吳銜容, 楊偉儒, “探討網際網路之拍賣競標認證系統模式”, 第三屆流通與全球運籌論文研討會, 2005.                        </td>
                    </tr>

                    <tr>
                        <td>
                            T.-L. Chen, L.-C. Yu, W.-Z. Yang and P.-C. Chen, “The Implementation of a Prepaid Web-based Phone on the VoIP Platform”, in Proceedings of 2005 National Computer Symposium (NCS), Tainan, Taiwan, R.O.C., pp. 13, Dec., 2005.                        </td>
                    </tr>

                    <tr>
                        <td>
                            Chin-Feng Chen, Wei-Chung Shia, Fang-Ming Hsu, Wei-Ru Yang, and Fang-Rong Hsu, "The Design and Implementation of Updating and Monitoring Alternative Splicing Database," Proceedings of 2005 National Computer Symposium, Tainan, Taiwan, R.O.C., Dec., 2005.                        </td>
                    </tr>

                    <tr>
                        <td>
                            L.-C. Yu, T.-L. Chen and W.-Z. Yang, “The Implementation of Prepaid Services Over the SIP-based VoIP Network”, in Proceedings of the 3rd International Conference on Information Technology: Research and Education (ITRE), pp.151-155, June, 2005.
                        </td>
                    </tr>

                    <tr>
                        <td>
                            W.-Z. Yang, L.-C. Yu, P.-C. Chen and T.-L. Chen, “The Design of Multimedia Web-based Phone and Billing System with Freeware over the VoIP Network,”Accepted and to appear in 1st IEEE International Conference on Sensor Networks, Ubiquitous, and Trustworthy Computing (SUTC), June 2006.
                        </td>
                    </tr>

                    <tr>
                        <td>
                            W.-Z. Yang, L.-C. Yu, P.-C. Chen and T.-L. Chen, Fang-Rong, Hsu,“Designing a Web-based Phone to Support Video Conferencing and the IVR System with Freeware over VoIP Networks”, Submitted to National Computer Symposium.                        </td>
                    </tr>

                </table>
            </div>
            </div>
            <br>

            <script>
                var isShow2 = false;
                function change2() {
                    if(!isShow2) {
                        isShow2 = true;
                        document.getElementById('d2').style.display='';
                    }
                    else {
                        isShow2 = false;
                        document.getElementById('d2').style.display='none';
                    }
                }
            </script>
            <div align="left">

            <button class="button"id="a3" onclick="change3()">書籍:</button><br>
            <div id="d3" style="display: none">



                <table border="1">
                    <tr>
                        <td >
                            林一平，楊偉儒等，”行動電話及數據網路管理”。
                        </td>
                    </tr>

                    <tr>
                        <td>
                            周錫增、丁玉良、楊舜仁、楊偉儒、方凱田、李建誠、劉俊達、陳元凱、林風、鄭欣明、逢愛君、鄭枸澺、呂芳森、余兆棠、賴薇如, 個人通訊服務網路, 維科圖書有限公司 , 2006 (ISBN:9867503090 ).
                        </td>
                    </tr>


                </table>
            </div>
            <br>

            <script>
                var isShow3 = false;
                function change3() {
                    if(!isShow3) {
                        isShow3 = true;
                        document.getElementById('d3').style.display='';
                    }
                    else {
                        isShow3 = false;
                        document.getElementById('d3').style.display='none';
                    }
                }
            </script>


            <button class="button"id="a4" onclick="change4()">中文文章:</button><br>
            <div id="d4" style="display: none">



                <table border="1">
                    <tr>
                        <td >
                            作者：林一平，譯者：楊偉儒,，蔡憲明。第三代行動電話服務。電子月刊, 2000。
                        </td>
                    </tr>




                </table>
            </div>
            <br>

            <script>
                var isShow4 = false;
                function change4() {
                    if(!isShow4) {
                        isShow4 = true;
                        document.getElementById('d4').style.display='';
                    }
                    else {
                        isShow4 = false;
                        document.getElementById('d4').style.display='none';
                    }
                }
            </script>
                <div id="gotop">˄<td>TOP<td>˄</div>

                <script>$("#gotop").click(function(){
                    jQuery("html,body").animate({
                        scrollTop:0
                    },1000);
                });
                $(window).scroll(function() {
                    if ( $(this).scrollTop() >=0){
                        $('#gotop').fadeIn("fast");
                    } else {
                        $('#gotop').stop().fadeOut("fast");
                    }
                });</script>

            </div>
        </div>
    </div>
</div>

<footer class="container-fluid">

    <p>Footer Text</p>
</footer>

</body>
</html>
