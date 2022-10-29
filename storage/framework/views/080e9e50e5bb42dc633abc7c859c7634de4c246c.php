
<?php $__env->startSection('title', 'Form Tambah Dosen'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-5 py-5">

        <center>
            <h3 class="mb-4">Form Tambah Dosen</h3>
        </center>
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="post" action="/dosen" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nidn" placeholder="name@example.com" value="<?php echo e(old('nidn')); ?>">
                        <label for="floatingInput">NIDN</label>
                        <?php $__errorArgs = ['nidn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nama" placeholder="name@example.com" <?php echo e(old('nama')); ?>>
                        <label for="floatingInput">Nama Lengkap</label>
                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" name="jenis_kelamin" aria-label="Floating label select example">
                            <option <?php echo e(old('jenis_kelamin') == 'Laki-laki' ? 'selected' : ''); ?> value="Laki-laki">Laki-laki</option>
                            <option <?php echo e(old('jenis_kelamin') == 'Perempuan' ? 'selected' : ''); ?> value="Perempuan">Perempuan</option>

                        </select>
                        <label for="floatingSelect">Jenis Kelamin</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="alamat" placeholder="name@example.com" value="<?php echo e(old('alamat')); ?>">
                        <label for="floatingInput">Alamat</label>
                        <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="ttl" placeholder="name@example.com" value="<?php echo e(old('ttl')); ?>">
                        <label for="floatingInput">Tempat, Tanggal Lahir</label>
                        <?php $__errorArgs = ['ttl'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload</label>
                        <input class="form-control" type="file" name="photo" id="formFile">
                        <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Documents\Framework\Praktikum3\sistem_informasi_akademik_20081\resources\views/dosen/create.blade.php ENDPATH**/ ?>