

<?php $__env->startSection('title', 'Welcome'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-5 py-3">
        <div class="col">
            <h1 class="">Dashboard</h1>
            <p class="">Halaman ini menampilkan statistik <span style="color:red;">SIAKAD</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Dosen
                    <div class="float-end">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Dosen</h5>
                    <p class="card-text"><?php echo e($dosens); ?> Dosen</p>
                    <a href="<?php echo e(route('dosen.index')); ?>" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Mahasiswa
                    <div class="float-end">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Mahasiswa</h5>
                    <p class="card-text"><?php echo e($mahasiswas); ?> Mahasiswa</p>
                    <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Mata Kuliah
                    <div class="float-end">
                        <i class="fa fa-book"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Mata Kuliah</h5>
                    <p class="card-text"><?php echo e($matkuls); ?> Mata Kuliah</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Documents\Framework\Praktikum3\sistem_informasi_akademik_20081\resources\views/welcome.blade.php ENDPATH**/ ?>