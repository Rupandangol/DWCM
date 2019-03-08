@extends('Backend.master')


@section('content')
    @include('message.message')

    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th>Category</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        @foreach($item as $key=>$value)
            <tr>
                <td>{{++$key}}</td>
                <td id="stock-id">{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->detail}}</td>
                <td>{{$value->getCategory->name}}</td>
                <td>
                    <button id="update-modal" type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                            data-target="#exampleModal"
                            data-whatever="@getbootstrap"><i class="fa fa-pencil"></i></button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Stock</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{route('update-stock')}}">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="name" class="col-form-label">Name</label>
                                            <input type="text" name="stockName"  class="form-control" id="stock-name">
                                        </div>
                                        <input type="hidden" name="id" value="{{$value->id}}">
                                        <div class="form-group">
                                            <label>Select</label>
                                            <select id="stock-category" name="category_id" class="form-control">
                                                @foreach($category as $key)
                                                    <option value="{{$key->name}}">{{$key->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="detail" class="col-form-label">Details</label>
                                            <textarea class="form-control" name="stockDetails" id="stock-details"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </td>
                <td><a class="btn btn-danger btn-xs" href="{{url('/@admin@/manageStock/deleteStock/'.$value->id)}}"><i
                                class="fa fa-trash"></i></a></td>
            </tr>
        @endforeach


    </table>

@endsection

@section('myFooterBackend')

    <script src="{{url('js/updateStock.js')}}"></script>

@endsection