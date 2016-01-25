/**
 * Created by edwardhunton on 29/07/2015.
 */
$( document ).ready(function() {

   function whichPage(){

      var l = window.location.pathname;




      return l.split('/')[1];

   }

   function removeActive(){


      $('.nav li').removeClass('active');

   }

   function addActive(target){
      $('.'+target).addClass('active');
   }

   function switchActive(target){

      removeActive();
      addActive(target);

     /* if(target === 'contact'){
         $('#contactform').load('/templates/contactform.html');
      }*/


   }



   $('#nav').load('/templates/navbar.html', function(){
      switchActive(whichPage());
   });


   $('.footer').load('/templates/footer.html');




});