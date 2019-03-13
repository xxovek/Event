
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

  function Amountfloat(txt,e)
        {
          var char = (window.event) ? event.keyCode  : e.which ;
            if(char > 47 && char < 58 || char=== 46 || char  === 8 )
            {
               var txtbx=document.getElementById(txt);

               var amount = document.getElementById(txt).value;
               var present=0;
               var count=0;

               if(amount.indexOf(".",present)||amount.indexOf(".",present+1)){}
               do
               {
               present=amount.indexOf(".",present);
               if(present!=-1)
                {
                 count++;
                 present++;
                 }
               }
               while(present!=-1);
               if(present==-1 && amount.length==0 && event.keyCode  === 46  )
               {
                    char=0;
                    return false;
               }

               if(count>=1 && char === 46)
               {
                 char=0;
                    return false;
               }
               if(count==1)
               {
                var lastdigits=amount.substring(amount.indexOf(".")+1,amount.length);
                if(lastdigits.length>=2 && char !=8)
                            {
                              char=0;
                              return false;
                              }
               }
                    return true;
            }
            else
            {
                  char=0;
                  return false;
            }
        }

   function Company_phone(inputtxt)
   {
     var phoneno1 = /^\+?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
     var phoneno2 = /^\d{10}$/;
     if(inputtxt.value.match(phoneno1) || inputtxt.value.match(phoneno2) )
           {
             return true;
           }
         else
           {
             var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Not a valid Phone Number</strong></font></div>";
               $('#msgid').html(msg);
       window.setTimeout(function() {
                 $(".alert").fadeTo(500, 0).slideUp(500, function(){
                     $(this).remove();
                 });
             }, 3000);
             $("#company_phone").val("");
           return false;
           }
   }

           function validateEmailCompany(emailField){
                   var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                   if (reg.test(emailField.value) == false)
                   {
                     var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Invalid Email Address</strong></font></div>";
                       $('#msgid').html(msg);
               window.setTimeout(function() {
                         $(".alert").fadeTo(500, 0).slideUp(500, function(){
                             $(this).remove();
                         });
                     }, 3000);
                       $("#company_email").val("");
                       return false;
                   }
                   return true;
           }

   function validateEmail(emailField){
           var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
           if (reg.test(emailField.value) == false)
           {
             var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Invalid Email Address</strong></font></div>";
               $('#msgid').html(msg);
       window.setTimeout(function() {
                 $(".alert").fadeTo(500, 0).slideUp(500, function(){
                     $(this).remove();
                 });
             }, 3000);
               $("#email").val("");
               return false;
           }
           return true;
   }
   function validateEmail23(emailField){
           var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
           if (reg.test(emailField.value) == false)
           {
             var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Invalid Email Address</strong></font></div>";
               $('#msgid').html(msg);
       window.setTimeout(function() {
                 $(".alert").fadeTo(500, 0).slideUp(500, function(){
                     $(this).remove();
                 });
             }, 3000);
               $("#email1").val("");
               return false;
           }
           return true;
   }

   function validateEmail1(emailField){
           var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
           if (reg.test(emailField.value) == false)
           {
             var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Invalid Email Address</strong></font></div>";
               $('#msgid').html(msg);
       window.setTimeout(function() {
                 $(".alert").fadeTo(500, 0).slideUp(500, function(){
                     $(this).remove();
                 });
             }, 3000);
               $("#cemail").val("");
               return false;
           }
           return true;
   }

   function validateEmail11(emailField){
           var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
           if (reg.test(emailField.value) == false)
           {
             var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Invalid Email Address</strong></font></div>";
               $('#msgid').html(msg);
       window.setTimeout(function() {
                 $(".alert").fadeTo(500, 0).slideUp(500, function(){
                     $(this).remove();
                 });
             }, 3000);
               $("#cemail1").val("");
               return false;
           }
           return true;
   }

   function phonenumber(inputtxt)
   {
     var phoneno1 = /^\+?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
     var phoneno2 = /^[0]?[789]\d{9}$/;
     if(inputtxt.value.match(phoneno1) || inputtxt.value.match(phoneno2) )
           {
             return true;
           }
         else
           {
             var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Not a valid Phone Number </strong></font></div>";
               $('#msgid').html(msg);
       window.setTimeout(function() {
                 $(".alert").fadeTo(500, 0).slideUp(500, function(){
                     $(this).remove();
                 });
             }, 3000);
             $("#phone").val("");
           return false;
           }
   }
   function phonenumber2(inputtxt)
   {
     var phoneno1 = /^\+?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
     var phoneno2 = /^[0]?[789]\d{9}$/;
     if(inputtxt.value.match(phoneno1) || inputtxt.value.match(phoneno2) )
           {
             return true;
           }
         else
           {
             var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Not a valid Phone Number </strong></font></div>";
               $('#msgid').html(msg);

       window.setTimeout(function() {
                 $(".alert").fadeTo(500, 0).slideUp(500, function(){
                     $(this).remove();
                 });
             }, 3000);
             $("#phone1").val("");
           return false;
           }
   }


   function phonenumber1(inputtxt)
   {
     var phoneno1 = /^\+?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
     var phoneno2 = /^\d{10}$/;
     if(inputtxt.value.match(phoneno1) || inputtxt.value.match(phoneno2) )
           {
             return true;
           }
         else
           {
             var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Not a Valid Phone Number</strong></font></div>";
               $('#msgid').html(msg);
       window.setTimeout(function() {
                 $(".alert").fadeTo(500, 0).slideUp(500, function(){
                     $(this).remove();
                 });
             }, 3000);
             $("#cphone").val("");
           return false;
           }
   }

   function phonenumber11(inputtxt)
   {
     var phoneno1 = /^\+?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
     var phoneno2 = /^\d{10}$/;
     if(inputtxt.value.match(phoneno1) || inputtxt.value.match(phoneno2) )
           {
             return true;
           }
         else
           {
             var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Not a Valid Phone Number</strong></font></div>";
               $('#msgid').html(msg);
       window.setTimeout(function() {
                 $(".alert").fadeTo(500, 0).slideUp(500, function(){
                     $(this).remove();
                 });
             }, 3000);
             $("#cphone1").val("");
           return false;
           }
   }

   function validatePrice(txt, event) {
       var specialKeys = new Array();
     specialKeys.push(8);
     specialKeys.push(9);
     specialKeys.push(46);
     specialKeys.push(36);
     specialKeys.push(35);
     specialKeys.push(37);
     specialKeys.push(39);
     specialKeys.push(32);
       var charCode = (event.which) ? event.which : event.keyCode

         if ((charCode == 46)|| (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode)) {
           if (txt.value.indexOf(".") < 0 ||  (charCode==0) || (charCode==8) ||((charCode==127) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode))){
             var txtlen = txt.value.length;
             var dotpos = txt.value.indexOf(".");
             if((dotpos==-1) && (txtlen ==0))
             {
               return false;
             }
               return true;
             }
           else{
               return false;
             }
       }

       if (txt.value.indexOf(".") > 0) {
           var txtlen = txt.value.length;
           var dotpos = txt.value.indexOf(".");
           if ((txtlen - dotpos) > 2){
              if((charCode==0) || (charCode==8)||((charCode==127 )|| (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode))){
              return true;
            }
               return false;
             }
       }

       if((charCode > 31) && (charCode < 48) || (charCode > 57)){
           return false;
         }
   }

   function validateDiscount() {
   $('#tax_name1').on('input', function() {
     this.value = this.value
       .replace(/[^\d.]/g, '')
       .replace(/(^[\d]{2})[\d]/g, '$1')
       .replace(/(\..*)\./g, '$1')
       .replace(/(\.[\d]{2})./g, '$1');
   });
 }


function AlphaBets(e, t){

  var specialKeys = new Array();
specialKeys.push(8);
specialKeys.push(9);
specialKeys.push(46);
specialKeys.push(36);
specialKeys.push(35);
specialKeys.push(37);
specialKeys.push(39);

  var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
  var ret = ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (keyCode == 32) || (keyCode == 0) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
  return ret;

}

function IsAlphaNumericValue(e) {

            var specialKeys = new Array();
          specialKeys.push(8);
          specialKeys.push(9);
          specialKeys.push(46);
          specialKeys.push(36);
          specialKeys.push(35);
          specialKeys.push(37);
          specialKeys.push(39);
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ||(keyCode == 32)||(keyCode ==0)|| (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
            return ret;
        }
