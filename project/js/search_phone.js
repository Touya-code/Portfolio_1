const maker_btn=document.getElementsByClassName('maker_btn');
const speck_btn=document.getElementsByClassName('speck_btn');

search.onclick=()=>{
    const st = document.getElementById('select_maker');
    const str=st.value;
    const st2 = document.getElementById('select_speck');
    const str2=st2.value;
    const st3=document.getElementById('select_speck');
    var idx = st3.selectedIndex;       
    var str3  = st3.options[idx].text;

    if (str === '' && str2 === '') {
        
    }else if(str3 === '性能を選択'){
        var url = new URL(location);
        url.searchParams.set('maker',str);
        url.searchParams.set('speck',str2);
        url.searchParams.set('speck_text','');
        location.href = url.toString();
    }else{
        var url = new URL(location);
        url.searchParams.set('maker',str);
        url.searchParams.set('speck',str2);
        url.searchParams.set('speck_text',str3);
        location.href = url.toString();
    }
};



