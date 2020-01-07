window.onscroll = function(){scrollFunction()};

function scrollFunction()
{
    if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200 )
        {
            document.getElementById("logo").style.width = "0%";
            document.getElementById("logo").style.padding = "0px";
        }
    else if(document.documentElement.scrollTop < 1 )
        {
            document.getElementById("logo").style.width = "12%";
            document.getElementById("logo").style.padding = "10px";
        }
}