<?php 
   $getData = array();
   booking_book($getData);
   function booking_book(&$getData)
   {
    $function = 'view';
    if(isset($_GET['action'])){
      $function = $_GET['action'];
    }
    $function($getData);
  }

   function view(&$getData){
           $getData['view'] = model_view();
           $getData['page'] = "books/view";
     }

     function detail(&$getData){
      $getData['detail'] = model_detail();
      $getData['page'] = "books/detail";
  }
?>