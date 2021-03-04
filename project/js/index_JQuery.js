$(function(){

    $('.comparison_phone-wrapper').fadeIn(3000);
    $('.tab-menu').fadeIn(3000);
    $('.use-tech_container').fadeIn(3000);
    $('.comparison_plan-wrapper').fadeIn(3000);

    $('.content').hover(
        function(){
            $(this).css('background-color','goldenrod');
            $(this).children().css('color','white');
        },
        function(){
            $(this).css('background-color','');
            $(this).children().css('color','');
    });

    $('.plan_content').hover(
        function(){
            $(this).css('background-color','goldenrod');
            $(this).children().css('color','white');
        },
        function(){
            $(this).css('background-color','');
            $(this).children().css('color','');
    });
        
    $(document).on('click','.hum-icon', function() {
        $('.hum-menu').animate({'width':'toggle'},90);

    });

    for (let index = 1; index < 3; index++) {
        const quize_span=`quize${index} span`;

        $(document).on('click','.'+quize_span, function(){
            $('.'+quize_span).css({'background-color':'white','color':'black'});
            $(this).css({'background-color':'goldenrod','color':'white'});
        });
    }

    $(document).on('click','.result_btn', function() {
        $('.quize span').css({'background-color':'white','color':'black'});
    });

    $('.maker_btn').hover(
        function(){
            $(this).css('background-color','goldenrod');
        },
        function(){
            $(this).css('background-color','');
    });

    $('.speck_btn').hover(
        function(){
            $(this).css('background-color','goldenrod');
        },
        function(){
            $(this).css('background-color','');
    });

    $('.all2').hover(
        function(){
            $(this).css('background-color','goldenrod');
        },
        function(){
            $(this).css('background-color','');
    });


    $('.back_home').click(function(){
        location.href='index.php';
    });
            
    $(document).on('click', '.menu_btn', function() {
        var value= $(this).attr("value");
        location.href='search_phone.php?maker='+encodeURIComponent(value)+
        "&speck="+encodeURIComponent('')+"&speck_text="+encodeURIComponent('');
    });


    $(document).on('click','.hum_btn1', function() {
        var value= $(this).attr('value');
        location.href='search_phone.php?maker='+encodeURIComponent(value)+
        "&speck="+encodeURIComponent('')+"&speck_text="+encodeURIComponent('');
    });

    $(document).on('click', '.hum_btn2', function() {
        var value= $(this).attr('value');
        var speck_text=$(this).children('p').text();
        location.href='search_phone.php?maker='+encodeURIComponent('')+
        "&speck="+encodeURIComponent(value)+"&speck_text="+encodeURIComponent(speck_text+'(昇順)');
    });

    $(document).on('click', '.content', function() {
        var value= $(this).attr('value');
        var speck_text=$(this).children('p').text();
        location.href='search_phone.php?maker='+encodeURIComponent('')+
        "&speck="+encodeURIComponent(value)+"&speck_text="+encodeURIComponent(speck_text+'(昇順)');
    });

    $(document).on('click', '.hum_btn3', function() {
        var value= $(this).attr('value');
        location.href='search_plan.php?value='+encodeURIComponent(value);
    });

    $('.search_plan-btn').click(function(){
        location.href="search_plan.php?value="+encodeURIComponent('0');
    });

    $('.plan_content').click(function(){
        location.href="search_plan.php";
    });
    
});