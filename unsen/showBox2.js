window.onload = (function(){
    ge('showBox2').onclick=function(){
        // заменим ссылку на большое фото в окне. Ссылку на большое фото вытаскиваем из самой ссылки, в атрибуте href
        ge('bigPhoto2').src=this.href;
        // покажем тень
        ge('photoBox2').style.display='block';
        // откроем окно
        ge('shadow2').style.display='block'
        return false;
    }

    ge('closeBtn2').onclick=function(){
        // уберем окно с фото
        ge('photoBox2').style.display='none';
        // уберем тень
        ge('shadow2').style.display='none';
        return false;
    }

});
 
function ge(el) {
    return (typeof el == 'string' || typeof el == 'number') ? document.getElementById(el) : el;
}
 
/* flapps.ru */