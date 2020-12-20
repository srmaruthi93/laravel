<!DOCTYPE html>
<html>
<head>
    <title>Laravel Import Excel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />
</head>

<body>
    
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Laravel Import Excel
        </div>
            <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>


    <?php if($msg = Session::get('error')): ?>
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong><?php echo e($msg); ?></strong>
   </div>
   <?php endif; ?>


   <?php if($message = Session::get('success')): ?>
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong><?php echo e($message); ?></strong>
   </div>
   <?php endif; ?>
        <div class="card-body">
            <form action="<?php echo e(url('import-excel')); ?>" method="POST" name="importform" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="file" name="import_file" accept=".csv" class="form-control">
                <br>
                <button class="btn btn-success">Import File</button>
            </form>
        </div>
    </div>
    <div class="panel panel-default py-5" >
    <div class="panel-heading">
     <h3 class="panel-title text-primary py-2">User Details</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered mx-auto py-50" style="width:100%">
      <thead>
       <tr>
        <th>Module_code</th>
        <th>Module_name</th>
        <th>Module_term</th>
        </tr>
    </thead>
    <tbody>
       <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
        <td><?php echo e($c->module_code); ?></td>
        <td><?php echo e($c->module_name); ?></td>
        <td><?php echo e($c->module_term); ?></td>
       </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
      </table>
     </div>
    </div>
</div>

</div>
    
</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" ></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script><?php /**PATH C:\xampp\htdocs\laravelcsv\resources\views/import_excel/index.blade.php ENDPATH**/ ?>