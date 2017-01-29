//$(function(){


/*
  $('#reg_requerimient').submit(function(event){
    event.preventDefault();

    var form=$('#reg_requerimient');
    var data=form.serialize();
    var url=form.attr('action');
    $.ajax({
            url     :url,
            type    :'POST',
            data    :data,

            success :function(data){
                    if (data.message=='ok') {

                        $('#ok').delay(500).fadeIn('show');
                        $('.msg').html('The request '+'<h6>'+data.name+'</h5>'+' was successfully registered');


                    }else {
                        $('#error').delay(500).fadeIn('show');
                    }
            },
            error   :function(data){
                    console.log('Error');
            }
          });
  });



});

 function list_requerimient(){
   var urlR='admin/requirement';
   var table=$('#load_requerimient');
   var oTable=$('#tbl_requerimient').dataTable();
  $.ajax({
        type:'GET',
        url: '/admin/requirement',

         async: true,
        success:function(data){

          $.each(data, function(i, value) {
            table.append('<tr><td>'+value.id+'<td/><td>'+value.description+'</td><tr>')
            oTable.fnAddData([
                                value.id,
                                value.description,
                                '<a class="waves-effect waves-light"><i class="material-icons right">send</i></a>',
                            ]);

                console.log(value.id+value.description);

      });
        },
        error:function(){
          console.log('Error');
        }
        */
  //});
$(function(){

//var id=$('#ocult').val();
//$.ajax({
//  type:'GET',
//  url:'admin/requirement/'+id+'/assignfun',
//  success:function(msj){
//    alert(msj);
//  }
//});

})
