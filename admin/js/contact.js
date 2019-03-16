displayContacts();
function displayContacts() {
  $("#tabledata").empty();
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
            $("#tabledata").append('<tr><th style="text-align: center;" scope="row">'+(i + 1)+'</th><td style="text-align: center;">'
            +response[i].name+'</td><td style="text-align: center;">'
            +response[i].emailId+'</td><td style="text-align: center;">'
            +response[i].ContactNumber+'</td><td style="text-align: center;"><div class="table-data-feature"><button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="removeContact('+c_id+')"><i class="fa fa-remove"></i></button></div></td></tr>');
        }
        // <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit" onclick="EditContact('+c_id+')"><i class="fa fa-edit"></i></button>
        }

        $('#example1').DataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length>10,
        order: [],
        columnDefs: [ { orderable: false, targets: [0,1,2,3,4] } ],
        dom: 'Bfrtip',
        buttons: ['copy','csv', 'excel', 'pdf'],
        destroy: true
        });
      }
  });
}
function removeContact(param){
  $.ajax({
     type:"POST",
     url:"./src/removeContacts.php",
     data:({
       contactId:param
     }),
     success:function(msg){
       alert(msg);
       displayContacts();
     }
  });
}
