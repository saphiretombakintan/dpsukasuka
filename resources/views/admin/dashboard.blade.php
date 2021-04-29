@extends('layouts.admin')


@section('content')
                @foreach ($invoice as $invoice)

            <div class="row">
                <div class="col-md-2">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                <span class="label label-success float-right">Monthly</span>
                            </div>
                            <h5>Invoice</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{$invoice->invoice}}</h1>
                            <small>Total Tagihan</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                <span class="label label-info float-right">Annual</span>
                            </div>
                            <h5>Payment</h5>
                        </div>
                        <div class="ibox-content">
                                    <h1 class="no-margins">{{$invoice->payment}}</h1>
                                    <small>Pembayaran</small>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($invoice2 as $invoice2)

                <div class="col-md-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                <span class="label label-primary float-right">January</span>
                            </div>
                            <h5>Bulan Lalu</h5>
                        </div>
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="no-margins">{{$invoice2->invoice}}</h1>
                                    <div> <small>Tagihan</small></div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="no-margins">{{$invoice2->payment}}</h1>
                                    <div></i> <small>Pembayaran</small></div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Monthly income</h5>
                            <div class="ibox-tools">
                                <span class="label label-primary">Updated 20.2021</span>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="no-margins">Rp.0</h1>
                                    <div> <small>Pembayaran</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="ibox ">
                            <div class="ibox-content">
                                <div>
                                        <span class="float-right text-right">
                                        <small>Average value of sales in the past month in: <strong>United states</strong></small>
                                            <br/>
                                            All sales: 162,862
                                        </span>
                                    <h3 class="font-bold no-margins">
                                        Half-year revenue margin
                                    </h3>
                                    <small>Sales marketing.</small>
                                </div>


                                <!-- <div class="m-t-sm">

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div>
                                            <canvas id="lineChart" height="114"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="stat-list m-t-lg">
                                                <li>
                                                    <h2 class="no-margins">2,346</h2>
                                                    <small>Total orders in period</small>
                                                    <div class="progress progress-mini">
                                                        <div class="progress-bar" style="width: 48%;"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h2 class="no-margins ">4,422</h2>
                                                    <small>Orders in last month</small>
                                                    <div class="progress progress-mini">
                                                        <div class="progress-bar" style="width: 60%;"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div> -->

                                <div class="m-t-md">
                                    <small class="float-right">
                                        <i class="fa fa-clock-o"> </i>
                                        Update on 16.07.2015
                                    </small>
                                    <small>
                                        <strong>Analysis of sales:</strong> The value has been changed over time, and last month reached a level over $50,000.
                                    </small>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-warning float-right">Data has changed</span>
                                <h5>User activity</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-4">
                                        <small class="stats-label">Bougen / Total</small>
                                        <h4>14</h4>
                                    </div>

                                    <div class="col-4">
                                        <small class="stats-label">Aktif</small>
                                        <h4>{{$bougen}}</h4>
                                    </div>
                                    <div class="col-4">
                                        <small class="stats-label">Non Aktif</small>
                                        <h4>3</h4>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-4">
                                        <small class="stats-label">Emerald / Total</small>
                                        <h4>37</h4>
                                    </div>

                                    <div class="col-4">
                                        <small class="stats-label">Aktif</small>
                                        <h4>{{$emerald}}</h4>
                                    </div>
                                    <div class="col-4">
                                        <small class="stats-label">Non Aktif</small>
                                        <h4>11</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-4">
                                        <small class="stats-label">Grn Apple / Total</small>
                                        <h4>19</h4>
                                    </div>

                                    <div class="col-4">
                                        <small class="stats-label">Aktif</small>
                                        <h4>{{$green}}</h4>
                                    </div>
                                
                                    <div class="col-4">
                                        <small class="stats-label">Non Aktif</small>
                                        <h4>3</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-4">
                                        <small class="stats-label">Sapphire / Total</small>
                                        <h4>37</h4>
                                    </div>

                                    <div class="col-4">
                                        <small class="stats-label">Aktif</small>
                                        <h4>19</h4>
                                    </div>
                                    <div class="col-4">
                                        <small class="stats-label">Non Aktif</small>
                                        <h4>17</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>List Konsumen WP</h5>
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
                               
                                <div class="table-responsive">
                                    <table class="table table-striped" id="option1">
                                        <thead>
                                        <tr>

                                            <th>#</th>
                                            <th>Cluster </th>
                                            <th>Name </th>
                                            <th>Phone </th>
                                            <th>Pokok Hutang </th>
                                            <th>Piutang Tertagih </th>
                                            <th>Sisa Hutang</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($list as $List)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{$List->cluster}}</td>
                                            <td>{{$List->namakonsumen}}</td>
                                            <td>{{$List->notlp}}</td>
                                            <td>{{$List->pokokpiutang}}</td>
                                            <td>{{$List->tertagihpiutang}}</td>
                                            <td>{{$List->sisapiutang}}</td>
                                            
                                        </tr>
                                        @endforeach
                                       
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

           
      
@endsection