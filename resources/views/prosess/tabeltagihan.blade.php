@extends('layouts.admin')


@section('content')

  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-12">
                    <h2>E-commerce orders</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>E-commerce</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Orders</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">

          {!! Form::open(['method'=>'POST', 'action'=> 'TagihanController@store']) !!}
            <div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                           
                            <label class="col-form-label" for="customer">Bulan</label>
                            {!! Form::select('bulan',['Januari' => 'Januari','Februari'=>'Februari','Maret'=>'Maret','April'=>'April','Mei'=>'Mei','Juni'=>'Juni','Juli'=>'Juli','Agustus'=>'Agustus','September'=>'September','Oktober'=>'Oktober','November'=>'November','Desember'=>'Desember'],null, ['class'=>'form-control','placeholder'=>'Pilih Bulan']) !!}

                        </div>
                         </div>
                        <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="customer">Tahun</label>
                           {!! Form::text('tahun', null, ['class'=>'form-control'])!!}
                        </div>
                    </div>
                   
                    
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="col-form-label" for="date_added">Tanggal Invoice</label>
                            <div class="input-group date">
                                {{ Form::date('fixture_date', \Carbon\Carbon::now()),['class'=>'fa-calender']}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                             {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>

@endsection