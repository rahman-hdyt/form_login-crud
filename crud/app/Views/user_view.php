<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Form Add User</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('template') ?>/assets/css/style.css"> <!-- BAGIAN YANG DIUBAH -->
  <link rel="stylesheet" href="<?= base_url('template') ?>/assets/css/components.css"> <!-- BAGIAN YANG DIUBAH -->

  <style type="text/css">
    .container {margin-top: 50px;}
    .table.table.table-striped {
    display: table;
    box-sizing: border-box;
    }

    body {
    background-color: white;
    font-size: 14px;
    font-weight: 400;
    font-family: "Nunito", "Segoe UI", arial;
    color: #6c757d;
    }

    .simple-footer{
        margin-top : 280px;
    }
  </style>

</head>
<body>
    <div class="container" >
    <h3>Add User</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>UserID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
             <!-- $tuser adalah nama tabel  -->
            <?php foreach($tuser as $row):?> 
                <tr>
                    <td><?= $row->u_id;?></td>
                    <td><?= $row->user_name;?></td>
                    <td><?= $row->email;?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $row->user_id;?>" data-u_id="<?= $row->u_id;?>" data-name="<?= $row->user_name;?>" data-email="<?= $row->email;?>">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->user_id;?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>    
        </table>
    </div>
    <div class="simple-footer">
          <p style="color:grey">&copy; DayStudio</p>
        </div>
     
    <!-- Modal Add User-->
    <form action="<?= base_url('user_login/save') ?>" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>UserID</label>
                    <input type="text" class="form-control" name="u_id" placeholder="Masukkan UserID">
                </div>
                 
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="user_name" placeholder="Masukkan Nama">
                </div>
 
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
                </div>
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Product-->
 
    <!-- Modal Edit Product-->
    <form action="<?= base_url('user_login/update') ?>" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>UserID</label>
                    <input type="text" class="form-control u_id" name="u_id"  placeholder="Masukkan UserID">
                </div>
                 
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control user_name" name="user_name"  placeholder="Masukkan Nama">
                </div>
 
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control email" name="email"  placeholder="Masukkan Email">
                </div>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="user_id" class="user_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
 
    <!-- Modal Delete Product-->
    <form action="<?= base_url('/user_login/delete') ?>" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Are you sure want to delete this user?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="user_id" class="productID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete Product-->
 
     <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url('template') ?>/assets/js/scripts.js"></script> <!-- BAGIAN YANG DIUBAH -->
  <script src="<?= base_url('template') ?>/assets/js/custom.js"></script> <!-- BAGIAN YANG DIUBAH -->

<script>
    $(document).ready(function(){
 
         // get Edit Product
         $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const uid = $(this).data('uid');
            const name = $(this).data('name');
            const email = $(this).data('email');
            
            // Set data to Form Edit
            $('.user_id').val(id);
            $('.u_id').val(uid);
            $('.user_name').val(name);
            $('.email').val(email);      
            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
 
        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.productID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
     
         
    });
</script>
</body>
</html>