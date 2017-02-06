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

$('#modal1').modal();
$('#mod_upd_req').modal();

      $(document).on('click', '#btn_delete', function(){
        var row=$(this).parents('tr');
        var id=row.data('id');

        $('#btn_confirm').attr('data-id',id);
        $('#btn_confirm').attr('href','/admin/requirements/'+id+'/destroy');
});

$('#btn_confirm').click(function(e){
   e.preventDefault();
   var url=$(this).attr('href');
   var id=$(this).attr('data-id');
   var data=$('#form_delete').serialize();
   $.ajax({
     type:'GET',
     url:url,
     data:data,
     success:function(data){
       $('#modal1').modal('close');
       if (data=='ok') {
         console.log('siii');
         $('#'+id).fadeOut();
       }else {
         console.log('No elimina');
       }

      // console.log(id);
       console.log(data);
     },
     error:function(data){
       var $toastContent = $('<span>No es posible Eliminar este Requerimiento </br> Es por posible que tenga elementos relacionado</br> o de lo contrarion intente más adelante</span>');
       Materialize.toast($toastContent, 5000);
       $('#modal1').modal('close');
     }
   });
   });
$('tbody').delegate('#btn_upd_req','click',function(){
  var id=$(this).data('id');
  var url='/admin/requerimients/'+id+'/edit';
  $.ajax({
      type:'GET',
      url:url,
      data:{'id':id},
      success:function(data){
        console.log(data);
      },
      error:function(data){
        console.log('err'+data);
      }

  });
});


  // alert(id);
  // var url='/admin/requirement/'+id+'/destroy';
  // $.ajax({
  //   type:'GET',
  //   url:url,
  //   data:id,
  //   success:function(data){
  //     console.log(data);
  //   },
  //   error:function(data){
  //     console.log('susss');
  //   }
//   });

/*
//change
$('#modal1').modal();
$(document).on('click', '#btn_delete', function(e){
  e.preventDefault();

  var row=$(this).parents('tr');
  var id=row.data('id');
  var form=$('#form_delete');
  var url=form.attr('action').replace(':REQUI:ID',id);
  var data=form.serialize();

  //alert(id);

});

 */
/* $('#btn_confirm').click(function(e){
   e.preventDefault();
   var id=$('.send_id').attr('data-id');
   var url='/admin/requirement/'+id+'/destroy';
   $.ajax({
     type:'GET',
     url:url,
     data:id,
     success:function(data){
       console.log(data);
     },
     error:function(data){
       console.log('susss');
     }
   });
   //$(this).attr()
 });
*/
  // $('.btn_delete').click(function(){
//    var id=$(this).data('id');
//  $('.bottom-sheet').attr('id','modal'+id);
//$('#modal').modal();


// });


});
