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
        console.log("PhoneError");
      }
      else {
        $('#phone_number-control').attr('class' , 'form-group');
        console.log("PhoneOK");
      }

      if(typeof response.responseJSON.email != "undefined") {
        $('#email-control').attr('class' , 'form-group has-error has-feedback');
        console.log("EmailError");
      }
      else {
        $('#email-control').attr('class' , 'form-group');
        console.log("EmailOK");
      }
    }
  });
}
//Smooth Scroll
