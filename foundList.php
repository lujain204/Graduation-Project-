<?php
session_start();
$conn=mysqli_connect('localhost','root','','lostfounddb');
if($conn){  
  $select=" select * from category";
  $result1=mysqli_query($conn,$select);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lost and Found System </title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!--<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=-7eSns8llm-RMrRDsxHMEIf7RLOedtIl6ZakLhKnAVIi-rbZhzluH4rAXuSX_8wNGEWusUgzMC9IkFMaNASdxErVoYrB2Z8hTL1irKOppalmPhXlsdexC0odXcoEnuLC" charset="UTF-8"></script>-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
    //select code
     $(document).ready(function(){
      
      $(".category").change(function(){
        var CategoryID = $(this).val();
        $.ajax({
          url:"process1.php",
          method :"POST",
          data :{CategoryID : CategoryID},
          success:function(data){
            $(".item").html(data);
          }
        });
      });
     
    });

  </script>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #156C34;">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lost and Found</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="lostList.php" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
               Lost Item
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="foundList.php" class="nav-link active" style="background: #17a2b8;">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
               Found Item
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="postcategory.php" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Category
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="Request.php" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Requests        
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Found Item</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Found </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

                 <div class="card-header">
              <form action="" method="GET"> 
                  <div class="col-md-12">
              <div class="input-group mb-1">
                <h3 class="card-title">Found Table</h3>
                 <div class="col-sm-12 col-md-5"></div>
              <input type="text" name ="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search by item name or category id or desciption..">
                 <button type="submit" class="btn btn-info btn-xs" style="font-size:17px;">Search</button>
              </div>
              </div>
            </form>
              
               <button class="btn btn-success btn-xs" style="margin-left: 94.5%;font-size:15px;" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>
               

            </div>

            <br>
<?php

 $host = 'localhost';// Username for database
 $username  = 'root';// username come with xampp
 $password = '';
 $database = 'lostfounddb'; // database you made 

 //create connection:
 $conn = mysqli_connect($host,$username,$password,$database);
 if (isset($_GET['search']))
 {
   $text= $_GET['search'];
    $query= "SELECT * FROM item  WHERE CONCAT(ItemName,Description,Date,UserID) LIKE '%$text%' AND ReportType=1 AND approved=1";
    $result= mysqli_query($conn, $query) ;

 }
 else{
  $query=$sql="SELECT * FROM item WHERE ReportType=1 AND approved=1";
                   
                    
  $result= mysqli_query($conn, $query);

 }

 ?>





              <div class="card-header">
               
                
                <div class="modal fade" id="add">
                        <div class="modal-dialog modal-sm">
                            <form action="foundInsert.php" method="post" enctype="multipart/form-data">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Add Found Item</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
   
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <div class="card-body">
                                <div class="form-group">
                                  <div class="col-12" style="margin-top: -3%">
                                    <label for="dateinput">Date:</label>
                                    <input type="date" class="form-control" placeholder=".col-8" name="fdate" id="dateinput">
                                  </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-12" style="margin-top: 3%">
                                   <input type="text" class="form-control" placeholder="User ID ..." name="fuserid">
                                    </div>                  
                                </div>
                                <div class="form-group">
                                    <div class="col-12" style="margin-top: 3%">
                                      <div class="form-group">
                                        <select class="form-control category" id="fcategory" name="fcategory">
                                          <option>Select category</option>
                                          <?php while ($row=mysqli_fetch_array($result1)) : ?>
                                          <option value="<?php echo $row['CategoryID'];?>"><?php echo $row['CategoryName'];?></option>
                                          <?php endwhile; ?>
                                        </select>

                                      </div>
                                    </div>             
                                </div>  
                                <div class="form-group">
                                    <div class="col-12" style="margin-top: 3%">
                                      <div class="form-group">
                                        <select class="form-control item"  id="fItemName" name="fItemName">
                                          <option selected="selected">Select item name</option>  

                                        </select>

                                      </div>
                                    </div>             
                                </div> 
                                <div class="form-group">  

                                 <div class="col-12" style="margin-top: -3%">
                                    <label for="Image">image:
                                    <input type="file" id="image" name="image" class="form-control" placeholder=".col-8"></label>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-12" style="margin-top: 3%">
                                    <textarea class="form-control" rows="2" placeholder="Description ..."         name="fdescription"></textarea>
                                  </div>
                                </div>                               
                              </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button type="submit" class="btn btn-primary" name="save"><i class="fa fa-check"></i> Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                     </div>

              <!-- /.card-header -->
          
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Report Type</th>
                    <th>Image</th>
                    <th>User ID</th>
                    <th>Category ID</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <?php
                if(mysqli_num_rows($result)>0){  
                while ($row=mysqli_fetch_assoc($result)):?>
                  
                  <tbody>
                  <tr>
                    <td><?php echo $row['ItemID'];?></td>
                    <td><?php echo $row['ItemName'];?></td>
                    <td><?php echo $row['Description'];?></td>
                    <td><?php echo $row['Date'];?></td>
                    <td width="10" ><?php echo $row['ReportType'];?></td>

                    <td><img src="<?php echo $row['image'];?>" width="100" hieght ="100"></td>

                    <td><?php echo $row['UserID'];?></td>
                    <td width="10"><?php echo $row['CategoryID'];?></td>
                    <td class="text-center">
                       <a class="btn btn-info btn-xs"  href="update1.php?id=<?php echo $row["ItemID"];?>"><i class="fa fa-edit"></i> Edit</a>

                    <a class="btn btn-danger btn-xs" href="foundDelete.php?deleteid=<?php echo $row['ItemID'];?>" >
                    <i class="fa fa-times"></i> Delete</a></td>
  
                 
                  </tbody>
                 
                <?php
              endwhile; }else{ ?>   
                

                      <tr>
                    <td colspan="9" style="text-align: center; vertical-align: middle;" >No matching records found</td>

                  </tr>

<?php }?>
                </table>
                
                      <div class="modal fade"  id="edit" >
                        <div class="modal-dialog modal-sm">

                          <?php
                            
                            $sql="SELECT * FROM item WHERE ReportType=1 AND approved=1 ";
                            $result2=mysqli_query($conn,$sql);


                          ?>
                        <form method="POST" action="update1.php">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Update</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                                <div class="card-body">
                                <div class="form-group">
                                  <select class="form-control" id="id" name="id" required>
                                  <option>Select Item ID</option>
                                  <?php while ($row1=mysqli_fetch_array($result2)) : ?>
                                  <option value="<?php echo $row1['ItemID'];?>"><?php echo $row1['ItemID'];?></option>
                                  <?php endwhile; ?>
                                  </select>
                                </div>                                                                 
                                <div class="form-group">
                                  <label >Description</label>
                                  <textarea class="form-control " rows="3" placeholder="Enter ..." name="Description" required></textarea>
                                </div>
                                <div class="form-group">
                                  <label >date</label>
                                  <input type="date" class="form-control" placeholder="Enter Date" name="Date" required>
                                </div>                               
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button  name="update" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   <p class="u-text u-text-default u-text-1"> © Copyright&nbsp;2022.Lost and found team. &nbsp; &nbsp; Yarmouk university 
        </p>
        <p class="u-text u-text-default u-text-2"> </p>
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<!--<script src="plugins/datatables/jquery.dataTables.min.js"></script>-->
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [""]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

