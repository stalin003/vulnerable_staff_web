$(document).ready(function(){
                
    $('.cog').click(function(event){
        event.preventDefault();
        $('.cog').toggleClass('more');
        $('.cog .sub-menu').css({'opacity':'1'}).toggle();
    });

    /**logout **/

    $('#logout').click(function(event){
        event.preventDefault();
        $('.black-screen').show();
        $('body').css({overflowY:'hidden'});
        $('.logout-card').show();

    });

    $('#yes').click(function(){
        $('.logout-card').hide();
        $('body').css({overflowY:'auto'});
        $('.black-screen').hide();

        var logout="lol";
        $.ajax({
            url:'../php/logout.php',
            data:{logout:logout},
            type:'POST',
            success:function(){
                location.reload(true);
            }
        });

    });

    $('#no').click(function(){
        $('.logout-card').hide();
        $('body').css({overflowY:'auto'});
        $('.black-screen').hide();
    });

    $('.black-screen').on('click', function(){
        $('.logout-card').hide();
        $('.password-card').hide();
        $('.staff-profile-insert-card').hide();
        $('body').css({overflowY:'auto'});
        $('.black-screen').hide();
    });


    /**change password **/

    $('#change-password').click(function(event){
        event.preventDefault();
        $('.black-screen').show();
        $('body').css({overflowY:'hidden'});
        $('.password-card').show();

    });
    
    $('#change-username').click(function(event){
        event.preventDefault();
        $('.black-screen').show();
        $('body').css({overflowY:'hidden'});
        $('.username-card').show();

    });

    $('#confirm').click(function(){
        $('.password-card').hide();
        $('body').css({overflowY:'auto'});
        $('.black-screen').hide();


    });

    $('#cancel').click(function(){
        $('.password-card').hide();
        $('body').css({overflowY:'auto'});
        $('.black-screen').hide();
    });
    
    $('#cancel-usr').click(function(){
        $('.username-card').hide();
        $('body').css({overflowY:'auto'});
        $('.black-screen').hide();
        $('.chng-user')[0].reset();
    });

   $('.navbar ul li').click(function(){

       if(!$(this).find('.icon').length)
           {

               $('.navbar ul li').removeClass('active');
               $(this).addClass('active');
               $('.sub-menu ul li').removeClass('active');
           }

   });

    $('.sub-menu ul li').click(function(){

       if(!$(this).find('.icon').length)
           {
               /*alert($(this).parent().parent().parent().parent().get(0).tagName);*/
               $('.navbar ul li').removeClass('active');
               $(this).parent().parent().parent().parent().addClass('active');

               $('#logo').parent().removeClass('active');
               $('.sub-menu ul li').removeClass('active');
           }

   });

    $('.sub-menu2 ul li').click(function(){

       if(!$(this).find('.icon').length)
           {
               /*alert($(this).parent().parent().parent().parent().parent().parent().parent().parent().get(0).tagName);*/
               $('.navbar ul li').removeClass('active');
               $(this).parent().parent().parent().parent().parent().parent().parent().parent().addClass('active');
               $('.sub-menu ul li').removeClass('active');
               $('.sub-menu2 ul li').removeClass('active');
           }

   });


});