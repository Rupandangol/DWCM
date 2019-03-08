@extends('Backend.master')


@section('content')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Update Category</h3>
        </div>
        <!-- /.box-header -->
    @include('message.message')
    <!-- form start -->
        <form method="post" action="{{route('updateCategory-Action')}}" class="form-horizontal">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label for="category" class="col-sm-2 control-label">Category Name</label>

                    <div class="col-sm-10">
                        <input type="text" value="{{$item->name}}"  name="category" class="form-control" id="inputEmail3"
                               placeholder="Category Name">
                    </div>
                    <input type="hidden" name="id" value="{{$item->id}}">
                </div>
                @if($errors->has('name'))
                    <div style="left: 220px;" class="text-danger col-md-9 col-sm-9 col-xs-12">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <a class="btn btn-default" href="{{url('/@admin@/manageCategory')}}">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Add Category</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>

@endsection