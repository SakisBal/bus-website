<?php

 get_header();

 require 'vendor/autoload.php';

 use PhpOffice\PhpSpreadsheet\IOFactory;
 $from = $_GET['from'];
 $to = $_GET['to'];
 $inputFileType = 'Xlsx';
 $inputFileName = __DIR__ . '/diadromes/'.$from.'-'.$to.'.xlsx';
 // Create a new Reader of the type defined in $inputFileType

 $spreadsheet = IOFactory::load($inputFileName);
 $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
 $title = $sheetData[1]['A'];



 ?>
 <main>
  <div style='width:70%;margin:0 auto;border-left:0px solid black;' >
   <div class='row'>
     <div class='col-lg-3'>
       <section>
         <div style='width:100%;margin:0 auto;border-left:0px solid white;'>
           <div class='row'>


         </div>
        </div>
       </section>
     </div>
     <div class='col-lg-12 dromologia' style='background-color:#FEFEFE;border-left:0px solid white;height:100%;'>
       <?php
       if( have_posts() ){
         while(have_posts()){
           the_post();
           ?>

           <div class='casual-post'>
             <h1 style="font-size:30px;color:#212529;"><b><?php the_title(); ?></b></h1>
             <div class='container-fluid single-thumbnail' style='background-image:url("<?php the_post_thumbnail_url(); ?>")'>
             </div>
             <div class='row'>
               <div class='col-lg-3'>
               </div>
               <div class='col-lg-9' style='margin-top:20px;'>
                 <p style="font-size:22px;"><b><?php echo $title; ?></b></p>
                 <?php
                 $theTable='<table class="dromologia-table" style="width:100%;padding:;margin:30px 0px 30px 0px;">';
                 foreach($sheetData as $data){

                   $theTable.='<tr>';
                   if ( is_array($data) ){

                     foreach($data as $td){
                       $theTable.='<td>'.$td.'</td>';
                     }
                   }
                   $theTable.='</tr>';
                 }
                 $theTable.='</table>';
                 //var_dump($theTable);
                 echo $theTable;

                 $j=0;
                 $from = $_GET['from'];
                 $to = $_GET['to'];
                 $inputFileType = 'Xlsx';
                 $inputFileName = __DIR__ . '/diadromes/'.$to.'-'.$from.'.xlsx';
                 // Create a new Reader of the type defined in $inputFileType

                 $spreadsheet = IOFactory::load($inputFileName);
                 $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
                 $title = $sheetData[1]['A'];
                 ?>
                    <p style="font-size:22px;"><b><?php echo $title; ?></b></p>
                 <?php
                 $theTable='<table class="dromologia-table" style="width:100%;padding:;margin:30px 0px 30px 0px;">';
                 foreach($sheetData as $data){

                   $theTable.='<tr>';
                   if ( is_array($data) ){

                     foreach($data as $td){
                       $theTable.='<td>'.$td.'</td>';
                     }
                   }
                   $theTable.='</tr>';
                 }
                 $theTable.='</table>';
                 //var_dump($theTable);
                 echo $theTable; ?>
                 <div id='invinsible-diadromes' style='opacity:0;'>
                   <?php  if (function_exists(clean_custom_menus_diadromes())) {clean_custom_menus_diadromes();} ?>
                 </div>
                 <div class='more-dromologia col-lg-11' style="margin-top:0px;">
                   <h3 style='text-align:center;margin-top:10px;color:#212121;font-size:20px;padding-bottom:10px;'> Θελετε να διαλεξετε αλλη <a href="http://localhost/wp-folder/wordpress/δρομολογια/">δρομολογιο</a>? </h3>
                 </div>

              </div>
            </div>
           </div>
           <?php
         }
      //   next_posts_link('older posts'); //the older posts

      //   previous_posts_link('newer posts');//gives you the newer posts
       }
       ?>
     </div>
   </div>
     </div>
   </div>
 </div>
 </main>
 <?php

  get_footer();

  ?>
