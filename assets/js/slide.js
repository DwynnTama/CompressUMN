var opacity1 = 0;
var opacity2 = 0;
var opacity3 = 0;
var intervalID = 0;

function fadeInbtn1()
{
    intervalID = setInterval(btn1,30);
}

function btn1()
{
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    opacity1 = Number(window.getComputedStyle(text1).getPropertyValue("opacity"));
    opacity2 = Number(window.getComputedStyle(text2).getPropertyValue("opacity"));
    opacity3 = Number(window.getComputedStyle(text3).getPropertyValue("opacity"));
    if(opacity1 < 1)
    {
        opacity1 = opacity1 + 0.1;
        if(opacity2 > 0)
        {
            opacity2 = 0;
        }
        if(opacity3 > 0)
        {
            opacity3 = 0;
        }
        text1.style.opacity = opacity1;
        text2.style.opacity = opacity2;
        text3.style.opacity = opacity3;
    }
    else
    {
        clearInterval(intervalID);
    }
}

function fadeInbtn2()
{
    intervalID = setInterval(btn2,30);
}

function btn2()
{
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    opacity1 = Number(window.getComputedStyle(text1).getPropertyValue("opacity"));
    opacity2 = Number(window.getComputedStyle(text2).getPropertyValue("opacity"));
    opacity3 = Number(window.getComputedStyle(text3).getPropertyValue("opacity"));
    if(opacity2 < 1)
    {
        opacity2 = opacity2 + 0.1;
        if(opacity1 > 0)
        {
            opacity1 = 0;
        }
        if(opacity3 > 0)
        {
            opacity3 = 0;
        }
        text1.style.opacity = opacity1;
        text2.style.opacity = opacity2;
        text3.style.opacity = opacity3;
    }
    else
    {
        clearInterval(intervalID);
    }
}

function fadeInbtn3()
{
    intervalID = setInterval(btn3,30);
}

function btn3()
{
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    opacity1 = Number(window.getComputedStyle(text1).getPropertyValue("opacity"));
    opacity2 = Number(window.getComputedStyle(text2).getPropertyValue("opacity"));
    opacity3 = Number(window.getComputedStyle(text3).getPropertyValue("opacity"));
    if(opacity3 < 1)
    {
        opacity3 = opacity3 + 0.1;
        if(opacity1 > 0)
        {
            opacity1 = 0;
        }
        if(opacity2 > 0)
        {
            opacity2 = 0;
        }
        text1.style.opacity = opacity1;
        text2.style.opacity = opacity2;
        text3.style.opacity = opacity3;
    }
    else
    {
        clearInterval(intervalID);
    }
}