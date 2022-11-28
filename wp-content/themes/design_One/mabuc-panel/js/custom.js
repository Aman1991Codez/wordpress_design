(function($) {
    "use strict";
    
  
  	
   

    setTimeout(function(){
        jQuery(".fade").fadeOut("slow", function () {
            jQuery(".fade").remove();
        });
    }, 5000);


    /****************************
    UPLOADS
    ****************************/

    var formfield = '';
    

   

    
    /*HEADER IMAGES*/ 

    jQuery('#upload_image_button_yegbeds_hdimage').click(function() {
        formfield = jQuery('#yegbeds_hdimage').attr('name');
        tb_show('', 'media-upload.php?type=image&amp;width=640&amp;height=550&amp;TB_iframe=true');
        return false;           
    });

   


   

   

   
    
    /****************************
    SEND EDITOR
    ****************************/

    var original_send_to_editor = window.send_to_editor;
    window.send_to_editor = function(html) {

        /*IMAGE :: VIDEO :: AUDIO*/

        if(formfield) {
            var fileurl = jQuery(html).attr('src');
            if (typeof(fileurl)==="undefined") {
                fileurl = jQuery('img',html).attr('src');
            }
            jQuery('#' + formfield).val(fileurl);
            tb_remove();
            formfield = '';
        }else if(formfield_video) {
            var fileurl_video = jQuery(html).attr('href');
            if (typeof(fileurl_video)==="undefined") {
                fileurl_video = jQuery('video',html).attr('src');
            }
            jQuery('#' + formfield_video).val(fileurl_video);
            tb_remove();
            formfield_video = '';
        }else if(formfield_audio) {
            var fileurl_audio = jQuery(html).attr('href');
            if (typeof(fileurl_audio)==="undefined") {
                fileurl_audio = jQuery('audio',html).attr('src');
            }
            jQuery('#' + formfield_audio).val(fileurl_audio);
            tb_remove();
            formfield_audio = '';
        }else {
            original_send_to_editor(html);
        }

    };

})(jQuery);