function updateParticipant() {
  $.ajax({
    url : apiUpdateParticipant ,
    method : "POST",
    data : { _token: $('meta[name="_token"]').attr('content') } ,
    success : function(response) {
      $('#currentParticipant').unbind();
      $('#currentParticipant').empty();
      $('#currentParticipant').append("" + response + " คน");
    }
  });
}

function insertParticipant() {
  $.ajax({
    url : apiInsertParticipant ,
    method : "POST",
    data : {
      _token: $('meta[name="_token"]').attr('content') ,
      first_name : $('#first_name').val() ,
      last_name : $('#last_name').val() ,
      phone_number : $('#phone_number').val() ,
      email : $('#email').val()
    } ,
    success : function(response) {
      first_name : $('#first_name').val("");
      last_name : $('#last_name').val("");
      phone_number : $('#phone_number').val("");
      email : $('#email').val("");
      $('#registerModal').modal('hide');
      $('#registerCodeModal').modal('show');
      $('#myRegisterCode').unbind();
      $('#myRegisterCode').empty();
      $('#myRegisterCode').append('"BMDBKT'+response+'"');
    } ,
    error : function(response) {
      if(typeof response.responseJSON.phone_number != "undefined") {
        $('#phone_number-control').attr('class' , 'form-group has-error has-feedback');
      }
      else {
        $('#phone_number-control').attr('class' , 'form-group');
      }

      if(typeof response.responseJSON.email != "undefined") {
        $('#email-control').attr('class' , 'form-group has-error has-feedback');
      }
      else {
        $('#email-control').attr('class' , 'form-group');
      }

      if(typeof response.responseJSON.first_name != "undefined") {
        $('#first_name-control').attr('class' , 'form-group has-error has-feedback');
      }
      else {
        $('#first_name-control').attr('class' , 'form-group');
      }

      if(typeof response.responseJSON.last_name != "undefined") {
        $('#last_name-control').attr('class' , 'form-group has-error has-feedback');
      }
      else {
        $('#last_name-control').attr('class' , 'form-group');
      }
    }
  });
}

function checkRegisterCode() {
  $.ajax({
    url : apiCheckRegisterCode ,
    method : "POST",
    data : {
      _token: $('meta[name="_token"]').attr('content') ,
      first_name_check : $('#first_name_check').val() ,
      last_name_check : $('#last_name_check').val() ,
      phone_number_check : $('#phone_number_check').val() ,
      email_check : $('#email_check').val()
    } ,
    success : function(response) {
      first_name : $('#first_name_check').val("");
      last_name : $('#last_name_check').val("");
      phone_number : $('#phone_number_check').val("");
      email : $('#email_check').val("");
      $('#forgetRegisterCodeModal').modal('hide');
      $('#registerCodeModal').modal('show');
      $('#myRegisterCode').unbind();
      $('#myRegisterCode').empty();
      if(response == -1) {
        $('#registerCodeHeader').unbind();
        $('#registerCodeHeader').empty();
        $('#myRegisterCode').append("ไม่พบข้อมูลในระบบ");
      }
      else {
        $('#myRegisterCode').append('"BMDBKT'+response+'"');
      }
    } ,
    error : function(response) {
      if(typeof response.responseJSON.phone_number_check != "undefined") {
        $('#phone_number-control_check').attr('class' , 'form-group has-error has-feedback');
      }
      else {
        $('#phone_number-control_check').attr('class' , 'form-group');
      }

      if(typeof response.responseJSON.email_check != "undefined") {
        $('#email-control_check').attr('class' , 'form-group has-error has-feedback');
      }
      else {
        $('#email-control_check').attr('class' , 'form-group');
      }

      if(typeof response.responseJSON.first_name_check != "undefined") {
        $('#first_name-control_check').attr('class' , 'form-group has-error has-feedback');
      }
      else {
        $('#first_name-control_check').attr('class' , 'form-group');
      }

      if(typeof response.responseJSON.last_name_check != "undefined") {
        $('#last_name-control_check').attr('class' , 'form-group has-error has-feedback');
      }
      else {
        $('#last_name-control_check').attr('class' , 'form-group');
      }
    }
  });
}

function getScrollCurrent() {
  if($(window).scrollTop() > 800) {
    alert(">800");
  }
  console.log($(window).scrollTop());
}
//Smooth Scroll
