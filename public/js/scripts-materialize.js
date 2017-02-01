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
        var Html='';

        Html+='<tr class="del_func" id="row'+t+'">'
        Html+='<div class="input-field">'
        Html+='   <td><textarea type="text" name="description[]" id="textarea2" class="materialize-textarea name_list "></textarea>'
        Html+='       <label for="textarea2">Enter the functionalities</label>'
        Html+='   </td>'
        Html+='</div>'
        Html+='   <td><button type="button" name="remove" id="'+t+'" class="btn btn-danger dinamic_del_funcionality red accent-4 material-icons">delete</button></td>'
        Html+='</tr>'

        $('#dinamic_funcionality').append(Html);
    });

    $(document).on('click', '.dinamic_del_funcionality', function(){
          var button_id = $(this).attr("id");
          $('#row'+button_id+'').remove();
    });
    var table=$('#tbl_func').dataTable();

    $('#frm_func').submit(function(event){
      event.preventDefault();
      //var table1=$('#tbl_func').dataTable();
      var form=$('#frm_func');
      var data=form.serialize();
      var btn_x=$('.del_func');
      var url='/admin/functionalities'
      var tr=$('#data_f');
      var html='';

      $.ajax({
        type:     'POST',
        data:     data,
        dataType: 'json',
        url:      url,
        success:  function(msj){
        table.fnClearTable();
                btn_x.remove();
                form[0].reset();
                $.each(msj,function(i,item){
                  table.fnAddData([
                    item.description,
                    item.id,
                  ]);
                  //html+='<tr><td>'+item.description+'</td><td>'+item.id+'</td></tr>';
                  //$('#tbl_func').append('<tr><td>'+item.description+'</td><td>'+item.id+'</td></tr>')
                })
              //  $('#tbl_func').html(html);
        }
      });

    });

$(document).on('click', '#btn_delete', function(){
  //var href=$('#btn_delete').attr('data-href');
  //alert(href);
  $('#modal1').modal();
  var row=$(this).parents('tr');
  var id=row.data('id');
  //alert(id);
  $('.send_id').attr('data-id',id);
});

 $('#btn_confirm').click(function(e){
   var no=$('.send_id').attr('data-id');
alert('this is nu'+no);
   //$(this).attr()
 });
  // $('.btn_delete').click(function(){
//    var id=$(this).data('id');
//  $('.bottom-sheet').attr('id','modal'+id);
//$('#modal').modal();


// });


});
