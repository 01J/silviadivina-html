window.onload = (function(){
    ge('showBox1').onclick=function(){
        // ������� ������ �� ������� ���� � ����. ������ �� ������� ���� ����������� �� ����� ������, � �������� href
        ge('bigPhoto1').src=this.href;
        // ������� ����
        ge('photoBox1').style.display='block';
        // ������� ����
        ge('shadow1').style.display='block'
        return false;
    }

    ge('closeBtn1').onclick=function(){
        // ������ ���� � ����
        ge('photoBox1').style.display='none';
        // ������ ����
        ge('shadow1').style.display='none';
        return false;
    }

});
 
function ge(el) {
    return (typeof el == 'string' || typeof el == 'number') ? document.getElementById(el) : el;
}
 
/* flapps.ru */