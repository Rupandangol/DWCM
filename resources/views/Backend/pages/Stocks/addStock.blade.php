@extends('Backend.master')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Add Stock</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('message.message')

        <form method="post" enctype="multipart/form-data" action="{{route('addStock-action')}}">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="stock_name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>
                @if($errors->has('stock_name'))
                    <code>
                        {{$errors->first('stock_name')}}
                    </code>
                @endif
                <div class="form-group">
                    <label>Select</label>
                    <select name="category_id" class="form-control">
                        @foreach($item as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                @if($errors->has('image'))
                    <span><code>
                    {{$errors->first('image')}}</code>
                    </span>
                @endif
                <div class="form-group">
                    <label for="details">Details</label>
                    <input type="text" class="form-control" name="stock_detail" id="exampleInputEmail1" placeholder="Enter detail">
                </div>
                @if($errors->has('stock_detail'))
                    <span><code>
                    {{$errors->first('stock_detail')}}</code>
                    </span>
                @endif

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection
@section('myFooterBackend')
    <script>
        $(function () {
            $('.textarea').wysihtml5();
            CKEDITOR.replace('editor1')
        })
    </script>
@endsection
