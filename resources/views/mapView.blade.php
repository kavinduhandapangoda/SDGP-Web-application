
@extends('layout.inc')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Map View</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div style="width: 100%; height: 600px;">
              {!! Mapper::render() !!}
          </div>

          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead style="background-color: rgb(220, 252, 221)">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Disease</th>
                      <th>Location</th>
                      <th>Detected date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->disease}}</td>
                      <td>{{$item->location}}</td>
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