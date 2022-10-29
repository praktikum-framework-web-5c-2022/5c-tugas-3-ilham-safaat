

<?php $__env->startSection('title', 'Dosen'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mt-5 py-3">
        <div class="col">
            <div class="float-start">
                <h1 class="">Dosen</h1>
                <p class="">Halaman ini menampilkan data <span style="color:red;">Dosen</span></p>
            </div>
            <div class="float-end py-4">
                <a href="<?php echo e(route('dosen.create')); ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> <?php echo e(session()->get('message')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tempat,Tanggal Lahir</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($dosen->nidn); ?></td>
                        <td><?php echo e($dosen->nama); ?></td>
                        <td><?php echo e($dosen->jenis_kelamin); ?></td>
                        <td><?php echo e($dosen->alamat); ?></td>
                        <td><?php echo e($dosen->ttl); ?></td>
                        <td>
                            <img src="<?php echo e(asset('storage/'.$dosen->photo)); ?>" width="100px" height="100px">
                        </td>
                        <td>
                            <a href="/dosen/<?php echo e($dosen->id); ?>" class="btn btn-info" style="color:white;">Detail</a>
                            <a href="/dosen/<?php echo e($dosen->id); ?>/edit" class="btn btn-warning" style="color:white;">Edit</a>
                            <form action="/dosen/<?php echo e($dosen->id); ?>" method="post" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger btn-md" onclick="return confirm('Are you sure want to delete this data?')">Delete</button>
                            </form>

                        </td>
                    </tr>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <td colspan="10">Tidak ada data ..</td>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Documents\Framework\Praktikum3\sistem_informasi_akademik_20081\resources\views/dosen/index.blade.php ENDPATH**/ ?>