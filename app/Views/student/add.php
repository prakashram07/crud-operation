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
          <h1>Add New Student</h1>
	    </div>
	</div>
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('student/') ?>" class="btn btn-info mb-2">Back</a>
	</div>
    <form method="post" id="student_add" name="student_add" 
    action="<?= site_url('/student/save') ?>">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact:</strong>
                <input type="numeric" name="contact" class="form-control" maxlength="10" placeholder="Contact"required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Address" required></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
  </div>
  
</body>
</html>