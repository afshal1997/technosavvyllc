$("#gfw_form").on("submit", function(e){

    e.preventDefault();

    var gfwArr = $(this).serializeArray();

    $.ajax({
        type: "POST",
        url: base_url+"home/gfw_form",
        data: gfwArr,
        beforeSend : function(){

            $("#gfw_name_err").html("");
            $("#gfw_email_err").html("");
            $("#gfw_phone_err").html("");
            $("#gfw_message_err").html("");

            $("#gfw_formsubmit").find("i").show();
            $("#gfw_formsubmit").prop("disabled", true);
        },
        success: function(res) {
            var resdata = JSON.parse(res);
            if(typeof resdata['errors'] == 'object'){
                $("#gfw_name_err").html(resdata['errors']['gfw_name']);
                $("#gfw_email_err").html(resdata['errors']['gfw_email']);
                // $("#gfw_phone_err").html(resdata['errors']['gfw_phone']);
                // $("#gfw_message_err").html(resdata['errors']['gfw_message']);
            }
            
            if(resdata.status === true){
                alertify.success(resdata.msg);
                $("#myModal3").modal('hide');
                $("#gfw_form")[0].reset();
            }
            
            if(typeof resdata['errors'] != 'object' && resdata.status === false){
                alertify.error(resdata.msg);
            }
            
            $("#gfw_formsubmit").find("i").hide();
            $("#gfw_formsubmit").prop("disabled", false);
     
        },
        error(res) {
            $("#gfw_formsubmit").find("i").hide();
            $("#gfw_formsubmit").prop("disabled", false);
            alertify.error("There was some problem sending your message. Please try again later.");
        }
    });
});

//---------------------getting started

$("#myModal2open1").on("click", function(e){
   
   //$('#getstr_plan').find('option:first').attr('selected', 'selected');
   $('#getstr_plan').prop('selectedIndex',0);
   $("#myModal2").modal("show");
    
});

$("#myModal2open2").on("click", function(e){
   
   //$('#getstr_plan').find('option:first').attr('selected', 'selected');
   $('#getstr_plan').prop('selectedIndex',0);
   $("#myModal2").modal("show");
    
});

$("#myModal2open3").on("click", function(e){
   
    $("#getstr_plan option").each(function(){
        if($(this).val() == 'White Labelling'){ // EDITED THIS LINE
            $(this).attr("selected","selected");    
        }
    });
   
   $("#myModal2").modal("show");
    
});

$("#myModal2open4").on("click", function(e){
   
    $("#getstr_plan option").each(function(){
        if($(this).val() == 'Resource Outsourcing'){ // EDITED THIS LINE
            $(this).attr("selected","selected");    
        }
    });
   
   $("#myModal2").modal("show");
    
});

$("#myModal2open5").on("click", function(e){
   
    $("#getstr_plan option").each(function(){
        if($(this).val() == 'Referral Program'){ // EDITED THIS LINE
            $(this).attr("selected","selected");    
        }
    });
   
   $("#myModal2").modal("show");
    
});

$("#getstr_form").on("submit", function(e){

            alert('1');
    e.preventDefault();
    var getstr = $(this).serializeArray();

    $.ajax({
        type: "POST",
        url: base_url+"home/getstr_form",
        data: getstr,
        beforeSend : function(){

            $("#getstr_name_err").html("");
            $("#getstr_email_err").html("");
            $("#getstr_number_err").html("");
            $("#getstr_company_err").html("");
            $("#getstr_plan_err").html("");
            $("#getstr_message_err").html("");
        },
        success: function(res) {
            var resdata = JSON.parse(res);
            
            if(typeof resdata['errors'] == 'object'){
                
                $("#getstr_name_err").html(resdata['errors']['getstr_name']);
                $("#getstr_email_err").html(resdata['errors']['getstr_email']);
                // $("#getstr_number_err").html(resdata['errors']['getstr_number']);
                // $("#getstr_company_err").html(resdata['errors']['getstr_company']);
                // $("#getstr_plan_err").html(resdata['errors']['getstr_plan']);
                // $("#getstr_message_err").html(resdata['errors']['getstr_message']);
            
            }
            if(resdata.status === true){
                alertify.success(resdata.msg);
                $("#myModal2").modal('hide');
                $("#getstr_form")[0].reset();
            }
            if(typeof resdata['errors'] != 'object' && resdata.status === false){
                alertify.error(resdata.msg);
            }
        },
        error(res) {
            alertify.error("There was some problem sending your message. Please try again later.");
        }
    });
    
});

//-----------------free consultantion

$("#consl_form").on("submit", function(e){

    e.preventDefault();
    var consl_data = $(this).serializeArray();
 
    $.ajax({
        type: "POST",
        url: base_url+"home/consl_form",
        data: consl_data,
        beforeSend : function(){

            $("#consl_name_err").html("");
            $("#consl_email_err").html("");
            $("#consl_number_err").html("");
            $("#consl_company_err").html("");
            $("#consl_startdate_err").html("");
            $("#consl_scheduletime_err").html("");
            $("#consl_message_err").html("");

        },
        success: function(res) {
            var resdata = JSON.parse(res);
            
            if(typeof resdata['errors'] == 'object'){
                
                $("#consl_name_err").html(resdata['errors']['consl_name_err']);
                $("#consl_email_err").html(resdata['errors']['consl_email_err']);
                // $("#consl_number_err").html(resdata['errors']['consl_number_err']);
                // $("#consl_company_err").html(resdata['errors']['consl_company_err']);
                // $("#consl_startdate_err").html(resdata['errors']['consl_startdate_err']);
                // $("#consl_scheduletime_err").html(resdata['errors']['consl_scheduletime_err']);
                // $("#consl_message_err").html(resdata['errors']['consl_message_err']);
                
            }
            if(resdata.status === true){
                alertify.success(resdata.msg);
                $("#myModal4").modal('hide');
                $("#consl_form")[0].reset();
            }
            if(typeof resdata['errors'] != 'object' && resdata.status === false){
                alertify.error(resdata.msg);
            }
        },
        error(res) {
            alertify.error("There was some problem sending your message. Please try again later.");
        }
    });
    
});

//--------------------newsletter form

$("#helpproj_file").on("change", function(){
    
    var str = $(this).val();
    var res = str.split("\\");
    var num = res.length - 1;
    if(num >= 0){
        $("#nameoffile").html(res[num]);
    }
   //$("#nameoffile").html("")
});
$("#nslf_form").on("submit", function(e){

    e.preventDefault();
    var consl_data = $(this).serializeArray();
 
    $.ajax({
        type: "POST",
        url: base_url+"home/nslf_form",
        data: consl_data,
        beforeSend : function(){

            $("#nslf_form_email_err").html("");
          
        },
        success: function(res) {
            var resdata = JSON.parse(res);
            console.log(resdata)
            
            if(typeof resdata['errors'] == 'object'){
                $("#nslf_form_email_err").html(resdata['errors']['nslf_form_email_err']);
            }
            if(resdata.status === true){
                alertify.success(resdata.msg);
                $("#nslf_form")[0].reset();
            }
            if(typeof resdata['errors'] != 'object' && resdata.status === false){
                alertify.error(resdata.msg);
            }
        },
        error(res) {
            alertify.error("There was some problem sending your message. Please try again later.");
        }
    });
    
});





