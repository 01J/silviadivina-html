window.onload = (function(){
    ge('showBox1').onclick=function(){
        // заменим ссылку на большое фото в окне. Ссылку на большое фото вытаскиваем из самой ссылки, в атрибуте href
        ge('bigPhoto1').src=this.href;
        // покажем тень
        ge('photoBox1').style.display='block';
        // откроем окно
        ge('shadow1').style.display='block'
        return false;
    }

    ge('closeBtn1').onclick=function(){
        // уберем окно с фото
        ge('photoBox1').style.display='none';
        // уберем тень
        ge('shadow1').style.display='none';
        return false;
    }

});
 
function ge(el) {
    return (typeof el == 'string' || typeof el == 'number') ? document.getElementById(el) : el;
}
 
/* flapps.ru */