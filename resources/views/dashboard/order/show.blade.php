@extends('dashboards')
@section('titledash','Order Managements')
@section('activeorder','active')
@section('contents')
<div class="container-fluid">
    @if(session('selamat'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <strong>Congratulations {{session()->get('name')}}!</strong> - {{session('selamat')}}
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Produk / URL Produk</th>
                                    <th>Nama Pembeli</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$order->isEmpty())
                                <?php $i = 1; ?>
                                @foreach ($order as $order)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$order->produk}}</td>
                                    <td>{{$order->nama_lengkap}}</td>
                                    <td><a href="" data-toggle="modal" data-target="#vieworder{{$order->id}}"
                                            class="btn btn-success btn-rounded">
                                            <span style="color:;"><i class="fas fa-eye"></i></span>
                                        </a>
                                        <a href="/admin/customerorder/trash/{{$order->id}}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a></td>
                                </tr>
                                {{-- Modal view user --}}
                                <!-- Modal -->
                                <div class="modal fade" id="vieworder{{$order->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="viewuser{{$order->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$order->id}}">View data order
                                                    {{$order->nama_lengkap}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <h5>Informasi umum</h5>
                                                    <p>
                                                        Kamu telah menerima pesanan baru, permintaan order yang
                                                        telah sistem terima: <br><br>
                                                        Produk / URL Produk: {{$order->produk}} <br>
                                                        Kisaran Harga: {{$order->kisaran_harga}} <br>
                                                        Catatan Pesanan: {{$order->catatan}} <br>
                                                        <br>
                                                        <strong>Detail pembeli</strong> <br>
                                                        Nama: {{$order->nama_lengkap}} <br>
                                                        No HP: {{$order->nohp}} <br>
                                                        Email: {{$order->email}} <br><br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4" align="center">No data founded</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
