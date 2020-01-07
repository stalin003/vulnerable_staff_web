$(document).ready(function(){
    
    $('.universal-more').click(function(){
        
        $('.navbar ul li').slideToggle();
        
        $('.universal-more-icon').toggleClass('fa-ellipsis-v');
        $('.universal-more-icon').toggleClass('fa-times');
        
    });
    
});