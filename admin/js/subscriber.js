displaysubcriber();
function displaysubcriber() {

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
            $("#tabledata").append('<tr><th scope="row">'+(i + 1)+'</th><td>'
            +response[i].subscriberEmail+'</td></tr>');
        }
        }
        $('#example1').DataTable({
          bPaginate: $('tbody tr').length>10,
          order: [],
          // "bInfo": false,
          columnDefs: [ { orderable: false, targets:[0,1] } ],
          dom: 'Bfrtip',
          buttons: ['copy', 'excel', 'pdf','print']
        });

      }
  });
}
