window.onload = (function(){
    ge('showBox2').onclick=function(){
        // ������� ������ �� ������� ���� � ����. ������ �� ������� ���� ����������� �� ����� ������, � �������� href
        ge('bigPhoto2').src=this.href;
        // ������� ����
        ge('photoBox2').style.display='block';
        // ������� ����
        ge('shadow2').style.display='block'
        return false;
    }

    ge('closeBtn2').onclick=function(){
        // ������ ���� � ����
        ge('photoBox2').style.display='none';
        // ������ ����
        ge('shadow2').style.display='none';
        return false;
    }

});
 
function ge(el) {
    return (typeof el == 'string' || typeof el == 'number') ? document.getElementById(el) : el;
}
 
/* flapps.ru */