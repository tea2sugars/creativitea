(function($){$(document).ready(function(){$('#contact-form').find('input,textarea').jqBootstrapValidation({preventSubmit:true,submitError:function($form,event,errors){},submitSuccess:function($form,event){event.preventDefault();var submit=$('#contact-form submit');var ajaxResponse=$('#contact-response');var name=$("input#cname").val();var email=$("input#cemail").val();var phone=$("input#cphone").val();var detail=$("input#cdetail").val();var message=$("textarea#cmessage").val();$.ajax({type:'POST',url:'assets/php/contact.php',dataType:'json',data:{name:name,email:email,message:message,},cache:false,beforeSend:function(result){submit.empty();submit.append('<i class="fa fa-cog fa-spin"></i> Wait...')},success:function(result){if(result.sendstatus==1){ajaxResponse.html(result.message);$form.fadeOut(200)}else{ajaxResponse.html(result.message)}}})}})})})(jQuery);