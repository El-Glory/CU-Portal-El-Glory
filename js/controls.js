$(document).ready(function(){
  $("#profile-page").on('click', function(){
  	$(".profile-page").fadeIn(1000);
  	$(".course-evaluation").hide();
  	$(".pay-fees").hide();
  	$(".payment-receipt").hide();
  	$(".attendance-ca").hide();
  	$(".add-drop").hide();
    $('.course-registration').hide();
    $('.eds-practical').hide();
    $('.print-registration').hide();
    $('.print-transcript').hide();
    $('.print-clearance').hide();

  });

  $("#course-evaluation").on('click', function(){
  	$(".course-evaluation").fadeIn(1000);
  	$(".profile-page").hide();
  	$(".pay-fees").hide();
  	$(".payment-receipt").hide();
  	$(".attendance-ca").hide();
  	$(".add-drop").hide();
    $('.course-registration').hide();
    $('.eds-practical').hide();
    $('.print-registration').hide();
    $('.print-transcript').hide();
    $('.print-clearance').hide();

  });

  $("#pay-fees").on('click',function(){
    $(".pay-fees").fadeIn(1000);
    $(".profile-page").hide();
    $(".course-evaluation").hide();
    $(".payment-receipt").hide();
  	$(".attendance-ca").hide();
  	$(".add-drop").hide();
    $('.course-registration').hide();
    $('.eds-practical').hide();
    $('.print-registration').hide();
    $('.print-transcript').hide();
    $('print-clearance').hide();
  });

  $("#payment-receipt").on('click',function(){
  	$(".payment-receipt").fadeIn(1000);
  	$(".profile-page").hide();
  	$(".course-evaluation").hide();
  	$(".pay-fees").hide();
  	$(".attendance-ca").hide();
  	$(".add-drop").hide();
    $('.course-registration').hide();
    $('.eds-practical').hide();
    $('.print-registration').hide();
    $('.print-transcript').hide();
    $('.print-clearance').hide();
  });

 $("#attendance-ca").on('click',function(){
 	$(".attendance-ca").fadeIn(1000);
 	$(".payment-receipt").hide();
  	$(".profile-page").hide();
  	$(".course-evaluation").hide();
  	$(".pay-fees").hide();
  	$(".add-drop").hide();
    $('.course-registration').hide();
    $('.eds-practical').hide();
    $('.print-registration').hide();
    $('.print-transcript').hide();
    $('.print-clearance').hide();
 });

 $('#add-drop').on('click',function(){
   $('.add-drop').fadeIn(1000);
   $('.profile-page').hide();
   $('.payment-receipt').hide();
   $('.pay-fees').hide();
   $('.course-evaluation').hide();
   $('.attendance-ca').hide()
   $('.course-registration').hide();
   $('.eds-practical').hide();
   $('.print-registration').hide();
   $('.print-transcript').hide();
   $('.print-clearance').hide();
 });

 $('#course-registration').on('click',function(){
  $('.course-registration').fadeIn(1000);
   $('.add-drop').hide();
   $('.profile-page').hide();
   $('.payment-receipt').hide();
   $('.pay-fees').hide();
   $('.course-evaluation').hide();
   $('.attendance-ca').hide()
   $('.eds-practical').hide();
   $('.print-registration').hide();
   $('.print-transcript').hide();
   $('.print-clearance').hide();
 });

 $('#eds-practical').on('click',function(){
   $('.eds-practical').fadeIn(1000);
   $('.add-drop').hide();
   $('.profile-page').hide();
   $('.payment-receipt').hide();
   $('.pay-fees').hide();
   $('.course-evaluation').hide();
   $('.attendance-ca').hide()
   $('.course-registration').hide();
   $('.print-registration').hide();
   $('.print-transcript').hide();
   $('.print-clearance').hide();
 });

 $('#print-registration').on('click',function(){
  $('.print-registration').fadeIn(1000)
  $('.add-drop').hide();
   $('.profile-page').hide();
   $('.payment-receipt').hide();
   $('.pay-fees').hide();
   $('.course-evaluation').hide();
   $('.attendance-ca').hide()
   $('.course-registration').hide();
    $('.eds-practical').hide();
    $('.print-transcript').hide();
    $('.print-clearance').hide();
 });

 $('#unofficial-transcript').on('click',function(){
  $('.print-transcript').fadeIn(1000);
   $('.add-drop').hide();
   $('.profile-page').hide();
   $('.payment-receipt').hide();
   $('.pay-fees').hide();
   $('.course-evaluation').hide();
   $('.attendance-ca').hide()
   $('.course-registration').hide();
  $('.eds-practical').hide();
  $('.print-registration').hide();
  $('.print-clearance').hide();
 });

 $('#print-clearance').on('click',function(){
  $('.print-clearance').fadeIn(1000);
  $('.add-drop').hide();
   $('.profile-page').hide();
   $('.payment-receipt').hide();
   $('.pay-fees').hide();
   $('.course-evaluation').hide();
   $('.attendance-ca').hide()
   $('.course-registration').hide();
  $('.eds-practical').hide();
  $('.print-registration').hide();
  $('.print-transcript').hide()

 });
});