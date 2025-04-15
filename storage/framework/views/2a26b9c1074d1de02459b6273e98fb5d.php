<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<div class="col-6 m-auto">
  <?php if($errors->any()): ?>
    <div class="alert alert-danger">
      <ul><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <li><?php echo e($error); ?></li> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>
    </div>
  <?php endif; ?>

  <form action="<?php echo e(route('hs_store')); ?>" method="POST" class="p-3 border border-primary">
    <?php echo csrf_field(); ?>
    <h3 class="h4 bg-info p-2 mx-n3 mt-n3 text-white">NHẬP THÔNG TIN HỌC SINH</h3>

    <div class="form-group row">
      <label class="col-3">Họ tên học sinh</label>
      <div class="col-9">
        <input type="text" class="form-control" name="hoten" value="<?php echo e(old('hoten')); ?>">
      </div>
    </div>

    <div class="form-group row">
      <label class="col-3">Tuổi</label>
      <div class="col-9">
        <input type="number" class="form-control" name="tuoi" value="<?php echo e(old('tuoi')); ?>">
      </div>
    </div>

    <div class="form-group row">
      <label class="col-3">Ngày sinh</label>
      <div class="col-9">
        <input type="date" class="form-control" name="ngaysinh" value="<?php echo e(old('ngaysinh')); ?>">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-12">
        <button type="submit" class="btn btn-primary w-25">Lưu thông tin</button>
      </div>
    </div>
  </form>
</div>
<?php /**PATH C:\xampp\htdocs\php31\bailab\lab7\la7\resources\views/nhaphs.blade.php ENDPATH**/ ?>