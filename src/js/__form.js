/* * NombreDeProyecto * ========================================================
   Form javascript [/src/js/form.js]
   ========================================================================== */
$(document).ready(function () {
    $('.button_form_submit').scrollPosReload(); /* // REF [25] ScrollKeep */
        
    $('.modal_formStatus, .button_close_pop_formStatus, .button_submit_pop_formStatus').click(function () {
        $(this).closest('body').find('.pop_formStatus').addClass('displayNone');
        $(this).closest('body').find('.modal_formStatus').addClass('displayNone');
    });
    
/*
    // REF [39] $form_label_floating_act
    // REF [39a] $form_label_floating_act
    $('#data_nombre__mainForm').blur(function() {
        $(this).closest('label').removeClass('input_has_focus_js');   
      })
      .focus(function() {
        $(this).closest('label').addClass('input_has_focus_js');   
      });

    $('#data_telefono__mainForm').blur(function() {
        $(this).closest('label').removeClass('input_has_focus_js');   
      })
      .focus(function() {
        $(this).closest('label').addClass('input_has_focus_js');   
      });

    $('#data_email__mainForm').blur(function() {
        $(this).closest('label').removeClass('input_has_focus_js');   
      })
      .focus(function() {
        $(this).closest('label').addClass('input_has_focus_js');   
      });

    $('#data_mensaje__mainForm').blur(function() {
        $(this).closest('label').removeClass('input_has_focus_js');   
      })
      .focus(function() {
        $(this).closest('label').addClass('input_has_focus_js');   
      });
*/
   
/* 
    $('.pop_global button').click(function () {
        $('#formID').submit();
    });
*/
    
/* // REF [23] jQuery Datepicker --------------------------------------------
    $("input.fecha").datepicker({
        numberOfMonths: 2,
        showButtonPanel: true
    });
*/
});

/*
jQuery(document).ready(function($) {
    // REF [39] $form_label_floating_act
    var $data_nombre__mainForm      = $('#data_nombre__mainForm');  
    var $data_telefono__mainForm    = $('#data_telefono__mainForm');  
    var $data_email__mainForm       = $('#data_email__mainForm');  
    var $data_mensaje__mainForm     = $('#data_mensaje__mainForm'); 
    
    $data_nombre__mainForm.on('change', function() {
        var data_nombre_value__mainForm = $data_nombre__mainForm.val(); 
            
        if (!$(data_nombre_value__mainForm).val() ){
            $(this).closest('label').addClass('input_has_value_js');       
        } else {
            $(this).closest('label').removeClass('input_has_value_js');         
        }
    }); 
  
    $data_telefono__mainForm.on('change', function() {
        var data_telefono_value__mainForm = $data_telefono__mainForm.val(); 
            
        if (!$(data_telefono_value__mainForm).val() ){
            $(this).closest('label').addClass('input_has_value_js');       
        } else {
            $(this).closest('label').removeClass('input_has_value_js');         
        }
    }); 
  
    $data_email__mainForm.on('change', function() {
        var data_email_value__mainForm = $data_email__mainForm.val(); 
            
        if (!$(data_email_value__mainForm).val() ){
            $(this).closest('label').addClass('input_has_value_js');       
        } else {
            $(this).closest('label').removeClass('input_has_value_js');         
        }
    }); 
  
    $data_mensaje__mainForm.on('change', function() {
        var data_mensaje_value__mainForm = $data_mensaje__mainForm.val(); 
            
        if (!$(data_mensaje_value__mainForm).val() ){
            $(this).closest('label').addClass('input_has_value_js');       
        } else {
            $(this).closest('label').removeClass('input_has_value_js');         
        } 
    });   
});
*/