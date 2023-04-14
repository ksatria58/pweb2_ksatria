<?php $__env->startSection('body'); ?>
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Tabel Sewa PT Duta Samudera Karya </h1>
                    <p class="mb-4">Data Penyewaan Alat Berat PT Duta Samudera Karya Cilacap</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Penyewaan</h6>
                            <a href="/tambah-data">
                                <button class="btn btn-success">Tambah Data</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Alat</th>
                                            <th>Nama Operator</th>
                                            <th>Tanggal Sewa</th>
                                            <th>Tanggal Kembali</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Loader</td>
                                            <td>Toeng</td>
                                            <td>10 April 2023</td>
                                            <td>12 April 2023</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si_alatberat\ksatria_alatberat-app\resources\views/karyawan/sewa.blade.php ENDPATH**/ ?>