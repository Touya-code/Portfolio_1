<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            </div>
        </header>
        <main class="main">
            <div class="main-container">
                <p class="plan_heading">おすすめプラン</p>
                <div class="plan_list-wrapper">
                    <div class="plan_docomo plan_list-container">
                        <p class="heading">docomo</p>
                        <p class="plan_name">プラン名: ahamo</p>
                        <table>
                            <tr>
                                <td>料金（税抜）</td>
                                <td>2,700円</td>              
                            </tr>
                            <tr>
                                <td>データ量</td>
                                <td>20GB</td>
                            </tr>
                            <tr>
                                <td>通信品質</td>
                                <td colspan="4" align="center">◎</td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </div>
                    <div class="plan_au plan_list-container">
                        <p class="heading">au</p>
                        <p class="plan_name">プラン名: povo</p>
                        <table>
                            <tr>
                                <td>料金（税抜）</td>
                                <td>2,480円</td>              
                            </tr>
                            <tr>
                                <td>データ量</td>
                                <td>20GB</td>
                            </tr>
                            <tr>
                                <td>通信品質</td>
                                <td colspan="4" align="center">◎</td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </div>
                    <div class="plan_rakuten plan_list-container">
                        <p class="heading">RakuteMobile</p>
                        <p class="plan_name">プラン名: Rakuten UN-LIMIT VI</p>
                        <table>
                            <tr>
                                <td>料金（税抜）</td>
                                <td>0円</td>
                                <td>980円</td>
                                <td>1,980円</td>
                                <td>2,980円</td>              
                            </tr>
                            <tr>
                                <td>データ量</td>
                                <td>1GB</td>
                                <td>3GB</td>
                                <td>20GB</td>
                                <td>20GB以上</td> 
                            </tr>
                            <tr>
                                <td>通信品質</td>
                                <td colspan="4" align="center">△</td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </div>
                    <div class="plan_uq plan_list-container">
                        <p class="heading">UQmobile</p>
                        <p class="plan_name">プラン名: くりこしプラン</p>
                        <table>
                            <tr>
                                <td>料金（税抜）</td>
                                <td>1,480円</td>
                                <td>2,480円</td>
                                <td>3,480円</td>              
                            </tr>
                            <tr>
                                <td>データ量</td>
                                <td>3GB</td>
                                <td>15GB</td>
                                <td>25GB以上</td> 
                            </tr>
                            <tr>
                                <td>通信品質</td>
                                <td colspan="4" align="center">〇</td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </div>
                    <div class="plan_uq plan_list-container">
                        <p class="heading">mineo</p>
                        <p class="plan_name">プラン名: マイピタ</p>
                        <table>
                            <tr>
                                <td>料金（税抜）</td>
                                <td>1,180円</td>
                                <td>1,380円</td>
                                <td>1,780円</td>  
                                <td>1,980円</td>            
                            </tr>
                            <tr>
                                <td>データ量</td>
                                <td>1GB</td>
                                <td>5GB</td>
                                <td>10GB</td>
                                <td>20GB以上</td> 
                            </tr>
                            <tr>
                                <td>通信品質</td>
                                <td colspan="4" align="center">△</td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="quize-wrapper">
                    <div class="quize1 quize">
                        <p>重視するのはどちらですか？</p>
                        <span @click="result_count1.splice(0,1,'0')">通信品質</span>
                        <span @click="result_count1.splice(0,1,'1')">料金</span>
                    </div>
                    <div class="quize2 quize">
                        <p>月に何GB利用しますか？</p>
                        <span @click="result_count1.splice(1,1,'0')">～3GB以上</span>
                        <span @click="result_count1.splice(1,1,'1')">～20GB</span>
                        <span @click="result_count1.splice(1,1,'2')">20GB以上</span>
                    </div>
                    <button class="result_btn" @click="quizeResult">診断結果を表示</button>
                    <p class="heading">あなたにおすすめのプランは</p>
                    <div class="quize_result-wrapper" v-show="result_show1">
                        <div class="quize_result1">
                            <p>{{result_company1}}</p>
                            <p>{{result_plan1}}</p>
                            <p>{{result_price1}}</p>
                        </div>
                        <div class="quize_result2" v-show="result_show2">
                            <p>{{result_company2}}</p>
                            <p>{{result_plan2}}</p>
                            <p>{{result_price2}}</p>
                        </div>
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



<script type="text/JavaScript" src="./js/index_JQuery.js"></script>
<script src="./js/index_Vue.js"></script>
<script src="./js/index.js"></script>
<script>
   
</script>
</body>
</html>