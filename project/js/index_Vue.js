Vue.component('humlist',{
    template:`
    <div v-bind:class="'hum-menu'">
        <div v-bind:class="'hum-list'">
            <ul>
                <li v-bind:class="'back_home'" v-bind:id="'back_home'"><p>ホーム➤</p></li>
                <li v-bind:class="'list-top_txt'">メーカー</li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'全て'"><p>全て</p></li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'Samsung'"><p>Samsung</p></li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'Apple'"><p>Apple</p></li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'Xiaomi'"><p>Xiaomi</p></li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'OPPO'"><p>OPPO</p></li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'Google'"><p>Google</p></li>
            </ul>
            <ul>  
                <li v-bind:class="'list-top_txt'">性能</li>
                <li v-bind:class="'hum_btn2'" v-bind:value="'price DESC'"><p>価格</p></li>
                <li v-bind:class="'hum_btn2'" v-bind:value="'Camera DESC'"><p>カメラ</p></li>
                <li v-bind:class="'hum_btn2'" v-bind:value="'CPU DESC'"><p>CPU</p></li>
                <li v-bind:class="'hum_btn2'" v-bind:value="'Battery DESC'"><p>バッテリー</p></li>
            </ul>
            <ul>  
                <li v-bind:class="'list-top_txt'">通信プラン</li>
                <li v-bind:class="'hum_btn3'" v-bind:value="''"><p>おすすめプラン</p></li>
                <li v-bind:class="'hum_btn3'" v-bind:value="'0'"><p>プラン診断</p></li>
            </ul>
        </div>
    </div>
    `
})
Vue.component('humlist2',{
    template:`
    <div v-bind:class="'hum-menu2'">
        <div v-bind:class="'hum-list2'">
            <ul>
                <li v-bind:class="'back_home'" v-bind:id="'back_home'"><p>ホーム➤</p></li>
                <li v-bind:class="'list-top_txt'">メーカー</li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'全て'"><p>全て</p></li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'Samsung'"><p>Samsung</p></li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'Apple'"><p>Apple</p></li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'Xiaomi'"><p>Xiaomi</p></li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'OPPO'"><p>OPPO</p></li>
                <li v-bind:class="'hum_btn1'" v-bind:value="'Google'"><p>Google</p></li>
            </ul>
            <ul>  
                <li v-bind:class="'list-top_txt'">性能</li>
                <li v-bind:class="'hum_btn2'" v-bind:value="'price DESC'"><p>価格</p></li>
                <li v-bind:class="'hum_btn2'" v-bind:value="'Camera DESC'"><p>カメラ</p></li>
                <li v-bind:class="'hum_btn2'" v-bind:value="'CPU DESC'"><p>CPU</p></li>
                <li v-bind:class="'hum_btn2'" v-bind:value="'Battery DESC'"><p>バッテリー</p></li>
            </ul>
            <ul>  
                <li v-bind:class="'list-top_txt'">通信プラン</li>
                <li v-bind:class="'hum_btn3'" v-bind:value="''"><p>おすすめプラン</p></li>
                <li v-bind:class="'hum_btn3'" v-bind:value="'0'"><p>プラン診断</p></li>
            </ul>
        </div>
    </div>
    `
})

Vue.component('planlist',{
    template:`
    <div v-bind:class="'plan_list-wrapper'">
        
    </div>
    `
})

var app = new Vue({
    el: '#setVue',
    data: {
        //tab
        count:0,
        add1:false,
        add2:false,
        add3:false,

        //quize
        result_count1:[],
        result_show1:false,
        result_show2:false,
        result_company1:"",
        result_plan1:"",
        result_price1:"",
        result_company2:"",
        result_plan2:"",
        result_price2:"",
        },
    methods: {
        //tab
        addColor1(){
            this.count=0;
            this.add1=true;
            this.add2=false;
            this.add3=false;
        },
        addColor2(){
            this.count=1;
            this.add1=false;
            this.add2=true;
            this.add3=false;
        },
        addColor3(){
            this.count=2;
            this.add1=false;
            this.add2=false;
            this.add3=true;
        },

        //quize
        quizeResult(){
            const result_count1=this.result_count1;
            const count=result_count1.join("");
           
            if(result_count1.length === 2){
                 this.result_show2=false;
                switch (count) {
                    case "00":
                        this.result_company1="UQmobile";
                        this.result_plan1="くりこしプラン:3GB"
                        this.result_price1="（税抜）1,480円/月"
                        break;
                    case "01":
                        this.result_show2=true;
                        this.result_company1="docomo";
                        this.result_plan1="ahamo:20GB"
                        this.result_price1="（税抜）2,700円/月"
                        this.result_company2="au";
                        this.result_plan2="povo:20GB"
                        this.result_price2="（税抜）2,480円/月"
                        break;
                    case "02":
                        this.result_company1="docomo";
                        this.result_plan1="ギガホプレミア:60GB"
                        this.result_price1="（税抜）7,205円/月"
                        break;
                    case "10":
                        this.result_show2=true;
                        this.result_company1="mineo";
                        this.result_plan1="マイピタ:5GB"
                        this.result_price1="（税抜）1,380円/月"
                        this.result_company2="RakutenMobile";
                        this.result_plan2="Rakuten UN-LIMIT VI:3GBまで"
                        this.result_price2="（税抜）980円/月"
                        break;
                    case "11":
                        this.result_show2=true;
                        this.result_company1="mineo";
                        this.result_plan1="マイピタ:20GB"
                        this.result_price1="（税抜）1,980円/月"
                        this.result_company2="UQmobile";
                        this.result_plan2="くりこしプラン:15GB"
                        this.result_price2="（税抜）2,480円/月"
                        break;
                    case "12":
                        this.result_company1="RakutenMobile";
                        this.result_plan1="Rakuten UN-LIMIT VI:20GB以上"
                        this.result_price1="（税抜）2,980円/月"
                        break;
                
                    default:
                        break;
                }
            }

            if(count === "01" || count === "10"){
                this.result_show2=true;
            }

            this.result_count1.splice(0);
            this.result_show1 = true;
        }
    },
})


