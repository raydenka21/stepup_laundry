<style>
    .label-card{
        font-size: 14px!important;
    }
</style>




<div class="content" id="tab-group-1">
    <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
        <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tab-1">Fast</a>
        <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2">Deep</a>
        <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3">Unyellowing</a>
    </div>
    <div class="clearfix mb-3"></div>
    <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1">
        <div>
            <div class="card card-style mx-0 mb-0">
                <div class="content">
                    <p class="color-highlight mb-n1 font-600">Butuh Cepat & Tampil Maksimal</p>
                    <h1 style="font-size: 20px!important;">Fast Clean</h1>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i> Rentang Waktu Pengerjaan 1-2 Jam</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i> Pembersihan Outsole (Bagian Bawah Sepatu)</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i> Pembersihan Midsole (Sol Tengah Sepatu)</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i> Pembersihan Upper (Bagian Atas Sepatu)</h5>
                    <h3 class="mt-4 mb-4">RP {{ PRICELIST['fast']['price'] }}</h3>
                    <div class="divider"></div>
                    <a href="{{ route('booking').'?service=fast' }}" data-menu="form-fast-clean" class="btn btn-full btn-m rounded-sm font-13 font-600 gradient-highlight mb-4">Choose Fast Clean</a>
                </div>
            </div>
        </div>
    </div>
    <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2">
        <div>
            <div class="card card-style mx-0 mb-0">
                <div class="content">
                    <p class="color-highlight mb-n1 font-600">Bersih Maksimal & Tampil Maksimal</p>
                    <h1 style="font-size: 20px!important;">Deep Clean</h1>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Rentang Waktu Pengerjaan 2-3 Hari</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Pengeringan Menggunakan Sinar UV</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Pembersihan Upper (Bagian Atas Sepatu)</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Pembersihan Midsole (Sol Tengah Sepatu)</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Pembersihan Insole (Bagian Dalam Sepatu)</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Pembersihan Outsole (Bawah Sepatu)</h5>
                    <h3 class="mt-4 mb-4">RP {{ PRICELIST['deep']['price'] }}</h3>
                    <div class="divider"></div>
                    <a href="{{ route('booking').'?service=deep' }}" class="btn btn-full btn-m rounded-sm font-13 font-600 gradient-highlight mb-4">Choose Deep Clean</a>
                </div>
            </div>
        </div>
    </div>
    <div data-bs-parent="#tab-group-1" class="collapse" id="tab-3">
        <div>
            <div class="card card-style mx-0 mb-0">
                <div class="content">
                    <p class="color-highlight mb-n1 font-600">Kembali Putih, Bersih & Tampil Maksimal</p>
                    <h1 style="font-size: 20px!important;">Unyellowing</h1>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Rentang Waktu Pengerjaan 5-10 Hari</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Pembersihan Menggunakan Sinar UV</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Pemutihan noda kekuningan pada bahan sepatu berjenis rubber Midsole (Sol Tengah Sepatu)</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Pembersihan Outsole (Bawah Sepatu)</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Pembersihan Upper (Bagian Atas Sepatu)</h5>
                    <h5 class="mt-3 label-card"><i class="fa fa-check color-green-dark pe-2"></i>Pembersihan Insole (Bagian Dalam Sepatu)</h5>
                    <h3 class="mt-4 mb-4">RP {{ PRICELIST['unyellowing']['price'] }}</h3>
                    <div class="divider"></div>
                    <a href="{{ route('booking').'?service=unyellowing' }}" class="btn btn-full btn-m rounded-sm font-13 font-600 gradient-highlight mb-4">Choose Unyellowing</a>
                </div>
            </div>
        </div>
    </div>
</div>