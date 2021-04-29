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
            <div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                             <label class="col-form-label" for="amount">. . .</label>
                              <p>
                                   <a href="{{ route('tabeltagihan') }}" class="btn btn-w-m btn-danger"> List Tagihan</a>
                                 
                             </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Cluster</th>
                                    <th>Nama</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php $a = 0; @endphp
                                @foreach($tagihan as $Tagihan)                       
                                @php $a = $a+1;@endphp
                                <tr>
                                    <td>@php echo $a @endphp</td>
                                    <td>{{$Tagihan->cluster}}</td>
                                    <td>{{$Tagihan->namakonsumen}}</td>
                                    <td><a href="{{ route('createtagihan',['id' => $Tagihan->id]) }}" class="btn btn-primary btn-xs"> Invoice</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <ul class="pagination float-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


        </div>

@endsection