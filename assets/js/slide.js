var opacity1 = 0;
var opacity2 = 0;
var opacity3 = 0;
var opacity4 = 0;
var opacity5 = 0;
var opacity6 = 0;
var intervalID = 0;

function fadeInbtn1()
{
    intervalID = setInterval(btn1,20);
}

function btn1()
{
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    var text4 = document.getElementById("text4");
    var text5 = document.getElementById("text5");
    var text6 = document.getElementById("text6");
    opacity1 = Number(window.getComputedStyle(text1).getPropertyValue("opacity"));
    opacity2 = Number(window.getComputedStyle(text2).getPropertyValue("opacity"));
    opacity3 = Number(window.getComputedStyle(text3).getPropertyValue("opacity"));
    opacity4 = Number(window.getComputedStyle(text4).getPropertyValue("opacity"));
    opacity5 = Number(window.getComputedStyle(text5).getPropertyValue("opacity"));
    opacity6 = Number(window.getComputedStyle(text6).getPropertyValue("opacity"));
    if(opacity1 < 1)
    {
        opacity1 = opacity1 + 0.2;
        if(opacity2 > 0)
        {
            opacity2 = 0;
        }
        if(opacity3 > 0)
        {
            opacity3 = 0;
        }
        if(opacity4 > 0)
        {
            opacity4 = 0;
        }
        if(opacity5 > 0)
        {
            opacity5 = 0;
        }
        if(opacity6 > 0)
        {
            opacity6 = 0;
        }
        text1.style.opacity = opacity1;
        text2.style.opacity = opacity2;
        text3.style.opacity = opacity3;
        text4.style.opacity = opacity4;
        text5.style.opacity = opacity5;
        text6.style.opacity = opacity6;
    }
    else
    {
        clearInterval(intervalID);
    }
}

function fadeInbtn2()
{
    intervalID = setInterval(btn2,20);
}

function btn2()
{
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    var text4 = document.getElementById("text4");
    var text5 = document.getElementById("text5");
    var text6 = document.getElementById("text6");
    opacity1 = Number(window.getComputedStyle(text1).getPropertyValue("opacity"));
    opacity2 = Number(window.getComputedStyle(text2).getPropertyValue("opacity"));
    opacity3 = Number(window.getComputedStyle(text3).getPropertyValue("opacity"));
    opacity4 = Number(window.getComputedStyle(text4).getPropertyValue("opacity"));
    opacity5 = Number(window.getComputedStyle(text5).getPropertyValue("opacity"));
    opacity6 = Number(window.getComputedStyle(text6).getPropertyValue("opacity"));
    if(opacity2 < 1)
    {
        opacity2 = opacity2 + 0.2;
        if(opacity1 > 0)
        {
            opacity1 = 0;
        }
        if(opacity3 > 0)
        {
            opacity3 = 0;
        }
        if(opacity4 > 0)
        {
            opacity4 = 0;
        }
        if(opacity5 > 0)
        {
            opacity5 = 0;
        }
        if(opacity6 > 0)
        {
            opacity6 = 0;
        }
        text1.style.opacity = opacity1;
        text2.style.opacity = opacity2;
        text3.style.opacity = opacity3;
        text4.style.opacity = opacity4;
        text5.style.opacity = opacity5;
        text6.style.opacity = opacity6;
    }
    else
    {
        clearInterval(intervalID);
    }
}

function fadeInbtn3()
{
    intervalID = setInterval(btn3,20);
}

function btn3()
{
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    var text4 = document.getElementById("text4");
    var text5 = document.getElementById("text5");
    var text6 = document.getElementById("text6");
    opacity1 = Number(window.getComputedStyle(text1).getPropertyValue("opacity"));
    opacity2 = Number(window.getComputedStyle(text2).getPropertyValue("opacity"));
    opacity3 = Number(window.getComputedStyle(text3).getPropertyValue("opacity"));
    opacity4 = Number(window.getComputedStyle(text4).getPropertyValue("opacity"));
    opacity5 = Number(window.getComputedStyle(text5).getPropertyValue("opacity"));
    opacity6 = Number(window.getComputedStyle(text6).getPropertyValue("opacity"));
    if(opacity3 < 1)
    {
        opacity3 = opacity3 + 0.2;
        if(opacity2 > 0)
        {
            opacity2 = 0;
        }
        if(opacity1 > 0)
        {
            opacity1 = 0;
        }
        if(opacity4 > 0)
        {
            opacity4 = 0;
        }
        if(opacity5 > 0)
        {
            opacity5 = 0;
        }
        if(opacity6 > 0)
        {
            opacity6 = 0;
        }
        text1.style.opacity = opacity1;
        text2.style.opacity = opacity2;
        text3.style.opacity = opacity3;
        text4.style.opacity = opacity4;
        text5.style.opacity = opacity5;
        text6.style.opacity = opacity6;
    }
    else
    {
        clearInterval(intervalID);
    }
}

function fadeInbtn4()
{
    intervalID = setInterval(btn4,30);
}

function btn4()
{
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    var text4 = document.getElementById("text4");
    var text5 = document.getElementById("text5");
    var text6 = document.getElementById("text6");
    opacity1 = Number(window.getComputedStyle(text1).getPropertyValue("opacity"));
    opacity2 = Number(window.getComputedStyle(text2).getPropertyValue("opacity"));
    opacity3 = Number(window.getComputedStyle(text3).getPropertyValue("opacity"));
    opacity4 = Number(window.getComputedStyle(text4).getPropertyValue("opacity"));
    opacity5 = Number(window.getComputedStyle(text5).getPropertyValue("opacity"));
    opacity6 = Number(window.getComputedStyle(text6).getPropertyValue("opacity"));
    if(opacity4 < 1)
    {
        opacity4 = opacity4 + 0.2;
        if(opacity2 > 0)
        {
            opacity2 = 0;
        }
        if(opacity3 > 0)
        {
            opacity3 = 0;
        }
        if(opacity1 > 0)
        {
            opacity1 = 0;
        }
        if(opacity5 > 0)
        {
            opacity5 = 0;
        }
        if(opacity6 > 0)
        {
            opacity6 = 0;
        }
        text1.style.opacity = opacity1;
        text2.style.opacity = opacity2;
        text3.style.opacity = opacity3;
        text4.style.opacity = opacity4;
        text5.style.opacity = opacity5;
        text6.style.opacity = opacity6;
    }
    else
    {
        clearInterval(intervalID);
    }
}

function fadeInbtn5()
{
    intervalID = setInterval(btn5,20);
}

function btn5()
{
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    var text4 = document.getElementById("text4");
    var text5 = document.getElementById("text5");
    var text6 = document.getElementById("text6");
    opacity1 = Number(window.getComputedStyle(text1).getPropertyValue("opacity"));
    opacity2 = Number(window.getComputedStyle(text2).getPropertyValue("opacity"));
    opacity3 = Number(window.getComputedStyle(text3).getPropertyValue("opacity"));
    opacity4 = Number(window.getComputedStyle(text4).getPropertyValue("opacity"));
    opacity5 = Number(window.getComputedStyle(text5).getPropertyValue("opacity"));
    opacity6 = Number(window.getComputedStyle(text6).getPropertyValue("opacity"));
    if(opacity5 < 1)
    {
        opacity5 = opacity5 + 0.2;
        if(opacity2 > 0)
        {
            opacity2 = 0;
        }
        if(opacity3 > 0)
        {
            opacity3 = 0;
        }
        if(opacity4 > 0)
        {
            opacity4 = 0;
        }
        if(opacity1 > 0)
        {
            opacity1 = 0;
        }
        if(opacity6 > 0)
        {
            opacity6 = 0;
        }
        text1.style.opacity = opacity1;
        text2.style.opacity = opacity2;
        text3.style.opacity = opacity3;
        text4.style.opacity = opacity4;
        text5.style.opacity = opacity5;
        text6.style.opacity = opacity6;
    }
    else
    {
        clearInterval(intervalID);
    }
}

function fadeInbtn6()
{
    intervalID = setInterval(btn6,20);
}

function btn6()
{
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    var text4 = document.getElementById("text4");
    var text5 = document.getElementById("text5");
    var text6 = document.getElementById("text6");
    opacity1 = Number(window.getComputedStyle(text1).getPropertyValue("opacity"));
    opacity2 = Number(window.getComputedStyle(text2).getPropertyValue("opacity"));
    opacity3 = Number(window.getComputedStyle(text3).getPropertyValue("opacity"));
    opacity4 = Number(window.getComputedStyle(text4).getPropertyValue("opacity"));
    opacity5 = Number(window.getComputedStyle(text5).getPropertyValue("opacity"));
    opacity6 = Number(window.getComputedStyle(text6).getPropertyValue("opacity"));
    if(opacity6 < 1)
    {
        opacity6 = opacity6 + 0.2;
        if(opacity2 > 0)
        {
            opacity2 = 0;
        }
        if(opacity3 > 0)
        {
            opacity3 = 0;
        }
        if(opacity4 > 0)
        {
            opacity4 = 0;
        }
        if(opacity5 > 0)
        {
            opacity5 = 0;
        }
        if(opacity1 > 0)
        {
            opacity1 = 0;
        }
        text1.style.opacity = opacity1;
        text2.style.opacity = opacity2;
        text3.style.opacity = opacity3;
        text4.style.opacity = opacity4;
        text5.style.opacity = opacity5;
        text6.style.opacity = opacity6;
    }
    else
    {
        clearInterval(intervalID);
    }
}