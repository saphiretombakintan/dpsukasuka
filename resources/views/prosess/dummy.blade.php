
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Table Edit Delete Mysql Data using Tabledit Plugin in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
  </head>
  <body>
   @include('admin.partials._navbar')
    <div class="container">
      <br />
      <h3 align="center">ANGSURAN</h3>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Sample Data</h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            @csrf
            <table id="editable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Cluster</th>
                                <th>Status</th>
                                <th>Nama Konsumen</th>
                                <th>Tenor</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $row)
                <tr>
                   <td>{{$row->id}}</td>
                                <td>{{$row->cluster}}</td>
                                <td>{{$row->namakonsumen}}</td>
                                 <td>{{$row->angsuran}}</td>
                                <td>{{$row->tenor}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
   
  $.ajaxSetup({
    headers:{
      'X-CSRF-Token' : $("input[name=_token]").val()
    }
  });

  $('#editable').Tabledit({
    url:'{{ route("tabledit.action") }}',
    dataType:"json",
    columns:{
      identifier:[0, 'id'],
      editable:[ [1, 'cluster'],[2, 'namakonsumen'],[3, 'angsuran'],[4, 'tenor']]
    },
    restoreButton:false,
    onSuccess:function(data, textStatus, jqXHR)
    {
      if(data.action == 'delete')
      {
        $('#'+data.id).remove();
      }
    }
  });

});  
</script>

