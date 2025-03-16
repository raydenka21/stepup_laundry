<style>
    .bg-12 {
        background-image: url(../images/stepup/banner-1.png) !important;
    }
    .label-card{
        font-size: 14px!important;
    }
</style>
<div class="card card-style">
    <div class="card mb-0 bg-12" data-card-height="150"></div>
    <div class="content mt-3">
        <!--            <p class="color-highlight font-500 mb-n1">Unleash your Creativity</p>-->
        <h1 style="font-size: 20px!important;">5 Alasan anda, melakukan perawatan sepatu anda di Stepup :</h1>

        <p class="mb-3">
        </p>
        <ol>
            <li><b>Pengeringan dengan Sinar UV:</b> Proses pengeringan sepatu tanpa panas berlebih, menjaga bentuk dan material sepatu tetap aman.</li>
            <li><b>Sterilisasi Anti-Bakteri:</b> Teknologi UV membantu membunuh kuman dan bakteri, menjaga sepatu lebih higienis.</li>
            <li><b>Ramah Lingkungan:</b> Proses minim air dan bahan kimia berbahaya, lebih aman untuk lingkungan</li>
            <li><b>Perawatan Khusus Sesuai Material:</b> Setiap sepatu diperlakukan sesuai karakteristik bahan (canvas, kulit, suede, dll).</li>
            <li><b>Antar Jemput Gratis:</b> Layanan antar dan jemput sepatu langsung ke lokasi pelanggan, praktis tanpa harus keluar rumah.</li>
            <li><b>10x Cuci, Gratis 1x:</b> Menerapkan sistem poin, 10x cuci mendapatkan 1x cuci <b>GRATIS</b></li>

        </ol>

        <p class="font-11 opacity-70 font-italic line-height-s"><strong class="color-highlight">Note</strong>. Free Pickup & Delivery Service Area<br>(Weekday) Mampang, Kemang, Bagka, Pejaten, Buncit Ampera, Tendean, Cipete, Ciganjur, Jagakarsa.<i class="fa fa-check-circle color-green-dark ps-1 pe-1"></i><br> (Weekend) Ciganjur, Jagakarsa, Cilandak. <i class="fa fa-check-circle color-green-dark ps-1 pe-1"></i></p>
        <!--
        <!--                icon to make it easier for you to keep track.</p>-->
    </div>
</div>




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