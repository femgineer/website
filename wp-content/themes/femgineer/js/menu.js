/**
 * Create an anonymous function to avoid library conflicts
 */
(function($) {
    /**
     * Add our plugin to the jQuery.fn object
     */
    $.fn.responsiveMenu = function(options) {
        /**
         * Define some default settings
         */
        
                $.fn.responsiveMenu.defaultOptions = {

                 "mobileResulution": 767,
                 "menuIcon_text":''      
            };
        
        
  
        
        /**
         * Merge the runtime options with the default settings
         */
        var  options = $.extend({}, $.fn.responsiveMenu.defaultOptions, options);    
        /**
         * Iterate through the collection of elements and
         * return the object to preserve method chaining
         */
        return this.each(function(i) {
          
            var bodyIsOverflowing , scrollbarWidth, originalBodyPadl;
            var $body = $(document.body), responsiveMenuWidth = options.mobileResulution;
            var menuobj = $(this);
            var mobMenuIcon = menuobj.prev(".menu-icon");
            var mobileMenu =  menuobj;
            var mobileSubMenu;
            var subMenuArrows;    
            var mobFlag = false;
            var deskFlag = false;
            var menuIcon_text = options.mobileResulution;
            
            documenrReadyFunction();
            $(window).resize(function(){
                    responsiveMenuWidth = options.mobileResulution;
                    documenrReadyFunction();
            });
            createMobileStructure(menuobj);      
            mobileMenuInit(menuobj);

            function removeDesktopMenu(menuobj){
                menuobj.removeClass('desk');
                mobileSubMenu.next().stop(true,true).slideUp();
                subMenuArrows.removeClass('up');
                menuobj.slideUp();
                menuobj.find(".menu-icon").removeClass('active');
            }

            function createMobileStructure(menuobj){
                if(menuobj.prev('.menu-icon').length==0){
                      menuobj.wrapAll('<div class="webbymenu_container"></div>');
                     $('<div class="menu-icon">'+options.menuIcon_text+'</div>').insertBefore(menuobj);
                      menuobj.find('ul').prev('a').addClass('menubelow');
                      
                }   
                mobileSubMenu =  menuobj.find('a.menubelow');  
              
                if(menuobj.find('.arrow').length==0){	
                            mobileSubMenu.each(function(){
                            $(this).closest('li').prepend('<span class="arrow"></span>');
                });
                subMenuArrows = menuobj.find('.arrow');
            }


    
 
}
            function bindClickonMobilemenu(menuobj){
                    menuobj.find('.arrow').on('touchstart click',function(e){ 
                    e.stopImmediatePropagation();
                    e.preventDefault();
                    var submenu = $(this).closest('li').find('>ul');
                    var sibilingsOfCurrent_obj = $(this).closest('li').siblings() ;
                    var this_parentLi =  $(this).closest('li');
                    if($(window).width()<= responsiveMenuWidth){
                            if(submenu.length>0){
                                
                                sibilingsOfCurrent_obj.find('ul').stop(true,true).slideUp(); // comment to close
                                sibilingsOfCurrent_obj.find('ul').each(function(){
                                    $(this).closest('li').find('>span').removeClass('up');// 
                                });	
                    }
                    if(!submenu.is(':visible')){
                                 submenu.find('ul').each(function(){
                                     $(this).stop().slideUp();
                                     $(this).closest('li').find('span').removeClass('up')
                                 });// close all
                                 submenu.stop().slideDown();
                                 this_parentLi.find('>span').addClass('up');
                            }else{
                                 submenu.slideUp();
                                 this_parentLi.find('>span').removeClass('up');
                            }
                        }
                    });


            }
            function removeMobileMenu(menuobj){ 
               
                menuobj.find('.menubelow').each(function(){
                    $(this).removeAttr('style');
                    $(this).next().removeAttr('style');
                });
                menuobj.find('.arrow').remove();
                menuobj.prev(".menu-icon").removeClass('active');
                menuobj.addClass('desk').removeAttr("style");
                menuobj.removeAttr("style");
                deskFlag = false;
            }

            $(window).resize(function(e){
                mobileMenuInit(menuobj);
            });
            
            function mobileMenuInit(menuobj){
                if($(window).width() <= responsiveMenuWidth){
                                if(!mobFlag){
                                 removeDesktopMenu(menuobj);
                                 createMobileStructure(menuobj);
                                 bindClickonMobilemenu(menuobj);
                                 mobFlag = true;
                                 deskFlag = false;
                                 menuobj.removeClass('desk');
                                 $('body').removeClass('desk');
                                 menuobj.addClass('mob');
                                 $('body').addClass('mob');    
                                }
                        }else{
                                if(!deskFlag){
                                  removeMobileMenu(menuobj);
                                  mobFlag =false;
                                  deskFlag = true;
                                  menuobj.removeClass('mob');
                                 $('body').removeClass('mob');            
                                  menuobj.addClass('desk');
                                 $('body').addClass('desk');    
                                    
                                }
                        }
            }
            // Toggle menu

             $('html').on('click touchstart', ".menu-icon",function(e){
                e.preventDefault();
                e.stopPropagation();
                if($(this).hasClass('active')){
                    closeMobileMenu(menuobj);
                }else{
                    $(this).next().slideDown(function(){
                    
                    });
                    $(this).addClass("active");
                    $(".menu-icons").removeClass("active");
                    $(".menu-icons").next().slideUp();
                }
            });

            
            /*auto close */
            $(document).on('click',function(e){
                    if($(window).width() <= responsiveMenuWidth){
                          
                        if($(e.target).closest(".webbymenu_container").length ==0 && !$(e.target).hasClass('active')){
                            closeMobileMenu(menuobj);
                        }
                    }
            });


            function closeMobileMenu(menuobj){
                            menuobj.stop().slideUp();
                            menuobj.prev(".menu-icon").removeClass('active');
                            menuobj.find('.arrow').removeClass('up');
                            menuobj.find('ul').stop(true,true).slideUp();


            }

            function documenrReadyFunction(){
                var fullWindowWidth = window.innerWidth
                if (!fullWindowWidth) { // workaround for missing window.innerWidth in IE8
                  var documentElementRect = document.documentElement.getBoundingClientRect()
                  fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left)
                }
                bodyIsOverflowing = document.body.clientWidth < fullWindowWidth
                scrollbarWidth = measureScrollbar()
                if (bodyIsOverflowing){
                    responsiveMenuWidth = responsiveMenuWidth - scrollbarWidth
                }
            }


            function measureScrollbar() { // thx walsh
                var scrollDiv = document.createElement('div')
                scrollDiv.className = 'scrollbar-measure'
                $body.append(scrollDiv)
                var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth
                $body[0].removeChild(scrollDiv)
                return scrollbarWidth
            }

  });
    };
})(jQuery);