function goToDiadromes(){
  var yourSelect1 = document.getElementById('select1').value;
  var yourSelect2 = document.getElementById('select2').value;
  if(yourSelect1==yourSelect2){
    document.getElementById('warning').innerHTML='invalid destination';
  }
  else{
    window.location.replace('localhost/wp-folder/wordpress/διαδρομεσ?from='+yourSelect1+'&'+'to='+yourSelect2 );
  }
}
 jQuery(document).ready(function(){
   if(document.getElementById('diadromes-apo-pros')!=null){
     document.getElementById('diadromes-apo-pros').innerHTML=createOptions('first-page');
   }




   /*
   ----------------------
    ||| STRING AREA |||
   ----------------------
   */

   ekptwseiesStrCom = "<div class='row'><div class='col-lg-12'>\
     <h3 style='padding:40px 60px;margin-top:7px;border-bottom:1px dashed #33B5B5'>Γενικές εκπτώσεις εισιτηρίων </h3>\
     </div></div><div class='row'><div class='col-lg-12'><h3 style='padding:40px 60px;'> Προσφορές- εκπτώσεις της ΚΤΕΛ Τρικάλων</h3>\
     </div></div>";

   ekptwseiesStrPho = "<div class='row' style='margin-top:10%;'><div class='col-lg-12 text-center'>\
     <h3 style='padding:20px 60px;margin-top:60px;border-bottom:1px dashed #33B5B5;font-size:22px;'>Γενικές εκπτώσεις εισιτηρίων </h3>\
     </div></div><div class='row'><div class='col-lg-12'>\
     <h3 style='padding:20px 60px;font-size:22px;'> Προσφορές- εκπτώσεις της ΚΤΕΛ Τρικάλων</h3></div></div>";

   selectStrFp = '<div class="row"><div  class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center apo">\
     <h1 class="apo-main">ΑΠΟ:</h1><div class="select select-apo" ><select id="select1">';

   selectStrEndFp = '</select></div></div>';

   select2StrFp = '<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center pros"  style="margin-top:100px;">\
     <h1 class="pros-main">ΠΡΟΣ:</h1><div class="select select-pros"><select id="select2">';

   select2StrEndFp = '</select></div></div><button onclick="goToDiadromes();" style="border:1px solid black;margin-left:370px;" type="submit" class="btn btn-large">sumbit</button><p id="warning"></p>';

   selectStrEndSp = '</select></div></div>';

   select2StrSp = '<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-cente pros"  style="margin-top:-80px;margin-bottom:50px;">\
    <h1 style="margin-left:170px;font-size:18px;color:#212121">ΠΡΟΣ</h1><div class="select" ><select id="select2">';

   select2StrEndSp = '</select></div></div><button onclick="goToDiadromes();"style="position:absolute;margin:100px;margin-left:330px;border:1px solid #333333;" type="submit" class="btn btn-large">sumbit</button><p id="warning"></p>';

   selectStrPp = '<div class="row"><div  class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center apo" style="margin-top:60px;">\
    <h1 style="margin-left:0px;margin-top:80px;margin-bottom:20px;font-size:18px;color:#212121;">ΑΠΟ</h1>\
    <div class="select" style="margin-left:-0px;"><select id="select1" ><optgroup>';

   selectStrEndPp = '</select></optgroup></div></div>';

   select2StrStrPp = '<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-6  text-center"  style="margin-top:-80px;margin-bottom:50px;">\
     <h1 style="margin-left:0px;margin-top:120px;margin-bottom:20px;font-size:18px;color:#212121;">ΠΡΟΣ</h1>\
     <div class="select" style="margin-left:0px;" ><select id="select2"><optgroup>';

   select2StrEndPp = '</select></optgroup></div></div><button onclick="goToDiadromes();"style=";border:1px solid #333333;margin:0 auto;" type="submit" class="btn btn-large ">sumbit</button><p id="warning"></p>';











 //FUNCTION AREA <---------------------------> :D
   function showHisContent(x){
     var option=document.getElementsByClassName('active-p')[0].innerHTML;
     device='computer';
     if(jQuery(window).width()<600){
       device='phone';
     }
     console.log(device);
     if(device=='computer'){
       if(option=='ΔΡΟΜΟΛΟΓΙΑ'){
         document.getElementsByClassName('tab-content')[0].innerHTML=createOptions('first-page');
       }
       else if(option=='ΣΥΝΔΕΣΕΙΣ'){
           document.getElementsByClassName('tab-content')[0].innerHTML='syndeseis';
       }
       else if(option=='ΥΠΗΡΕΣΙΕΣ'){
         document.getElementsByClassName('tab-content')[0].innerHTML='yphresies';
       }
       else{
         document.getElementsByClassName('tab-content')[0].innerHTML= ekptwseiesStrCom;
       }
     }
      else{
        if(option=='ΔΡΟΜΟΛΟΓΙΑ'){
          document.getElementsByClassName('tab-content')[0].innerHTML=createOptions('phone');
        }
        else if(option=='ΣΥΝΔΕΣΕΙΣ'){
            document.getElementsByClassName('tab-content')[0].innerHTML='syndeseis';
        }
        else if(option=='ΥΠΗΡΕΣΙΕΣ'){
          document.getElementsByClassName('tab-content')[0].innerHTML='yphresies';
        }
        else{
          document.getElementsByClassName('tab-content')[0].innerHTML=ekptwseiesStrPho;
        }
      }
   }                                                    /*   ektpwseis   <div class='row'>
                                                                   <div class='col-lg-12'>
                                                                     <h3 style='padding:40px 60px;margin-top:7px;border-bottom:1px dashed #33B5B5'> Γενικές εκπτώσεις εισιτηρίων </h3>
                                                                   </div>
                                                                 </div>
                                                                 <div class='row'>
                                                                   <div class='col-lg-12'>
                                                                     <h3 style='padding:40px 60px;'> Προσφορές- εκπτώσεις της ΚΤΕΛ Τρικάλων</h3>
                                                                   </div>
                                                                 </div>
  ;*/

  CurrentlySelected=1;

  function changeSelected(){
    CurrentlySelected++;
    console.log('tab-'+CurrentlySelected);
    if(CurrentlySelected==4){
      CurrentlySelected=0;
    }
    jQuery('.tab-'+CurrentlySelected).addClass('active').attr('id','active-tab').find('p').addClass('active-p');;
    jQuery('.tabs').css('width','0px');
    jQuery('.tabs p').css('display','none');

    var activeTabPMargin = '36%';
    var activeTabMargin = '0%';

    if(CurrentlySelected == 2){
      activeTabMargin = '-1.1%';
    }
    else if(CurrentlySelected == 3){
      activeTabMargin = '-0.4%';
    }
    else if(CurrentlySelected == 0){
      activeTabPMargin = '30%';
      activeTabMargin = '0.5%';
    }

    jQuery('#active-tab').css({
      'margin-left' : activeTabMargin ,
      'width' : '80%',
      'position' : 'absolute',
    });

    jQuery('#active-tab p').css({
      'margin-left' : activeTabPMargin,
      'display' : 'block',
      'position' : 'absolute'
    });

  }



  if(jQuery('.blog-height').css('height')!=undefined){
     elementHeight=jQuery('.blog-height').css('height');
     for(i=0;i<=elementHeight.length;i++){
       if(elementHeight[i]=='p'){
         number=i;
       }
     }
     elementHeight=parseInt(elementHeight.slice(0,number));
   }



   jQuery(window).scroll(function(){
     scroll = jQuery(window).scrollTop();
     if(scroll>=470 && scroll<elementHeight-400){
       jQuery('.ads').first().css('margin-top',''+scroll-460+'px');
     }
     else if( scroll>=elementHeight-100 && elementHeight>700){
       jQuery('.ads').first().css('margin-top',''+elementHeight-920+'px');
     }
   });




   function createOptions(main){
     if(main=='first-page'){
       var str = document.getElementById('invinsible-diadromes').innerHTML;
       var array1 = [];
       str = str.split(' ');
       array1 = str.filter(function(x){
          return x!="";
       });
       select=selectStrFp;
       select2=select2StrFp;
       for(i = 1 ; i < array1.length ; i++){
         select+='<option value="'+array1[i]+'">'+array1[i]+'</option>';
         if(i==1){
          select2+='<option value="'+array1[i]+'">'+array1[i]+'</option>';
        }
         else{
             select2+='<option value="'+array1[i]+'">'+array1[i]+'</option>';
         }
       }
       select+=selectStrEndFp;
       select2+=select2StrEndFp;
       return select+select2+'</div>';
     }
     else if(main=='second-page'){
       var str = document.getElementById('invinsible-diadromes').innerHTML;
       var array1 = [];
       str = str.split(' ');
       array1 = str.filter(function(x){
          return x!="";
       });
       select=selectStrSp;
       select2=select2StrSp;
         select+='<option value="'+array1[i]+'">'+array1[i]+'</option>';
         if(i==1){
          select2+='<option value="'+array1[i]+'">'+array1[i]+'</option>';
        }
         else{
             select2+='<option value="'+array1[i]+'">'+array1[i]+'</option>';
         }
       
       select+=selectStrEndSp;
       select2+=select2StrEndSp;

       return select+select2+'</div>';
     }
     else {
       var str = document.getElementById('invinsible-diadromes').innerHTML;
       var array1 = [];
       str = str.split(' ');
       array1 = str.filter(function(x){
          return x!="";
       });
       select=selectStrPp;
       select2=select2StrStrPp;
       for(i = 1 ; i < array1.length ; i++){
         select+='<option value="'+array1[i]+'" >'+array1[i]+'</option>';
         if(i==1){
          select2+='<option value="'+array1[i]+'" >'+array1[i]+'</option>';
        }
         else{
             select2+='<option value="'+array1[i]+'">'+array1[i]+'</option>';
         }
       }
       select+= selectStrEndPp;
       select2+= select2StrEndPp;

       return select+select2+'</div>';
     }
   }




   function goToDiadromes(){
     var yourSelect1 = document.getElementById('select1');
     var yourSelect2 = document.getElementById('select2');
     window.location.replace('http://localhost/wp-folder/wordpress/page-96.php?from='+yourSelect1+'&'+'to='+yourSelect2);
   }



   function startRolling(whichOne){
     jQuery('.'+whichOne).hover(function(){
       jQuery(this).addClass('animated rubberBand');
     },function(){
       jQuery(this).removeClass('animated rubberBand');
     });
   }



   function fadeInOut(imageUrl){
     stack=0; //we use this because when i go from one image to another the url changes to another image
     jQuery('.'+imageUrl).hover(function(){
       jQuery(this).animate({
         opacity:'0.8',
       },100,function(){
         if(stack==0){
          the_url=jQuery(this).css('background-image');
          stack+=1;
         }
         jQuery(this).css('background-image','url("")');
         jQuery(this).animate({
           opacity:'1',
           backgroundColor:'#007AFF'
         },100);
         jQuery('info-foot p').css('color','white');
         jQuery('.'+imageUrl+'1').css('color','white');
         jQuery('.'+imageUrl+'3').css('color','#FFFFFF');
         jQuery('.'+imageUrl+'2').css('color','#0067DD');
         jQuery('.'+imageUrl+'1').fadeIn(150);
         jQuery('.'+imageUrl+'2').fadeIn(150);
       });
     },function(){
       stack=0;
       jQuery(this).animate({
         opacity:'0.8',
       },50,function(){
         jQuery(this).css("background-image",the_url);
         jQuery(this).animate({
           opacity:'1',
           backgroundColor:'#007AFF'
         },100);
         jQuery('info-foot p').css('color','black');
         jQuery('.'+imageUrl+'3').css('color','#000000');
         jQuery('.'+imageUrl+'1').fadeOut(0);
         jQuery('.'+imageUrl+'2').fadeOut(0);
       });

     });
   }



   function fadeInOut2(imageUrl){
     stack=0; //we use this because when i go from one image to another the url changes to another image
     jQuery('.'+imageUrl).hover(function(){
       jQuery(this).animate({
         opacity:'0.8',
       },100,function(){
         if(stack==0){
          the_url=jQuery(this).css('background-image');
          stack+=1;
         }
         jQuery(this).css('background-image','url("")');
         jQuery(this).animate({
           opacity:'1',
           backgroundColor:'#007AFF'
         },100);
         jQuery('.'+imageUrl+'1').css('color','white');
         jQuery('.'+imageUrl+'3').css('color','#FFFFFF');
         jQuery('.'+imageUrl+'2').css('color','#FFFFFF');
         jQuery('.'+imageUrl+'1').fadeIn(150);

       });
     },function(){
       stack=0;
       jQuery(this).animate({
         opacity:'0.8',
       },50,function(){
         jQuery(this).css("background-image",the_url);
         jQuery(this).animate({
           opacity:'1',
           backgroundColor:'#007AFF'
         },100);
         jQuery('.'+imageUrl+'3').css('color','#FEFEFE');
         jQuery('.'+imageUrl+'1').fadeOut(0);
         jQuery('.'+imageUrl+'2').css('color','#FEFEFE');
       });

     });
   }
   //END OF FUNCTION AREA <-------------------------> :)


   //MAIN PROGRAMM

   jQuery('.fb2').hover(startRolling('fb2'));
   jQuery('.yt2').hover(startRolling('yt2'));
   jQuery('.gm2').hover(startRolling('gm2'));
   jQuery('.plep').hover(fadeInOut('plep'));
   jQuery('.mepa').hover(fadeInOut('mepa'));
   jQuery('.onei').hover(fadeInOut('onei'));
   jQuery('.tota').hover(fadeInOut('tota'));
   jQuery('.firstNew').hover(fadeInOut2('firstNew'));
   jQuery('.secondNew').hover(fadeInOut2('secondNew'));
   jQuery('.thirdNew').hover(fadeInOut2('thirdNew'));
   jQuery('.fourthNew').hover(fadeInOut2('fourthNew'));
   jQuery('.fifthNew').hover(fadeInOut2('fifthNew'));
   jQuery('.sixthNew').hover(fadeInOut2('sixthNew'));

   jQuery('.tabs').click(function(){
     if(jQuery(window).width()>600){
       console.log('working good');
          jQuery('.main-content').find('.active').find('p').removeClass('active-p');
          jQuery('.main-content').find('.active').removeClass('active');
          jQuery(this).addClass('active');
          jQuery(this).find('p').addClass('active-p');
          showHisContent();
        }
        else{
          console.log('clicked');
          jQuery('.main-content').find('.active').attr('id','');
          jQuery('.main-content').find('.active').find('p').removeClass('active-p');
          jQuery('.main-content').find('.active').removeClass('active');
          changeSelected();
          showHisContent();
        }
    });


});
