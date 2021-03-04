<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.7/dist/vue.js"></script>
</head>
<body>
      <div class="container"  id="setVue">
          <humlist></humlist>
          <humlist2></humlist2>
            <header class="header">  
                <div class="header-container">
                    <div class="bar">
                        <div class="hum-icon">
                            <img src="./img/bars_24 (1).png" alt="" srcset="">
                        </div>
                        <span class="btn-login">
                            <a href="#">ログイン</a>
                        </span>
                    </div>
                    <div class="menu-btn_wrapper">
                        <ul class="menu-btn_container">
                            <li class="menu_btn" value="Samsung"><p>Samsung</p></li>
                            <li class="menu_btn" value="Apple"><p>Apple</p></li>
                            <li class="menu_btn" value="Xiaomi"><p>Xiaomi</p></li>
                            <li class="menu_btn" value="OPPO"><p>OPPO</p></li>
                            <li class="menu_btn" value="Google"><p>Google</p></li>
                        </ul>
                    </div>
                </div>
            </header>

            <main class="main">
                <div class="main-container">
                    <div class="slides-wrapper">
                        <div class="slides-container">
                            <img class="slide" src="./img/Photos/samsung_galaxys21Ultra.jpg">
                            <img class="slide" src="./img/Photos/apple_iphone11pro.jpg">
                            <img class="slide" src="./img/Photos/xiaomi_MiNote10.jpg">
                            <img class="slide" src="./img/Photos/oppo_Reno3a.jpg">
                            <img class="slide" src="./img/Photos/google_Pixel5.jpg">
                        </div>             
                    </div>
                    <div class="comparison_phone-wrapper">
                        <p class="heading">スマホ比較</p>
                        <div class="comparison_phone-container">
                            <div class="content icon" value="price DESC">
                                <p>価格</p>
                                <img src="./img/icon_yen.png" alt="">
                            </div>
                            <div class="content icon" value="CPU DESC">
                                <p>CPU</p>
                                <img src="./img/icon_CPU.png" alt="">
                            </div>
                            <div class="content icon" value="Camera DESC">
                                <p>カメラ</p>
                                <img src="./img/icon_Camera.png" alt="">
                            </div>
                            <div class="content icon" value="Battery DESC">
                                <p>バッテリー</p>
                                <img src="./img/icon_Battery.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-menu">
                        <div class="tab-wrapper">
                            <div class="tab-btn_container">
                                <span @click="addColor1" v-bind:class="add1? 'clicked':'unclick'">相場</span>
                                <span @click="addColor2" v-bind:class="add2? 'clicked':'unclick'">CPUとは</span>
                                <span @click="addColor3" v-bind:class="add3? 'clicked':'unclick'">画素とは</span>
                            </div>
                            <div class="tab-txt">
                                <div v-show="count === 0">
                                    <br><p>一般的に以下に示すような相場</p><br>
                                    <ul>
                                        <li>2～3万円　➔安価</li>
                                        <li>4～6万円　➔中くらい</li>
                                        <li>７万円以上　➔高価</li>
                                    </ul>
                                </div>
                                    <div v-show="count === 1">
                                    <br><p>スマホの動作速度を決めるチップのこと。<br>本サイトでは以下のように示す。</p><br>
                                    <ul>
                                        <li>1　➔遅い</li>
                                        <li>2　➔普通</li>
                                        <li>3　➔速い</li>
                                    </ul>
                                </div>
                                <div v-show="count === 2">
                                    <br><p>写真の画質の高さを表す単位。<br>
                                    画素数が高いほどきれいな写真が撮れる。
                                    </p>
                                </div>                           
                            </div>
                        </div>
                    </div>
                    <div class="comparison_plan-wrapper">
                        <p class="heading">通信プラン比較</p>
                        <div class="comparison_plan-container">
                            <div class="plan_content">
                                <p>おすすめプラン</p>
                                <img src="./img/icon_Camera.png" alt="">
                            </div>
                        </div>
                        <span class="search_plan-btn">プラン診断はこちら➡</span>
                    </div>
                    <div class="use-tech_container">
                        <div class="use-tech">
                            <p>使用技術</p>
                            <ul>
                                <li>HTML&CSS</li>
                                <li>JavaScript</li>
                                <li>JQuery</li>
                                <li>Vue.js</li>
                                <li>PHP</li>
                                <li>SQLite</li>
                                <li>Sass</li>
                                <li>レスポンシブコーディング</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="footer">
                <div class="footer-wrapper">
                    <div class="footer-container">
                        <p>created by Touya Kishi</p>
                    </div>
                </div>
            </footer>
      </div>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/JavaScript" src="./js/index_JQuery.js"></script>
<script src="./js/index_Vue.js"></script>
<script src="./js/search_phone.js"></script>
<script>
$(function(){
    $('.slides-container').slick({
        autoplay:true,
        autoplaySpeed:2000,
        dots:false,
        arrows:false,
        infinite:true,
        pauseOnHover:false,
        pauseOnFocus:false,
    });
});
</script>
</body>
</html>
