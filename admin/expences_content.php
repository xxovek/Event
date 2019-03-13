

<!DOCTYPE html>
<html lang="en">
<link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/helper.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<body>

        <div class="card card-outline-primary" style="width:100%">

            <div class="card-body">
                <form method="post" id="add_new_expence" enctype="multipart/form-data">
                  <div class="card-header">
                      <h4 class="m-b-0 text-white">ADD NEW EXPENSES</h4>
                  </div>
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Date</label><span id="selectdate" style="float:right;"></span>
                                    <input type="date" class="form-control" id="date" name="date"/>
                                    <small class="form-control-feedback"> Enter date</small> </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group  has-success">
                                    <label class="control-label">Category</label>
                                    <span id="selectcategory" style="float:right;"></span>
                              <select name="category" id="category" class="form-control select2-select" class="dropdown-menu"  style="width:100%;" /></select>
                              <!-- <select name="category" id="category" class="form-control select2-select" class="dropdown-menu" style="width:100%;"/></select> -->

                                    <small class="form-control-feedback"> Select Expense Category.</small> </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <input type="hidden" name="f1" id="f1" class="form-control"/> -->
                                    <label class="control-label">Amount</label>
                                    <span id="selectamount" style="float:right;"></span>category
                                      <input id="amount" name="amount" class="form-control" type="text" onkeypress="return Amountfloat(this.id,event);" /></div>
                                    <small class="form-control-feedback"> Enter Total Amount </small>
                                   </div>

                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                              <label class="control-label">Status</label>
                                <span id="selectstatus" style="float:right;"></span>
                                  <select name="status" id="status" class="form-control custom-select" class="dropdown-menu" data-placeholder="Choose a Status"  style="width:100%;" >
                                        <option value=""></option>
                                        <option value="PAID">PAID</option>
                                        <option value="UNPAID">UNPAID</option>
                                    </select>
                               </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Merchant Name</label>
                                    <span id="selectmerchantname" style="float:right;"></span>
                                    <input type="text" class="form-control" name="merchantname" id="merchantname" maxlength="20" autocomplete="off" onkeypress="return AlphaBets(event);" />
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Narration</label>
                                  <span id="selectnarrationname" style="float:right;"></span>
                                  <input type="text" class="form-control" name="narrationname" id="narrationname" maxlength="20" autocomplete="off" onkeypress="return AlphaBets(event);"/></div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>

                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Ref#</label>
                                    <input type="text" name="ref" id="ref" class="form-control" maxlength="20" onkeypress="return IsAlphaNumericValue(event);"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                          <div class="form-group">
                              <label>Description</label>
                            <textarea  name="description" id="description" rows="2" class="form-control" autocomplete="off"/></textarea>
                          </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i>SAVE</button>
                        <button type="button" class="btn btn-inverse" onclick="window.location.reload();">CANCEL</button>
                    </div>
                </form>
            </div>
        </div>
    <!-- </div> -->

     <!-- </div> -->


                             <div class="modal" id="add_category_modal" role="dialog" style="margin-top:31px;">
                                 <div class="modal-dialog">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                           NEW CATEGORY
                                           <button type="button" class="close" data-dismiss="modal" >&times;</button>
                                       </div>
                                         <form method="post" id="addexpenceCategory">
                                              <div class="col-md-12">
                                           <div class="form-group">
                                                <span id="insertcategory" style="float:right;"></span>
                                               <label for="category_name">Category Name</label>
                                               <div class="input-group">
                                                  <input type="text" class="form-control" name="category_name" id="category_name" maxlength="50" title="Enter alphabets only" autocomplete="off" onkeypress="return AlphaBets(event,this);" require/>
                                               </div>
                                           </div>
                                           <div class="form-group">
                                             <div class="checkbox checkbox-success">
                                             <input type="checkbox" data-toggle="collapse" data-target="#collapse_Category" id="Category_checkbox" value="" />
                                               <label for="Category_checkbox">  Make this a sub-category?</label>
                                             </div>
                                           </div>
                                           <div class="form-group">
                                             <div id="collapse_Category" class="collapse">
                                               <label for="pwd1">Main Category</label>
                                               <div class="input-group">
                                                   <span id="select_main_category" style="float:right;"></span>
                                                     <select name="main_category" id="main_category" class="form-control custom-select2-select" class="dropdown-menu" style="width:100%;" /></select>
                                               </div>
                                           </div>
                                         </div>
                                       </div>
                                           <div class="modal-footer"  style="float:right;">
                                           <button type="button" class="btn btn-success waves-effect waves-light m-r-10" onclick="addcategory();">Submit</button>
                                           <button type="submit" class="btn btn-inverse waves-effect waves-light" data-dismiss="modal">Close</button>
                                         </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>

                             <div id="uploadModal" class="modal" role="dialog">
                                 <div class="modal-dialog" >
                                     <div class="modal-content">
                                         <div class="modal-header">
                                            Upload Bill Receipt
                                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                         </div>

                                             <form id="uploadForm" action="upload_image_in_dir_for_expence.php" method="post" enctype='multipart/form-data' style="background-color:#fff;">
                                                   <div class="col-md-12">
                                                     <input type="hidden" name="upload_expence_id" id="upload_expence_id" />
                                                     <div class="col-md-6">
                                                       <div class="form-group">
                                                         <B>Upload Your Bill Receipt</B>
                                                         <br>
                                                         <input class="form-control" type="file" name="userImage" id="file" onchange="loadFile(event)" style="margin-top: 2%;margin-bottom: 2%;" required>
                                                     </div></div>

                                                     <div class="col-md-6">
                                                       <div class="form-group">
                                                         <left>
                                                             <img id="output" style="display:none;margin-top:10px;height: 100px;width: 165px;" />
                                                         </left>
                                                     </div></div>
                                                     <script>
                                                         var loadFile = function(event) {
                                                             document.getElementById('output').style.display = 'block';
                                                             var output = document.getElementById('output');
                                                             output.src = URL.createObjectURL(event.target.files[0]);
                                                         };
                                                     </script>

                                                 </div>
                                                 <div class="modal-footer" style="float:right;">
                                                     <input class="btn btn-success waves-effect waves-light m-r-10" type='submit' value='SAVE FILE' name='upload' />
                                                     <input class="btn btn-inverse waves-effect waves-light" type='button' value='CANCEL' onclick="window.location.reload();" data-dismiss="modal" />
                                                 </div>
                                             </form>

                                     </div>
                                 </div>
                             </div>


   </div>
     <!-- End Wrapper -->
     <!-- All Jquery -->
     <script src="js/lib/jquery/jquery.min.js"></script>
     <!-- Bootstrap tether Core JavaScript -->
     <script src="js/lib/bootstrap/js/popper.min.js"></script>
     <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
     <!-- slimscrollbar scrollbar JavaScript -->
     <script src="js/jquery.slimscroll.js"></script>
     <!--Menu sidebar -->
     <script src="js/sidebarmenu.js"></script>
     <!--stickey kit -->
     <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
     <!--Custom JavaScript -->
     <script src="js/custom.min.js"></script>
     <script src="./select2/jquery-2.1.1.min.js" type="text/javascript"></script>
     <link href="./select2/select2-bootstrap.min.css" rel="stylesheet" />
     <link href="./select2/select4.css" rel="stylesheet" />
     <script src="./select2/select4.js" type="text/javascript"></script>
     <script src="./js/bootstrap.min.js"></script>

       <script type="text/javascript">
           function ValidateFileUpload(param) {
               var fuData = document.getElementById('file');
               var FileUploadPath = fuData.value;
               if (FileUploadPath == '') {
               } else {
                   var Extension = FileUploadPath.substring(
                       FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

                   if (Extension === "gif" || Extension === "png" || Extension === "bmp" || Extension === "jpeg" || Extension === "jpg" || Extension === "pdf") {

                       if (fuData.files && fuData.files[0]) {
                           var reader = new FileReader();
                           reader.onload = function(e) {
                               $('#blah').attr('src', e.target.result);
                           }
                           reader.readAsDataURL(fuData.files[0]);
                       }
                   }
                   else {
                       return 1;
                   }
               }
           }

                function display_category() {
                    $.ajax({
                        url: "get_category_values.php",
                        async: false,
                        cache: false,
                        method: "POST",
                        data: "row",
                        success: function(data) {

                            $("#category").html(data);
                        }
                    });
                }

                function display_main_category() {
                    $.ajax({
                        url: "get_category_values_main_category.php",
                        async: false,
                        cache: false,
                        method: "POST",
                        data: "row",
                        success: function(data) {
                            $("#main_category").html(data);
                        }
                    });
                }

                function uploadBillReceipt(expence_id) {
                    $('#uploadModal').modal('show');
                    $("#upload_expence_id").val(expence_id);
                }
       </script>
       <script>

           function uploadBillReceipt_onSubmitExpence() {
               $.ajax({
                   url: "get_lastEnter_expence_id_for_uploadReceipt.php",
                   method: "POST",
                   data: "",
                   success: function(data) {
                       response = JSON.parse(data);
                       expence_id = response['expence_id'];
                       uploadBillReceipt(expence_id);
                   }
               });
           }
       </script>

     <script type="text/javascript">


     $(document).ready(function () {
       display_category();
       display_main_category();
 });


 $('select').select2({
     allowClear: true,
     placeholder: "Select here"
 }).on('select2:close', function() {
     var el = $(this);
     if (el.val() === "#CATEGORY") {
          $("#add_category_modal").modal('show');
     }
 });

      $('#add_new_expence').on("submit",function(e) {
        var date1 = $("#date").val();
        var amount = $("#amount").val();
        var merchantname = $("#merchantname").val();
        var narrationname = $("#narrationname").val();
        var category = document.getElementById('category').options[document.getElementById('category').selectedIndex].text
        var ref = $("#ref").val();
        var status = $("#status").val();
        var description = $("#description").val();
        var f11=document.getElementById('f1').value;
        //var f11 = '19';
        e.preventDefault();
        if(date1===""){
          $("#selectdate").html("<font color='red'>Please Insert Date</font>");
        }
        else {
          $("#selectdate").html("");
          if(amount==="")
          {
            $("#selectamount").html("<font color='red'>Insert Amount</font>");
          }
          else {
            $("#selectamount").html("");
            if(merchantname==="")
            {
                $("#selectmerchantname").html("<font color='red'>Insert Merchant Name</font>");
            }
            else {
              $("#selectmerchantname").html("");
              if(narrationname===""){
                  $("#selectnarrationname").html("<font color='red'>Insert Narration Name</font>");
              }
              else {
                  $("#selectnarrationname").html("");
                  if(category==="" || category==="#CATEGORY" || category==="ADD NEW CATEGORY" ){
                    $("#selectcategory").html("<font color='red'>Please Select Category</font>");
                  }
                  else{
                    $("#selectcategory").html("");
                    if(status===""){
                      $("#selectstatus").html("<font color='red'>Please Select Status</font>");
                    }
                    else{
                        $("#selectstatus").html("");

                            $.ajax({
                            url: "insert_addexpence.php",
                            type: "POST",
                            data:{f1:f11,ref:ref,amt:amount,cat:category,mname:merchantname,narnme:narrationname,date1:date1,status:status,desc:description},
                            beforeSend:function(){
                          $('#submit').val("Inserting...");
                         },

                            success: function(data)
                            {
                              alert(data);
                              alert("Expense Added Successfully");
                              $('#add_new_expence')[0].reset();
                               uploadBillReceipt_onSubmitExpence();
                            }
                            });
                          }
                  }
              }
            }
          }
        }

      });

 function uploadBillReceipt_onSubmitExpence() {
     $.ajax({
         url: "get_lastEnter_expence_id_for_uploadReceipt.php",
         method: "POST",
         data: "",
         success: function(data) {
             response = JSON.parse(data);
             expence_id = response['expence_id'];
             uploadBillReceipt(expence_id);
         }
     });
 }

 function addcategory() {
     var category_name = $("#category_name").val();

     if (category_name === "") {
         $("#insertcategory").html("<font color='red'>Please Insert Category Name</font>");

     } else {
       $("#insertcategory1").html("");
         var main_category = document.getElementById('main_category').options[document.getElementById('main_category').selectedIndex].text

         $.ajax({
             url: "insert_addexpence_category.php",
             method: "POST",
             data: ({
                 category_name: category_name,
                 main_category: main_category
             }),
             success: function(data) {
                 alert("Category Added Successfully.");
                 $('#add_category_modal').modal('hide');
             }
         });
     }
 }
     </script>
</body>
</html>
