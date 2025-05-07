<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>祐瑜作品集</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            background-color: rgb(253, 249, 246);
            height: ;
        }

        a {
            text-decoration: none;
        }

        h2 {
            line-height: 8vh;
            color: #d0b8a4;
        }

        h3 {
            font-weight: bold;
            font-size: x-large;
        }

        h5 {
            font-weight: bold;
        }

        .navBox {
            width: 100%;
            height: 8vh;
            background-color: rgb(42, 42, 94);
            text-align: center;
            line-height: 8vh;
            color: white;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .box {
            width: 80%;
            margin: auto;
            text-align: center;
        }

        .btn a {
            width: 40%;
            margin: auto;
            background-color: transparent;
            border: 1px solid #B98B67;
            color: #B98B67;
            line-height: 60px;
            border-radius: 30px;
            display: block;
            text-align: center;
            color: #B98B67;
            text-decoration: none;
            cursor: pointer;
            margin-top: 30px;
            transition: all 0.4s ease;
            box-shadow: 2px 2px 2px rgba(128, 96, 71, 0.5);
        }

        .btn a:hover {
            background-color: #B98B67;
            color: white;
        }

        .card {
            border: none;
            box-shadow: 4px 4px 4px rgba(130, 130, 130, 0.5);
            background: #eeece7;
        }

        .card-body {
            padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
            color: rgb(120, 60, 10);
        }

        .big {
            overflow: hidden;
            border-radius: 4px;
        }

        .big img {
            transform: scale(1, 1);
            transition: all 1s ease-out;
        }

        .big img:hover {
            transform: scale(1.2, 1.2);
        }

        footer {
            width: 100%;
            height: 8vh;
            background-color: rgb(42, 42, 94);
            text-align: center;
            line-height: 8vh;
            color: #d0b8a4;
            /* color: white; */
            position: sticky;
            bottom: 0px;
            margin-top: 30px;
        }
    </style>

</head>

<body>
    <main>
        <div class="navBox">
            <h2>作品集</h2>
        </div>
        <div class="container" style="margin-top:12vh;">
            <div class="row">
                <!-- 卡片1 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <a href="./calendar">
                        <div class="card">
                            <div id="pic1">
                                <img src="./image/calendar.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">萬年曆</h5>
                                <p class="card-text">
                                <ul>
                                    <li>
                                        即時顯示現在時間
                                    </li>
                                    <li>
                                        放假日顯示為紅色
                                    </li>
                                    <li>
                                        有標註國定假日名稱
                                    </li>
                                    <li>
                                        可一鍵回到今日
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- 卡片2 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <div class="card">
                        <a href="./song">
                            <div id="pic2">
                                <img src="./image/song.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">歌曲介紹</h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    歌曲資訊
                                </li>
                                <li>
                                    歌詞
                                </li>
                                <li>
                                    創作靈感
                                </li>
                                <li>
                                    收聽歌曲
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 卡片3 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <div class="card">
                        <a href="./myHotel">
                            <div id="pic3">
                                <img src="./image/hotel.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">My Hotel</h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    飯店介紹
                                </li>
                                <li>
                                    1樓 牛排館
                                </li>
                                <li>
                                    2樓 日本料理
                                </li>
                                <li>
                                    3樓 自助餐廳
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 卡片4 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <div class="card">
                        <a href="./Robot">
                            <div id="pic4">
                                <img src="./image/robot.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Robot</h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    CSS繪製
                                </li>
                                <li>
                                    Q版機器人
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 卡片5 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <div class="card">
                        <a href="./HR_form">
                            <div id="pic5">
                                <img src="./image/hr.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">HR表單</h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    新進人員資料建檔
                                </li>
                                <li>
                                    各種表單控制樣式
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 卡片6 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <div class="card">
                        <a href="./CrystalBracelet_Shop">
                            <div id="pic6">
                                <img src="./image/crystal.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Crystal Bracelet Shop</h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    水晶銷售網站
                                </li>
                                <li>
                                    滿額享優惠
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 卡片7 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <div class="card">
                        <a href="https://youyu129.github.io/RWDpage_hw/">
                            <div id="pic7">
                                <img src="./image/woodenfloor.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">WoodenFloor</h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    木地板官網
                                </li>
                                <li>
                                    一頁式網站
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 卡片8 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <div class="card">
                        <a href="./basketballgame">
                            <div id="pic8">
                                <img src="./image/basketball.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">投籃大賽</h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    倒數計時
                                </li>
                                <li>
                                    最後10秒三分球
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 卡片9 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <div class="card">
                        <a href="https://youyu129.github.io/Anyi-Long-Term-Care/">
                            <div id="pic9">
                                <img src="./image/anyi.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">安怡長期照顧中心</h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    長照中心官網
                                </li>
                                <li>
                                    RWD響應式網頁
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 卡片10 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <div class="card">
                        <a href="./WebBackend_System">
                            <div id="pic10">
                                <img src="./image/backend.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">前後台網站</h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    後台CRUD功能
                                </li>
                                <li>
                                    帳號：admin
                                </li>
                                <li>
                                    密碼：1234
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 卡片11 -->
                <div class="col-md-4 col-12 mb-4 p-4">
                    <div class="card">
                        <a href="https://bquiz.mackliu.com/quiz1/index.php">
                            <div id="pic11">
                                <img src="./image/bquiz.jpg"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">網頁設計乙級-題目</h5>
                            <p class="card-text">
                            <ul>
                                <li>
                                    考題現場抽籤四擇一
                                </li>
                                <li>
                                    考試時間：四小時
                                </li>
                                <li>
                                    考試環境：無網路
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer>
        copyright @ 2025 youyu
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- font awesome free icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        $(document).ready(function() {
            $('#pic1, #pic2, #pic3, #pic4, #pic5, #pic6, #pic7, #pic8, #pic9, #pic10, #pic11').on('mouseenter', function() {
                $(this).addClass('big');
                // console.log(`${this.id} mouseenter ok`);
            }).on('mouseleave', function() {
                $(this).removeClass('big');
            });
        });
    </script>
</body>

</html>