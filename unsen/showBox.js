window.onload = (function(){
    ge('showBox').onclick=function(){
        // ������� ������ �� ������� ���� � ����. ������ �� ������� ���� ����������� �� ����� ������, � �������� href
        ge('bigPhoto').src=this.href;
        // ������� ����
        ge('photoBox').style.display='block';
        // ������� ����
        ge('shadow').style.display='block'
        return false;
    }

    ge('closeBtn').onclick=function(){
        // ������ ���� � ����
        ge('photoBox').style.display='none';
        // ������ ����
        ge('shadow').style.display='none';
        return false;
    }

});
 
function ge(el) {
    return (typeof el == 'string' || typeof el == 'number') ? document.getElementById(el) : el;
}
 
/* flapps.ru */