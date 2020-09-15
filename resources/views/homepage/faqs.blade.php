@extends('welcome')
@section('titlepage','FAQs | belanjasemua.com')
<?php $y = Date('Y'); ?>
@section('deschomepage','')
@section('content')
<section id="content" class="my-5">
    <div class="content-wrap">
        <div class="container clearfix faqscurrent">
            <h3>pertanyaan yang sering diajukan</h3>
            <div class="divider"><i class="icon-circle"></i></div>

            <div class="row col-mb-50">
                <div class="col-md-6 mb-5">
                    <h4>General <small>(2)</small></h4>

                    <div class="accordion accordion-border clearfix" data-state="closed">

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Apa itu belanjasemua.com?
                            </div>
                        </div>
                        <div class="accordion-content">belanjasemua.com adalah layanan jasa beli dengan cara mudah
                            dengan harga yang sebenarnya dan dengan tambahan harga jasa yang bisa dinegosiasi.
                            Pemrosesan barang yang jauh lebih mudah, cepat dan aman.</div>

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Mengapa harus belanja di belanjasemua.com
                            </div>
                        </div>
                        <div class="accordion-content">
                            <u>pengiriman cepat</u><br>belanjasemua.com bekerjasama dengan FedEx International, BTSA
                            Logistics untuk domestik area yang memberikan jaminan kiriman yang jauh lebih cepat serta
                            informasi terkini atas kiriman pesanan kamu. <br><br>
                            <u>transparan & aman</u><br>
                            Jaminan atas transparansi semua dokumen, biaya terkait dari pesanan yang kami terima. Setiap
                            pesanan akan mendapatkan bukti pembelian pesanan, bukti pembayaran bea masuk kepada bea
                            cukai (negara) dan semua biaya yang dibebankan oleh pihak ekspedisi. Layanan asuransi atas
                            kiriman kelas dunia yang langsung diberikan oleh pihak ekspedisi. Semua klaim akan
                            ditangani secara cepat dan profesional langsung dari pihak pemberi jasa kiriman. <br><br>
                            <u>Resmi</u><br>
                            Pesanan yang kamu terima dijamin resmi dan bayar pajak bea masuk yang disertai bukti
                            pembayaran ke Negara. <br><br>
                            <u>Harga Terbaik</u><br>
                            Kami hanya akan menambahkan tagihan tambahan untuk jasa kami, lebih dari itu semuanya kena
                            ke biaya asli dari barang dan biaya lain lainnya.
                        </div>
                    </div>

                    <h4 class="topmargin">Pemesanan <small>(5)</small></h4>

                    <div class="accordion accordion-border mb-0 clearfix" data-state="closed">

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Bagaimana cara melakukan pemesanan?
                            </div>
                        </div>
                        <div class="accordion-content">
                            pesan online <br>
                            <ul>
                                <li>kunjungi website kita <a href="/">www.belanjasemua.com</a></li>
                                <li>masukkan data pemesan dan data barang yang mau dipesan</li>
                                <li>konfirmasi pemesanan melalui email yang dikirim oleh tim kita</li>
                                <li>dan lakukan pembayaran yang sesuai dengan pembayaran yang tertera.</li>
                            </ul>
                            pesan offline (whatsapp) <br>
                            <ul>
                                <li>Hubungi tim kami melalui whatsapp <a
                                        href="https://wa.me/6282370809595">+6282370809595</a></li>
                            </ul>
                        </div>
                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Bagaimana jika saya malas mengisi form?
                            </div>
                        </div>
                        <div class="accordion-content">
                            Hubungi tim kami melalui whatsapp <a href="https://wa.me/6282370809595">+6282370809595</a>
                        </div>
                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Apakah bisa membatalkan pesanan atau mengubah pesanan?
                            </div>
                        </div>
                        <div class="accordion-content">
                            perubahan dan pembatalan pesanan dapat dilakukan oleh pihak belanjasemua.com apabila pihak
                            belanjasemua.com belum bayar atau
                            barang yang dipesan tidak tersedia. Apabila ada kesalahan pesanan akibat kelalaian pihak
                            belanjasemua.com maka
                            tidak bisa dibatalkan.
                            <br><br>
                            contoh:
                            pesanan awal: Beli Iphone 11 Pro 64GB, setelah sampai ke pihak belanjasemua.com trus pihak
                            pembeli berubah pikiran mau
                            yang IPhone 11 Pro Max 64GB. Nah, yang kasus seperti ini tidak bisa dibatalkan ya pihak
                            belanjasemua.com.
                        </div>
                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Bagaimana jika barang yang dipesan tidak tersedia?
                            </div>
                        </div>
                        <div class="accordion-content">
                            pesanan akan dibatalkan dan uang akan dikembalikan (refund)
                        </div>
                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Bagaimana jika ingin melakukan pemesanan dalam jumlah besar?
                            </div>
                        </div>
                        <div class="accordion-content">
                            langsung aja hubungi pihak Tim belanjasemua di whatsapp atau melalui email
                            hallo@belanjasemua.com
                        </div>
                    </div>

                    <h4 class="topmargin">Pembayaran <small>(2)</small></h4>

                    <div class="accordion accordion-border mb-0 clearfix" data-state="closed">

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Bagaimana melakukan pembayaran di belanjasemua.com
                            </div>
                        </div>
                        <div class="accordion-content">
                            Bisa dengan transfer bank, kartu kredit, paypal, dan pembayaran elektronik seperti OVO dan
                            Dana.
                        </div>
                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Apa saja komponen biaya yang ada di belanjasemua.com?
                            </div>
                        </div>
                        <div class="accordion-content">
                            Biaya pengiriman, biaya jasa, biaya asuransi, biaya pajak bea masuk apabila pembelian
                            dilakukan di luar negara.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                    <h4>Pengiriman <small>(3)</small></h4>

                    <div class="accordion accordion-border clearfix" data-state="closed">

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Berapa biaya pengiriman ke alamat masing-masing?
                            </div>
                        </div>
                        <div class="accordion-content">
                            belanjasemua.com memberikan biaya pengiriman yang asli & transparan, dan biaya tersebut
                            ditanggung oleh pembeli.
                        </div>

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Apakah barang yang dikirim mendapatkan jaminan?
                            </div>
                        </div>
                        <div class="accordion-content">
                            Benar, semua barang yang dikirim akan mendapatkan perlindungan asuransi.
                        </div>

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Bagaimana saya melacak pengiriman pesanan saya?
                            </div>
                        </div>
                        <div class="accordion-content">
                            Kami akan mengirimkan kode tracking berdasarkan jasa logistik yang dapat di lacak di website
                            logistik tersebut.
                        </div>

                    </div>

                    <h4 class="topmargin">Kerusakan / Kehilangan <small>(3)</small></h4>

                    <div class="accordion accordion-border mb-0 clearfix" data-state="closed">

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Bagaimana jika barang hilang/rusak?
                            </div>
                        </div>
                        <div class="accordion-content">
                            Semua pengiriman dilindungi oleh asuransi terbaik yang akan memproses klaim asuransi
                            kehilangan atau kerusakan.
                        </div>
                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Berapa lama proses klaim asuransi?
                            </div>
                        </div>
                        <div class="accordion-content">
                            Proses klaim asuransi tergantung dari kasus dan proses dari pihak penyedia asuransi.
                        </div>
                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Siapa yang akan melakukan proses klaim?
                            </div>
                        </div>
                        <div class="accordion-content">
                            Proses klaim akan sepenuhnya ditangani oleh belanjasemua.com
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
