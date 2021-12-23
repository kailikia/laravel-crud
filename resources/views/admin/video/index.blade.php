@extends('admin.main')
@section('title', 'Video')
@section('content')

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
    @include('admin.partials.validate')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Video</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>

                    <th>ID</th>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Delete</th>
                    
                </tr>
                </thead>
                <!-- <tbody> -->
                  <tr>
                    <tbody>
                       @foreach($videos as $video)
                        <td>{{$video->id}}</td>
                        <td>{{$video->name}}</td>
                        <td>{{$video->url}}</td>
                        <td><a href="{{ route('admin.videos.remove',['id' =>$video->id])}}">Deleteoo</a></td>
                      @endforeach
                    </tbody>
                                        
                  </tr>
                <!-- </troot> -->
              </table>
            </div>
          <!-- /.box -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@endsection
@push('style')
      <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/admin')}}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush
@push('scripts')
<!-- DataTables -->
<script src="{{asset('assets/admin')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/admin')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>