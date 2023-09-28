<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD Operation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
      <div class="col-lg-6 margin-tb">
        <div class="d-flex justify-content-end">
          <h1>Students Details</h1>
	      </div>
	    </div>
            <div class="d-flex justify-content-end">
                <a href="<?php echo site_url('/student/add') ?>" class="btn btn-success mb-2">Add Student</a>
	          </div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
       
  <div class="mt-3">
     <table class="table table-bordered" id="my-table">
       <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
	        <th>Email</th>
            <th>Contact</th>
	        <th>Address</th>
            <th>Action</th>
          </tr>
       </thead>
       <tbody>
        <?php $i=1;?>
          <?php foreach($student as $data){ ?>
          <tr>
            <td><?php echo $i++ ?>.</td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['email']; ?></td>
	        <td><?php echo $data['contact']; ?></td>
	        <td><?php echo $data['address']; ?></td>
             <td>
              <a href="<?php echo base_url('student/show/'.$data['id']);?>" class="btn btn-info">Show</a>
              <a href="<?php echo base_url('student/edit/'.$data['id']);?>" class="btn btn-primary">Edit</a>
              <a href="<?php echo base_url('student/delete/'.$data['id']);?>" class="btn btn-danger">Delete</a>
              </td>
          </tr>
         <?php } ?>
       </tbody>
     </table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
<script>
$(function(){    
  <?php if(session()->has("success")) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Great!',
            text: '<?= session("success") ?>'
        })
    <?php } ?>
});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#my-table').DataTable();
  } );
</script>
</body>
</html>