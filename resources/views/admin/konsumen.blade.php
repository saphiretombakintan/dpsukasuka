@extends('layouts.admin')


@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5> Data Tables Pinjaman Tobis</h5>

                    </div>

                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Cluster</th>
                                        <th>Name</th>
                                        <th>No Tlp</th>
                                        <th>No Ph </th>

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
                                        <td>{{$Konsumen->notlp}}</td>
                                        <td>{{$Konsumen->noph}}</td>
                                    </tr>

                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection