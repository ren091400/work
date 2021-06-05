window.onload=function(){
    let div=document.querySelector(".box"),
        left=document.querySelector(".left"),
        right=document.querySelector(".right"),
        lis=document.querySelectorAll(".circle li"),
        img=document.querySelector(".lunbo"),
        i=0;

    function change(){
        i++;
        lis[0].className="";
        lis[1].className="";
        lis[2].className="";
        if(i>3){
            i=1;
        }
        img.src="img/"+i+".jpg";
        lis[i-1].className="active";
    }
    right.onclick=function () {
        i++;
        lis[0].className="";
        lis[1].className="";
        lis[2].className="";
        if(i>3){
            i=1;
        }
        img.src="img/"+i+".jpg";
        lis[i-1].className="active";
    }
    left.onclick=function(){
        i--;
        lis[0].className="";
        lis[1].className="";
        lis[2].className="";
        if(i<=0){
            i=3;
        }
        img.src="img/"+i+".jpg";
        lis[i-1].className="active";
    }
    let t=setInterval(change,2000);
    div.onmouseover=function(){
        clearInterval(t);
    }
    div.onmouseout=function(){
        t=setInterval(change,2000);
    }
    for(let i=0;i<lis.length;i++){
        lis[i].index=i;
        lis[i].onmousemove=function(){
            for(let i=0;i<lis.length;i++){
                lis[i].className="";
            }
            let num=i+1;
            img.src="img/"+num+".jpg";
            lis[i].className="active";
        }
    }
    let input=document.querySelector(".h4 .myinput1"),
        ul=document.querySelector(".h4 ul"),
        lis1=document.querySelectorAll(".h4 li");
    input.onfocus=function(){
        input.value="";
        ul.style.display="block";
    }
    input.onblur=function(){
        input.value="Red Mi";
    }
    for(let i=0;i<lis1.length;i++){
        lis1[i].index=i;
        lis1[i].onclick=function(){
            input.value=lis1[i].innerText;
            ul.style.display="none";
        }
    }
    let lis2=document.querySelectorAll(".fb li"),
        divs1=document.querySelectorAll(".di div"),
        div1=document.querySelector(".ff");
    for(let i=0;i<lis2.length;i++){
        lis2[i].index=i;
        lis2[i].onmousemove=function(){
            for(let i=0;i<lis2.length;i++){
                lis2[i].className="";
                divs1[i].className="";
            }
            this.className="active";
            divs1[this.index].className="act";
        }
    }
    for(let i=0;i<divs1.length;i++){
        divs1[i].onmouseout=function(){
            for(let i=0;i<divs1.length;i++){
                lis2[i].className="";
                divs1[i].className="";
            }
        }
    }

//广告
    let gg=document.querySelector(".gg"),
        a=document.querySelector(".gg a");
    let t1=setTimeout(view,3000);
    function view(){
        gg.style.display="block";
        clearTimeout(t);
        t1=setTimeout(hid,3000);
    }
    function hid(){
        gg.style.display="none";
    }
    gg.onmousemove=function(){
        clearTimeout(t);
    }
    gg.onmouseout=function(){
        t1=setTimeout(hid,3000);
    }
    a.onclick=function(){
        hid();
    }

/**小米闪购**/
let left1=document.querySelector(".left1");
let r=document.querySelector("#right1"),
    AA=document.querySelector(".AA"),
    BB=document.querySelector(".BB"),
    m=1;

r.onclick=function() {
    BB.style.left=0+"px";
    AA.style.left=982+"px";

}
left1.onclick=function () {
    AA.style.left=0+"px";
    BB.style.left=-982+"px";
}
}

