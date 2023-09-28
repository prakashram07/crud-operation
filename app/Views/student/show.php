<!DOCTYPE html>
<html>
<head>
  <title>CRUD Operation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
  <div class="col-lg-6 margin-tb">
        <div class="d-flex justify-content-end">
          <h1> Show Student</h1>
	      </div>
	    </div>
        <div class="d-flex justify-content-end">
            <a href="<?php echo site_url('student/') ?>" class="btn btn-info mb-2">Back</a>
	    </div>
    <form method="post" id="student_show" name="student_show" 
    action="<?= site_url('/student/show') ?>">
    <div class="form-group">
        <strong>Name:</strong>
        <input type="text" name="name" value="<?php echo $student['name']; ?>" class="form-control" readonly>
    </div>
    <div class="form-group">
        <strong>Email:</strong>
        <input type="email" name="email" value="<?php echo $student['email']; ?>" class="form-control" readonly>
    </div>
    <div class="form-group">
        <strong>Contact:</strong>
        <input type="numeric" name="contact" value="<?php echo $student['contact']; ?>" class="form-control" readonly>
    </div>
    <div class="form-group">
        <strong>Address:</strong>
        <textarea class="form-control" style="height:150px" name="address" placeholder="Address" readonly><?php echo $student['address']; ?></textarea>
    </div>
</form>
</div>
</body>
</html>