
Slider('slider',3000);

function Slider(mainBlockId,speed) {
var element = document.getElementById(mainBlockId).children,
    imgAmount = element.length;

var Myswitch = 0,
    t = 0;

for (var i = imgAmount - 1; i + 1 != 0; i--)
    element[t++].style.zIndex = i;

setInterval(function(){ fadein()
}, speed);

function fadein(){
    if(Myswitch < imgAmount  ) {
        document.getElementById(mainBlockId).getElementsByTagName('img')[Myswitch++].className = 'fadeOut';
        if(Myswitch ==imgAmount)
            Myswitch =0;
    }
    document.getElementById(mainBlockId).getElementsByTagName('img')[Myswitch].className = '';
}
}



