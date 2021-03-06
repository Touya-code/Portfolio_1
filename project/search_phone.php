<?php
$pdo=new PDO('sqlite:./SQLite/newData.db');
$test=$pdo->query("SELECT * FROM SmartPhone");
$option1="";
$option2="";

if(isset($_GET["maker"])){
    
    $maker=$_GET["maker"];
    $speck=$_GET["speck"];
    $speck_text=$_GET["speck_text"];

    if ($maker === "") {
        $test=$pdo->query("SELECT * FROM SmartPhone ORDER BY $speck");
    }
    else if($speck === "" && $_GET["maker"] != "全て"){
        $test=$pdo->query("SELECT * FROM SmartPhone WHERE maker='$maker'");
    }
    else if($maker === "全て" && $speck != "") {
        $test=$pdo->query("SELECT * FROM SmartPhone ORDER BY $speck");
    }
    else if($maker === "全て"){
        $test=$pdo->query("SELECT * FROM SmartPhone");
    }
    else{
        $test=$pdo->query("SELECT * FROM SmartPhone WHERE maker='$maker' ORDER BY $speck");
    }
    
    $option1=$maker;
    $option2=$speck_text;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search SmartPhone</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.7/dist/vue.js"></script>
</head>
<body>
    <div class="container" id="setVue">
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
                <div class="top-nav">
                    <div class="nav-container">
                        <div class="down_menu">
                            <select id="select_maker">
                                <option value="" hidden>メーカーを選択</option>
                                <option value="全て" id="all2">全て</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Apple">Apple</option>
                                <option value="Xiaomi">Xiaomi</option>
                                <option value="OPPO">OPPO</option>
                                <option value="Google">Google</option>
                            </select>
                        </div>
                        <div class="down_menu">
                            <select id="select_speck">
                                <option value="" hidden>性能を選択</option>
                                <option value="price DESC">価格(昇順)</option>
                                <option value="price ASC">価格(降順)</option>
                                <option value="CPU DESC">CPU(昇順)</option>
                                <option value="Camera DESC">カメラ(昇順)</option>
                                <option value="Battery DESC">バッテリー(昇順)</option>
                            </select>
                        </div>
                        <button id="search">検索</button>                          
                    </div>
                    <div class="condition">
                        <span id="option1">検索条件:<?="$option1"?></span>
                        <span id="option2"><?="$option2"?></span>
                    </div>
                </div>
            </div>
        </header>

        <main class="main">
            <div class="main-container">
                <div class="phone_card-wrapper">
                    <?php foreach($test as $value): ?>
                        <div class="phone_card-container">
                            <div class="phone-card">
                                <img class="phone" src="<?= "$value[imgSrc]"?>" alt="" srcset="">
                                <div>
                                    <p><?= "$value[name]"?></p>
                                    <table>
                                        <tr>
                                            <td><img src="./img/icon_yen.png"></td><td><?= "$value[price]円"?></td>
                                        </tr>
                                        <tr>
                                            <td><img src="./img/icon_CPU.png"></td><td><?= "$value[CPU]"?></td>
                                        </tr>
                                        <tr>                    
                                            <td><img src="./img/icon_Camera.png"></td><td><?= "$value[Camera]万画素"?></td>
                                        </tr>
                                        <tr>                    
                                            <td><img src="./img/icon_Battery.png"></td><td><?= "$value[Battery]mAh"?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div> 
                    <?php endforeach;?>
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

<script type="text/JavaScript" src="./js/index_JQuery.js"></script>
<script src="./js/index_Vue.js"></script>
<script src="./js/search_phone.js"></script>
<style>
    main{
        display: none;
        min-height: 100vh;
    }
</style>
<script>
    $(function(){
        $('.main').fadeIn(1000);
    });
</script>
</body>
</html>
