@extends('dashboards')
@section('titledash','Order Managements')
@section('activeorder','active')
@section('contents')
<div class="container-fluid">
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
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-question"></i></span>
                                        </a>
                                        <a href="/admin/customerorder/trash/{{$order->id}}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a></td>
                                </tr>
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
