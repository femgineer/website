 var $ = jQuery.noConflict();
 $(document).ready(function () {

     $('.bxslider').bxSlider({
         mode:'fade',
         auto: true,
         controls:false,
         pager:false,
         responsive:true,
		 speed:4000
     });
     
     $('.form-details input').placeholder();

     var form1 = $("#guide-form");
     form1.validate({
         ignore: [],
         rules: {
             fname: {
                 required: true
             },
             email: {
                 required: true,
                 email: true
             }
         },
         errorClass: 'error',
         validClass: 'valid',
         errorElement: 'div',
         highlight: function (element, errorClass, validClass) {
             $(element).addClass(errorClass).removeClass(validClass);
         },
         unhighlight: function (element, errorClass, validClass) {
             $(element).removeClass(errorClass).addClass(validClass);
         },
         messages: {
             fname: {
                 required: "Please enter firstname"
             },
             email: {
                 required: "Please enter email address",
                 email: "Please enter valid email address"
             }
         },
         errorPlacement: function (error, element) {
             error.insertAfter(element);
         },
         submitHandler: function (form) { // for demo
             form.submit();
             $('#guide-form .successmsg').fadeIn();
             setTimeout(function () {
                 $('#guide-form .successmsg').fadeOut();
                 $('#guide-form #result').fadeOut();
                 $("#guide-form")[0].reset();
                 $("#guide-form .valid").each(function () {
                     $(this).removeClass("valid")
                 })
             }, 3000)
             return false;
         }
     });

     $('#guide-form .txt-box').on('blur', function () {
         form1.validate().element(this);
     })

     /*==========================================================*/

     var form2 = $("#guide-form-2");
     form2.validate({
         ignore: [],
         rules: {
             fname: {
                 required: true
             },
             email: {
                 required: true,
                 email: true
             }
         },
         errorClass: 'error',
         validClass: 'valid',
         errorElement: 'div',
         highlight: function (element, errorClass, validClass) {
             $(element).addClass(errorClass).removeClass(validClass);
         },
         unhighlight: function (element, errorClass, validClass) {
             $(element).removeClass(errorClass).addClass(validClass);
         },
         messages: {
             fname: {
                 required: "Please enter firstname"
             },
             email: {
                 required: "Please enter email address",
                 email: "Please enter valid email address"
             }
         },
         errorPlacement: function (error, element) {
             error.insertAfter(element);
         },
         submitHandler: function (form) { // for demo
             form.submit();
             $('#guide-form-2 .successmsg').fadeIn();
             setTimeout(function () {
                 $('#guide-form-2 .successmsg').fadeOut();
                 $('#guide-form-2 #result').fadeOut();
                 $("#guide-form-2")[0].reset();
                 $("#guide-form-2 .valid").each(function () {
                     $(this).removeClass("valid")
                 })
             }, 3000)
             return false;
         }
     });

     $('#guide-form-2 .txt-box').on('blur', function () {
         form2.validate().element(this);
     })

     $('.search-field').on('click', function () {

         if ($(this).hasClass('active')) {
             $(this).removeClass('active');
             $('.search-bar').fadeOut();
         } else {
             $(this).addClass('active');
             $('.search-bar').fadeIn();
         }
     });


     $('a[href*=#]:not([href=#])').click(function () {
         if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
             var target = $(this.hash);
             target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
             if (target.length) {
                 $('html,body').animate({
                     scrollTop: target.offset().top
                 }, 1000);
                 return false;

             }
         }
     });


     /*===================contact foem 7===================================*/

        

     var form3 = "body.contact-us .wpcf7-form";
     //console.log($(form2+" .wpcf7-form-control"))
     $(form3).validate({
         ignore: [],
         rules: {
             yourname: {
                 required: true
             },
             youremail: {
                 required: true,
                 email: true
             },
            yourphone: {
                required: false,
             }, 
             yourmessage: {
                 required: true
             }

         },
         errorClass: 'error',
         validClass: 'valid',
         errorElement: 'div',
         highlight: function (element, errorClass, validClass) {
             $(element).addClass(errorClass).removeClass(validClass);
         },
         unhighlight: function (element, errorClass, validClass) {
             $(element).removeClass(errorClass).addClass(validClass);
         },
         messages: {
             yourname: {
                 required: "Please enter your name"
             },
             youremail: {
                 required: "Please enter email address",
                 email: "Please enter valid email address"
             },
             yourphone: {
                 required: "Please enter phone number"
                 
             },
             yourmessage: {
                 required: "Please enter message"
             }

         },
         errorPlacement: function (error, element) {
             error.insertAfter(element);
         },
        /*  submitHandler: function (form) { // for demo

			// form.submit();
            // return true;
         } */
     });

     $(form3+' .wpcf7-form-control').on('blur', function () {
		 $(form3).validate().element(this);
     })

     /*======================= omment form===============================*/
	 
	  var form4 = "#commentform";
     //console.log($(form2+" .wpcf7-form-control"))
     $(form4).validate({
         ignore: [],
         rules: {
             author: {
                 required: true
             },
             email: {
                 required: true,
                 email: true
             },
            
             comment: {
                 required: true
             }

         },
         errorClass: 'error',
         validClass: 'valid',
         errorElement: 'div',
         highlight: function (element, errorClass, validClass) {
             $(element).addClass(errorClass).removeClass(validClass);
         },
         unhighlight: function (element, errorClass, validClass) {
             $(element).removeClass(errorClass).addClass(validClass);
         },
         messages: {
             author: {
                 required: "Please enter your name"
             },
             email: {
                 required: "Please enter email address",
                 email: "Please enter valid email address"
             },
            
             comment: {
                 required: "Please enter comment"
             }

         },
         errorPlacement: function (error, element) {
             error.insertAfter(element);
         },
        /*  submitHandler: function (form) { // for demo

			// form.submit();
            // return true;
         } */
     });

     $(form4+' .validcomment').on('blur', function () {
		 $(form4).validate().element(this);
     })

	 
	 /**************************************************************************/

     $('.popup-youtube').magnificPopup({
         disableOn: 700,
         type: 'iframe',
         mainClass: 'mfp-fade',
         removalDelay: 160,
         preloader: false,
         fixedContentPos: false
     });


 });