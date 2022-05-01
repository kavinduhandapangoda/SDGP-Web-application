
@extends('layout.inc')

 @section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Scan Data Tables</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Detected Trees</th>
                      <th>Scan Date</th>
                      <th> Option </th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->trees}}</td>
                        <td>{{$row->created_at}}</td>
                        
                        <td><a href="{{route('mapViewSelected', $row->created_at) }}"> <button class="btn btn-success"> View Details </button></a> </td>
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
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection