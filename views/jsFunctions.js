var exported={
  SHC:function(){
    var option=document.getElementsByClassName('active-p')[0].innerHTML;
    console.log(option);
    if(option=='ΔΡΟΜΟΛΟΓΙΑ'){
      document.getElementsByClassName('tab-content')[0].innerHTML='dromologia';
    }
    else if(option=='ΣΥΝΔΕΣΕΙΣ'){
        document.getElementsByClassName('tab-content')[0].innerHTML='syndeseis';
    }
    else if(option=='ΥΠΗΡΕΣΙΕΣ'){
      document.getElementsByClassName('tab-content')[0].innerHTML='yphresies';
    }
    else{
      document.getElementsByClassName('tab-content')[0].innerHTML='ekptwseis';
    }
  }
  FIO:function(imageUrl){
    $('.'+imageUrl).hover(function(){
      $(this).animate({
        opacity:'0.8',
      },250,function(){
        $(this).removeClass(imageUrl);
        $(this).animate({
          opacity:'1',
          backgroundColor:'#007AFF'
        },250);
        $('info-foot p').css('color','white');
        $('.'+imageUrl+'1').css('color','white');
        $('.'+imageUrl+'3').css('color','#FFFFFF');
        $('.'+imageUrl+'2').css('color','#0067DD');
        $('.'+imageUrl+'1').fadeIn(150);
        $('.'+imageUrl+'2').fadeIn(150);
      });
    },function(){
      $(this).animate({
        opacity:'0.8',
      },250,function(){
        $(this).addClass(imageUrl);
        $(this).animate({
          opacity:'1',
          backgroundColor:'#007AFF'
        },250);
        $('info-foot p').css('color','black');
        $('.'+imageUrl+'3').css('color','#000000');
        $('.'+imageUrl+'1').fadeOut(0);
        $('.'+imageUrl+'2').fadeOut(0);
      });

    });
  }
}

modules.exports = exported;
