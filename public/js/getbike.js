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
        alert("Register Code : BMDBKT" + response);
    } ,
    error : function(response) {
      if(typeof response.responseJSON.a != "undefined") console.log("true");
      else console.log("false");

    }
  });

}
