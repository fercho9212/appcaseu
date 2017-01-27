$(function(){
  $(".button-collapse").sideNav();
  $(".dropdown-button").dropdown();
  var i = $("#flow-toggle");
   i.click(function() {
       $("#flow-text-demo").children("p").each(function() {
           $(this).toggleClass("flow-text")
       })
   }), $("#card-alert .close").click(function() {
       $(this).closest("#card-alert").fadeOut("slow")
   });
   var typeMessage=$('#alert-message').attr('class');
   switch (typeMessage) {

     case 'info':
                $('#card-alert').addClass('light-blue lighten-5');
                $('.card-content').addClass('light-blue-text');
                $('.closs').addClass('blue-text');
                break;
     case 'danger':
                 $('#card-alert').addClass('red lighten-5');
                 $('.card-content').addClass('red-text');
                 $('.closs').addClass('red-text');
                break;
     default:
   }
   var t=0;
	  $('#add').click(function(){
      	t++;
      	$('#dinamic_funcionality').append('<tr id="row'+t+'"><td><input type="text" name="description[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+t+'" class="btn btn-danger dinamic_del_funcionality">X</button></td></tr>');
    });
    $(document).on('click', '.dinamic_del_funcionality', function(){
          var button_id = $(this).attr("id");
          $('#row'+button_id+'').remove();
    });

})
