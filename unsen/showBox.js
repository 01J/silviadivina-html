window.onload = (function(){
    ge('showBox').onclick=function(){
        // заменим ссылку на большое фото в окне. Ссылку на большое фото вытаскиваем из самой ссылки, в атрибуте href
        ge('bigPhoto').src=this.href;
        // покажем тень
        ge('photoBox').style.display='block';
        // откроем окно
        ge('shadow').style.display='block'
        return false;
    }

    ge('closeBtn').onclick=function(){
        // уберем окно с фото
        ge('photoBox').style.display='none';
        // уберем тень
        ge('shadow').style.display='none';
        return false;
    }

});
 
function ge(el) {
    return (typeof el == 'string' || typeof el == 'number') ? document.getElementById(el) : el;
}
 
/* flapps.ru */