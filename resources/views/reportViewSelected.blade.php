
@extends('layout.inc')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Report View</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
           
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

                <div class="row">
                  <div class="col-6">
                      <h3>Month : <b><span style="color: green">{{$month}}</span></b></h3>
                  </div>
                  <div class="col-6">
                      <h3>No of scans : {{$dataArray[0]}}</h3>
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                      <h3>Most identifeid disease : {{$disease}}</h3>
                  </div>
                  <div class="col-6">
                      <h3>No of Trees Detected : {{$dataArray[1]}}</h3>
                  </div>
                </div>

                <br>
                <table class="table table-bordered">
                  <thead style="background-color: rgb(220, 252, 221)">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Disease</th>
                      <th>Solution</th>
                      <th>Detected date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->disease}}</td>
                      <td>{{$solutionList[$item->disease]}}</td>
                      <td>{{$item->created_at}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    
    <script type="text/javascript">
      function autoRefreshPage()
      {
          window.location = window.location.href;
      }
      setInterval('autoRefreshPage()', 100000);
  </script>

@endsection