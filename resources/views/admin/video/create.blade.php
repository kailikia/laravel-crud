@extends('admin.main')
@section('title', 'Videos')
@section('content')


<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      @include('admin.partials.validate')


      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Videos Link Create</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
        <form action="{{route('admin.videos.store')}}" method="post">
        {{csrf_field()}}
        {{method_field('POST')}}
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">URL</label>
                  <input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="Create URL">
                </div>
      
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </form>

        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@endsection