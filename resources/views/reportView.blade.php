
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
                     <th>Month</th>
                     <th>Option</th>
                   </tr>
                 </thead>
                 <tbody>

                  @foreach($data as $row)
                   <tr>
                       <td>2022 {{$row}}</td>                      
                       <td><a href="{{route('reportViewSelected', array_search($row, $data)) }}"> <button class="btn btn-success"> View Report </button></a> </td>
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