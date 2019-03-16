displaysubcriber();
function displaysubcriber() {
  $("#tabledata").empty();
  $.ajax({
      type: "POST",
      url: "./src/displaySubscriber.php",
      dataType:"json",
      success: function(response) {
        // alert(response);
        var count= response.length;
        if(count > 0){

          for (var i = 0; i < count; i++) {
            var c_id = response[i].subscriberId;
            $("#tabledata").append('<tr><th scope="row">'+(i + 1)+'</th><td style="text-align: center;">'
            +response[i].subscriberEmail+'</td><td style="text-align: center;"><div class="table-data-feature"><button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="removeSubscriber('+c_id+')"><i class="fa fa-remove"></i></button></div></td></tr>');
        }
        }

        $('#example1').DataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length>10,
        order: [],
        columnDefs: [ { orderable: false, targets: [0,1,2] } ],
        dom: 'Bfrtip',
        buttons: ['copy','csv', 'excel', 'pdf'],
        destroy: true
        });

      }
  });
}

function removeSubscriber(param){
  $.ajax({
     type:"POST",
     url:"./src/removeSubscriber.php",
     data:({
       SubscriberId:param
     }),
     success:function(msg){
       alert(msg);
       displaysubcriber();
     }
  });
}
