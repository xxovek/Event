displayContacts();
function displayContacts() {
  $.ajax({
      type: "POST",
      url: "./src/displayContacts.php",
      dataType:"json",
      success: function(response) {
        var count= response.length;
        if(count > 0){
          // alert(count);
          for (var i = 0; i < count; i++) {
            var c_id = response[i].contactId;
            $("#tabledata").append('<tr><th scope="row">'+(i + 1)+'</th><td>'
            +response[i].name+'</td><td>'
            +response[i].emailId+'</td><td>'
            +response[i].ContactNumber+'</td><td>gg</td></tr>');
        }
        }
        $('#example1').DataTable({
          bPaginate: $('tbody tr').length>10,
          order: [],
          // "bInfo": false,
          columnDefs: [ { orderable: false, targets:[0,1,2,3,4] } ],
          dom: 'Bfrtip',
          buttons: ['copy', 'excel', 'pdf','print']
        });

      }
  });
}
