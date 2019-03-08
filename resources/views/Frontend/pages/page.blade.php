@extends('Frontend.index')

@section('frontendTitle')
    {{ucfirst($category_name)}}

@endsection

@section('frontendContent')
    {{--@foreach($stock as $value)--}}
    {{--<div class="card" style="width: 18rem;">--}}
    {{--<img src="{{URL::to('Uploads/Backend/'.$value->image)}}" class="card-img-top" alt="...">--}}
    {{--<div class="card-body">--}}
    {{--<h5 class="card-title">{{$value->name}}</h5>--}}
    {{--<a href="{{url('content',['id'=>$value->id])}}" class="btn btn-primary">Details</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}




    <div class="container">
        <div class="row">
            @foreach($stock as $stocks)
                <div class="col-md-3">
                    <div class="w3-container">
                        <div class="w3-display-container">
                            <img src="{{URL::to('Uploads/Backend/'.$stocks->image)}}" style="width:100%">
                            <span class="w3-tag w3-display-topleft">New</span>
                            <div class="w3-display-middle w3-display-hover">
                                <a style="text-decoration: none" class="w3-button w3-black"
                                   href="{{url('content',['id'=>$stocks->id])}}">{{$stocks->name}} <i
                                            class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <p>{{$stocks->name}}<br><b>$19.99</b></p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


@endsection
