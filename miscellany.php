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
    <script src="js/jquery.min.js"></script>

    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 3000px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: #1bff75;
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
            background-color: #8a2bff;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {            background-color: #1e90ff }

        .button:active {
            background-color: #1e90ff;
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
            border: 10px solid #8a2bff;
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
                <li><a href="teacherintroduce.php">簡歷</a></li>
                <li><a href="publications.php">刊物</a></li>
                <li><a href="courseMaterials.php">課程教材(Course materials)</a></li>
                <li  class="active"><a href="miscellany.php">雜記(Miscellanies)</a></li>
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
';?>
<?php

?>
            <!--<h2> <span class="label label-primary">Education</span></h2>-->

            <div align="left">
                <button class="button"id="s1"  onclick="changedouble()">財經:</button><br>
                <div id="g1" style="display: none" align="left">

                    <br>
                    <table >

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://www.businessweekly.com.tw/webarticle.php?id=20867&p=1"> 2.6兆退休金黑洞, 全民埋單!! (2005/9)</a>,
                                <a href="http://yam.udn.com/yamnews/daily/2945536.shtml">軍公教退休金 限原薪9成 (2005/10)</a>,
                                <a href="http://news.yam.com/chinatimes/politics/200511/20051109584822.html">12月16日 軍公教18%一起砍 (2005/11)</a>,
                                <a href="http://yam.udn.com/yamnews/daily/3000627.shtml">18%改革 試院採較嚴甲案 (2005/11)</a></td>
                        </tr>

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.chinatimes.com/Chinatimes/newslist/newslist-content/0,3546,110507+112005101000183,00.html">二次經改 (2005/10) </a>,
                                <a href="http://news.yam.com/udn/fn/200604/20060412475095.html">府院定調 二次金改急踩煞車 (2006/4)</a>
                            </td>

                        </tr>

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/focus/fn/8992/">WTO會議閉幕 農產品出口補貼 2013年底全取消 (2005/12)</a>
                            </td>

                        </tr>

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://udn.com/NEWS/FINANCE/FINS3/3674240.shtml">海滄計畫解密 重返1989大陸現場 (2007/1)</a>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/udn/fn/200701/20070127885685.html">景氣亮藍燈 驚見衰退警訊 (2007/1)</a>
                                <a href="http://news.yam.com/chinatimes/fn/200701/20070127884731.html">景氣衰退 歹年冬 官方永遠後知後覺</a>
                            </td>
                        </tr>




                    </table>


                </div>
                <br>

                <script>
                    var isShowclick = false;
                    function changedouble() {
                        if(!isShowclick) {
                            isShowclick = true;
                            document.getElementById('g1').style.display='';
                        }
                        else {
                            isShowclick = false;
                            document.getElementById('g1').style.display='none';
                        }
                    }
                </script>

                <button class="button"id="s2"  onclick="changedouble2()">投資:</button><br>
                <div id="g2" style="display: none" align="left" >

                    <table>
                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.sina.com.tw/articles/13/30/71/13307169.html?/society/20051025.html">智邦疑涉嫌作假帳被調查 (2005/10)</a>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/bcc/international/200609/20060920338885.html">泰軍方稱受不了戴克辛貪腐與製造分裂才會政變 會儘速「還政於民」(2006/9)</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/chinatimes/fn/200511/20051124699413.html">最低稅負制 初審通過 海外所得 納入個人稅基 (2005/11)</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/chinatimes/society/200604/20060419511610.html">太百案 李恆隆：三組騙子騙來騙去</a>,
                                <a href="http://news.yam.com/udn/politics/200604/20060420517554.html">SOGO案揭密：黃、陳、馬 三大勢力纏鬥 </a>
                                (2006/4)
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://www5.chinesenewsnet.com/MainNews/SinoNews/Taiwan/2006_10_2_5_58_33_931.html">

                                    吳淑珍被指涉SOGO經營權案：檢方"查無實據"(2006/10)</a>,
                                <br>
                                <a href="http://news.chinatimes.com/Chinatimes/newslist/newslist-content/0,3546,110501+112006100300010,00.html">黃不起訴理由 社會難信服 (2006/10)</a>,
                                <br>
                                <br>
                                <a href="http://tw.news.yahoo.com/article/url/d/a/061002/4/4t56.html"> 趁危吞太百 林華德求刑3年半</a>,
                                <br>
                                <br>
                                <a href="http://udn.com/NEWS/NATIONAL/NATS1/3542978.shtml">SOGO案 徐旭東求刑兩年半</a>
                                <br>
                                <br>
                                <a href="http://news.yam.com/appledaily/politics/200610/20061003393081.html">檢：扁嫂確收27萬禮券 反反覆覆 從沒有收到間接收 (2006/10)</a>
                                <br>
                                <br>
                                <a href="http://news.chinatimes.com/Chinatimes/newslist/newslist-content/0,3546,110501+112006100300015,00.html">還有一千多萬禮券 哪去了？ (2006/10)</a>
                                <br>
                                <br>
                                <a href="http://udn.com/NEWS/NATIONAL/NATS1/3543347.shtml">《新聞眼》趁亂砸錢撿便宜 遠東禍上身</a>
                                <br>
                                <br>
                                <a href="http://udn.com/NEWS/NATIONAL/NATS1/3543316.shtml">《冷眼集》案子簽結 案情仍如霧裡看花 (2006/10)</a>
                                <br>
                                <br>
                                <a href="http://tw.news.yahoo.com/article/url/d/a/070119/4/9kg5.html">國務費案重大裁定 六外交工作不是機密 (2007/1)</a>

                            </td>


                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/chinatimes/politics/200604/20060426561103.html">台灣本島 人民幣兌換 半年內定點開放 (2006/4)</a>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/cna/international/200607/20060717038769.html">以色列轟炸不斷 黎巴嫩經濟嚴重受創 (2006/7)</a>
                                以軍開始撤出黎南 黎國部隊今進駐 (2006/8)
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/afp/fn/200608/20060817196518.html">東協六國明年起互相免除大部份電子產品關稅 (2006/8)</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://tw.news.yahoo.com/article/url/d/a/061009/19/52v1.html">北韓宣布進行核試後 亞洲股匯市暴跌 (2006/10)</a>
                                <br>
                                <br>
                                <a href="http://news.chinatimes.com/Chinatimes/newslist/newslist-content/0,3546,110501+112006101000014,00.html">國際瞭望：北韓為何非發展核武不可 (2006/10)</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://www.ettoday.com/2006/10/20/138-2005479.htm">金控風暴／中信金與紅火結構債轉讓　檢方懷疑是假交易(2006/10)</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://tw.news.yahoo.com/article/url/d/a/070114/4/9cnq.html">力霸財務黑洞 恐逾千億 (2007/1)</a>
                                <br>
                                <br>
                                <a href="http://tw.news.yahoo.com/article/url/d/a/070119/4/9kgp.html">召開臨董會 認列300億財損 亞太固網每股淨值剩5元</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/chinatimes/computer/200703/20070320044979.html">首季若再虧… 明基恐陷全額交割危機 (2007/3)</a>
                                <br>
                                <br>
                                <a href="http://news.yam.com/reuters/computer/200703/20070322056037.html">《電信產業分析》亞洲手機製造商面臨生存危機,缺乏經濟規模為軟肋 (2007/3)</a>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/ettoday/fn/200703/20070326069954.html">投資客偏高　房地產創高價　台經院：台灣房市恐瀕泡沫化 (2007/3)</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/chinatimes/fn/200708/20070811591728.html">歐美灌錢大輸血 股市更恐慌(2007/8)</a>
                            </td>
                        </tr>






                    </table>
                <script>
                    var isShowclick2 = false;
                    function changedouble2() {
                        if(!isShowclick2) {
                            isShowclick2 = true;
                            document.getElementById('g2').style.display='';
                        }
                        else {
                            isShowclick2 = false;
                            document.getElementById('g2').style.display='none';
                        }
                    }
                </script>

                </div>

                <br>

                <button class="button"id="s3"  onclick="changedouble3()">資訊:</button><br>
                <div id="g3" style="display: none" align="left">

                    <table>
                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/bcc/life/200510/20051013343861.html">門號可攜讓「網內互打」破功！電信總局不公布業者消長 (2005/10)</a>
                                <br>
                                <br>
                                <a href="http://news.yam.com/chinatimes/computer/200510/20051013337941.html">防範NP移民潮 台灣大搶推A+俱樂部 </a>
                                <br>
                                <br>
                                <a href="http://news.yam.com/bcc/computer/200510/20051013341510.html">門號可攜第一波21號凌晨啟用</a>
                                <br>
                                <br>
                                <a href="http://news.yam.com/bcc/life/200510/20051013342172.html">謝揆要求行動電話降價！交通部說好 電信總局保留</a>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://tw.news.yahoo.com/051022/4/2fyys.html">荷蘭考慮把電話轉接業務交給監獄犯人 (2005/10)</a>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://tw.news.yahoo.com/051028/195/2gthd.html">網路結盟又一樁！eBay與Skype整合 台灣為第一 (2005/10)</a>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/cna/computer/200510/20051028475299.html">中國即時通訊應用領域步入世界前列 (2005/10)</a>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/ettoday/computer/200603/20060329412036.html">VOIP／監聽設備成本高　業者不滿：還要自己先墊付 (2006/3)</a>
                                <br>
                                <br>
                                <a href="http://news.yam.com/ettoday/computer/200603/20060329412034.html">VOIP／就算能監聽　技術人員：也無法做到「即時」</a>
                                <br>
                                <br>
                                <a href="http://news.yam.com/ettoday/computer/200603/20060329412029.html">VOIP／POI介接每月費用龐大　導致成本驚人</a>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://tw.news.yahoo.com/article/url/d/a/061111/5/6eua.html">繼世衛秘書長後中國取得電信聯盟副秘書長 (2006/11)</a>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href="http://news.yam.com/chinatimes/politics/200612/20061230753584.html">晶圓廠西進 0.18微米製程終於放行 (2006/12)</a>
                            </td>
                        </tr>





                    </table>

                    <script>
                        var isShowclick3 = false;
                        function changedouble3() {
                            if(!isShowclick3) {
                                isShowclick3 = true;
                                document.getElementById('g3').style.display='';
                            }
                            else {
                                isShowclick3 = false;
                                document.getElementById('g3').style.display='none';
                            }
                        }
                    </script>

                </div>

                <br>


                <button class="button"id="s4"  onclick="changedouble4()">政治:</button><br>
                <div id="g4" style="display: none" align="left">

                    <table>
                        <tr>

                            <td>
                                <img  src="right.png" width="13"height="13">
                                <a href=""></a>
                            </td>
                        </tr>




                    </table>
                    <script>
                        var isShowclick4 = false;
                        function changedouble4() {
                            if(!isShowclick4) {
                                isShowclick4 = true;
                                document.getElementById('g4').style.display='';
                            }
                            else {
                                isShowclick4 = false;
                                document.getElementById('g4').style.display='none';
                            }
                        }
                    </script>

                </div>

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
<</div>

<footer class="container-fluid">
    <p >Footer Text</p>
</footer>

</body>
</html>
