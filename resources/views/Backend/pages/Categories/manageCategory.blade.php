@extends('Backend.master')


@section('content')
    @include('message.message')

    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        @foreach($item as $key=>$value)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$value->name}}</td>
                <td><a class="btn bg-purple btn-xs" href="{{url('/@admin@/manageCategory/updateCategory/'.$value->id)}}"><i class="fa fa-pencil"></i></a></td>
                <td><a class="btn btn-danger btn-xs" href="{{url('/@admin@/manageCategory/deleteCategory/'.$value->id)}}"><i class="fa fa-trash"></i></a></td>
            </tr>
        @endforeach

    </table>

@endsection