$(document).ready(function(){
    
    
    $('input').blur(function(){
                    
        $(this).val($.trim($(this).val()));
    });

    $('textarea').blur(function(){

        $(this).val($.trim($(this).val()));
    });

    
    $(document).on('click','.upload-pics',function(){
        $('.black-screen').show();
        $('body').css({overflowY:'hidden'});
        $('.event-image-upload').show();
        $('.industrial-visit-image-upload').show();
        $('section').css({"filter":"blur(2px)"});
        $('header').css({"filter":"blur(2px)"});
        $(this).parent().parent('.update-and-delete').hide();
        $(this).parent().parent('.update-and-delete').siblings('button').removeClass('active-more');
    });
    
    $(document).on('click','.more-page button',function(){
        
        $(this).siblings('.update-and-delete').toggle();
        $(this).toggleClass('active-more');        
    });
    
    
    
    $('body').click(function(){
        $('.update-and-delete').hide();
        $('.more-page button').removeClass('active-more');
        $('.remove-pics').hide();
        $('.remove-class-teacher').css({display:'none'});
        $('.remove-class-mentor').css({display:'none'});
        $('.vid-del').css({display:'none'});
    });

    $('#insert').on('click',function(){
        $('.black-screen').show();
        $('body').css({overflowY:'hidden'});
        $('.event-insert-card').show();
        $('.industrial-visit-insert-card').show();
        $('.guest-lecturer-insert-card').show();
        $('.student-profile-insert-card').show();
        $('.mentor-insert-card').show();
        $('.question-paper-external-insert-card').show();
        $('.placement-insert-card').show();
        $('section').css({"filter":"blur(2px)"});
        $('header').css({"filter":"blur(2px)"});
    });

    $('.black-screen').on('click', function(){
        
        $('.std-id-error').html("");
        $('#std-name-error').html("");
        $('#std-caste-error').html("");
        $('#std-religion-error').html("");
        $('#std-mobile-no-error').html("");
        $('#std-email-error').html("");
        $('#staff_image_error').html("");
        $('.nri').html("");
        
        $('section').css({"filter":"blur(0px)"});
        $('header').css({"filter":"blur(0px)"});
        $('.black-screen').hide();
        $('body').css({overflowY:'auto'});
        $('.teacher-container').animate({left:"0%"});
        $('.mentor-container').animate({left:"100%"});
        $('.std-class-for-mentor').html("<option value=''>From roll no.</option>");
        $('.std-class-for-mentor-to').html("<option value=''>To roll no.</option>");
        $('.staff-profile-update-card').hide();
        $('form')[0].reset();
        $('form')[1].reset();
        $('.pic_error').html("");
        $('.image_error').html("");
        
        
        

    });

    
    $(document).on('click','.cancel-btn',function(){
        $('.std-id-error').html("");
        $('section').css({"filter":"blur(0px)"});
        $('header').css({"filter":"blur(0px)"});
        $('.guest-lecturer-insert-card').hide();
        $('.industrial-visit-image-upload').hide();
        $('.industrial-visit-insert-card').hide();
        $('.student-profile-insert-card').hide();
        
        $('#std-name-error').html("");
        $('#std-caste-error').html("");
        $('#std-religion-error').html("");
        $('#std-mobile-no-error').html("");
        $('#std-email-error').html("");
        $('#staff_image_error').html("");
        $('.nri').html("");
        
        $('.event-insert-card').hide();
        $('.event-image-upload').hide();
        $('.question-paper-external-insert-card').hide();
        $('.placement-insert-card').hide();
        $('.teacher-container').animate({left:"0%"});
        $('.mentor-container').animate({left:"100%"});
        $('.std-class-for-mentor').html("<option value=''>From roll no.</option>");
        $('.std-class-for-mentor-to').html("<option value=''>To roll no.</option>");
        $('.mentor-insert-card').hide();
        $('body').css({overflowY:'auto'});
        $('.black-screen').hide();
        $('form')[0].reset();
        $('form')[1].reset();
        $('.pic_error').html("");
        $('.image_error').html("");
        
        
    });
    
    
    $(document).on('change','.file_to_upload',function(){
        
        var postData = new FormData($('form')[1]);
        
        $.ajax({
            
            url:'../php/staff_profile_image_validation.php',
            type:'POST',
            data:postData,
            contentType:false,
            processData:false,
            cache:false,
            success:function(data){
                $('.image_error').html(data);
            }
            
        });
        
    });
    
    $(document).on('change','.file_to_upload',function(){
        
        var postData = new FormData($('form')[0]);
        
        $.ajax({
            
            url:'../php/staff_profile_image_validation.php',
            type:'POST',
            data:postData,
            contentType:false,
            processData:false,
            cache:false,
            success:function(data){
                $('.pic_error').html(data);
            }
            
        });
        
    });

});