@extends('layouts.admin')


@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">

                        <h5>Tabel Angsuran : {{$nama->costumer}} </h5>

                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pinjaman</th>
                                    <th>PH Notaris</th>
                                    <th>Nominal</th>
                                    <th>Pembayaran</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php $nominal = 0;
                                $pembayaran = 0;
                                @endphp
                                @foreach ($konsumen as $Konsumen)
                                @php $nominal += $Konsumen->nominal;
                                $pembayaran += $Konsumen->pembayaran;
                                @endphp
                                <tr>
                                    <td>#</td>
                                    <td>{{$Konsumen->pinjaman}}</td>
                                    <td>{{$Konsumen->phnotaris}}</td>
                                    <td align='right'>{{number_format($Konsumen->nominal, 0, ',', '.')}}</td>
                                    <td align='right'>{{number_format($Konsumen->pembayaran, 0, ',', '.')}}</td>
                                    <td><a href="{{ route('angsuran',['id' => $Konsumen->id]) }}" class="btn btn-primary btn-xs">View</a></td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3">Jumlah</td>
                                    <td align='right'>@php echo number_format($nominal, 0, ',', '.') @endphp</td>

                                    <td align='right'>@php echo number_format($pembayaran, 0, ',', '.')@endphp</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection