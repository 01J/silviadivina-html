window.onload = (function(){
    ge('showBox3').onclick=function(){
        // ������� ������ �� ������� ���� � ����. ������ �� ������� ���� ����������� �� ����� ������, � �������� href
        ge('bigPhoto3').src=this.href;
        // ������� ����
        ge('photoBox3').style.display='block';
        // ������� ����
        ge('shadow3').style.display='block'
        return false;
    }

    ge('closeBtn3').onclick=function(){
        // ������ ���� � ����
        ge('photoBox3').style.display='none';
        // ������ ����
        ge('shadow3').style.display='none';
        return false;
    }

});
 
function ge(el) {
    return (typeof el == 'string' || typeof el == 'number') ? document.getElementById(el) : el;
}
 
/* flapps.ru */