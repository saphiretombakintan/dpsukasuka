@extends('layouts.admin')


@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
<div class="ibox-content m-b-sm border-bottom">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                        <div class="ibox-title">
                             <center><h1>Tabel Angsuran</h1> </center>
                                   <div class="col-lg-4">
                                    <table class="table">
                                        <thead>
                                        <tr>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td>{{$konsumen[0]->costumer_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Unit</td>
                                            <td>:</td>
                                            <td>{{$konsumen[0]->unitcode}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Mulai</td>
                                            <td>:</td>
                                            <td>{{$konsumen[0]->date}}</td>
                                        </tr>
                                        <tr>
                                            <td>Angsuran</td>
                                            <td>:</td>
                                            <td>{{$konsumen[0]->desc}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                            </div>
                            
                           
                        </div>
                        <div class="ibox-content">

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Angsuran</th>
                                    <th>Tagihan</th>
                                    <th>Pembayaran</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $nominal = 0;
                                     $pembayaran = 0; 
                                     $a = 0; 
                                @endphp
                                 @foreach ($konsumen as $Konsumen)
                                 @php $nominal += $Konsumen->invoice;
                                      $pembayaran += $Konsumen->paid;
                                      $a = $a+1;
                                      $time = strtotime($Konsumen->date);
                                      $newdate = date('d-m-Y',$time);
                                      $sisa = $jumlah - $nominal;
                                 @endphp
                                <tr>
                                   <td>@php echo $a @endphp</td>
                                    <td>@php echo $newdate @endphp</td>
                                    <td>{{$Konsumen->descr}}</td>
                                    <td align='right'>{{number_format($Konsumen->invoice, 0, ',', '.')}}</td>
                                    <td align='right'>{{number_format($Konsumen->paid, 0, ',', '.')}}</td>
                                    <td align='right'>@php echo number_format($sisa, 0, ',', '.') @endphp</td>
                                     
                                </tr>
                                @endforeach
                                <tr>
                                  <td colspan="3">Jumlah</td>
                                   <td align='right'>@php echo number_format($nominal, 0, ',', '.') @endphp</td>
                                    
                                    <td align='right'>@php echo number_format($pembayaran, 0, ',', '.') @endphp</td>
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