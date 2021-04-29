@extends('layouts.admin')


@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox-content m-b-sm border-bottom">


        {!! Form::open(['method'=>'POST', 'action'=> 'KonsumenController@cari', 'files'=>true]) !!}
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-form-label" for="status">Cluster</label>

                    {!! Form::select('cluster',['BOUGENVILLE' => 'Bougenvile','EMERALD'=>'Emerlad','GREEN APPLE'=>'Green Apple','SAPHIRE'=>'Sapphire'],null, ['class'=>'form-control','placeholder'=>'Pilih Cluster']) !!}

                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label class="col-form-label" for="status">Status</label>
                    {!! Form::select('status',['AKTIF' => 'Aktif','NONAKTIF'=>'Non Aktif','LUNAS'=>'Lunas'],null, ['class'=>'form-control','placeholder'=>'Pilih Status']) !!}

                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">

                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="col-form-label" for="quantity">Search</label>
                    {!! Form::submit('Filter', ['class'=>'btn btn-w-m btn-info']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-content">
                    <table class="table">
                        <thead>
                            @php
                            $jml = 0;
                            $pokok = 0;
                            $bayar = 0;
                            $sisa = 0;
                            @endphp
                            @foreach ($konsumen as $kons)
                            @php $jml =$jml+1 ;
                            $pokok += $kons->pokokpiutang;
                            $bayar += $kons->tertagihpiutang;
                            $sisa += $kons->sisapiutang;

                            @endphp

                            @endforeach

                            <tr>
                                <th>
                                    Jumlah Unit
                                </th>
                                <th>
                                    Pokok Piutang
                                </th>
                                <th>
                                    Piutang Terbayar
                                </th>
                                <th>
                                    Sisa Piutang
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="text-muted">@php echo number_format($jml, 0, ',', '.')@endphp</span></td>
                                <td><span class="text-muted">@php echo number_format($pokok, 0, ',', '.')@endphp</span></td>
                                <td><span class="text-muted">@php echo number_format($bayar, 0, ',', '.')@endphp</span></td>
                                <td><span class="text-muted">@php echo number_format($sisa, 0, ',', '.')@endphp</span></td>
                            </tr>

                        </tbody>
                    </table>

                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cluster</th>
                                    <th>Name</th>
                                    <th>Pokok Hutang</th>
                                    <th>Piutang </th>
                                    <th>Sisa Hutang</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $a = 0; @endphp
                                @foreach ($konsumen as $Konsumen)

                                @php $a = $a+1;@endphp
                                <tr>
                                    <td>@php echo $a @endphp</td>
                                    <td>{{$Konsumen->cluster}}</td>
                                    <td>{{$Konsumen->namakonsumen}}</td>
                                    <td align='right'>{{number_format($Konsumen->pokokpiutang, 0, ',', '.')}}</td>
                                    <td align='right'>{{number_format($Konsumen->tertagihpiutang, 0, ',', '.')}}</td>
                                    <td align='right'>{{number_format($Konsumen->sisapiutang, 0, ',', '.')}}</td>
                                    <td><a href="{{ route('detailkonsumen',['id' => $Konsumen->id]) }}" class="btn btn-primary btn-xs">View</a></td>
                                </tr>

                                @endforeach


                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection