$(document).ready(function() {
    $('.alert-success').not('.alert-danger').delay(3400).slideUp();

    $("#edit-user").hide();
    $("#show-edit-user").click(function(){
      $("#edit-user").slideDown();
    });
});