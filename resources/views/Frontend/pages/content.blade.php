@extends('Frontend.index')

@section('frontendTitle')
    {{ucfirst($stock->getCategory->name)}}
    <span class="badge badge-info"> {{ucfirst($stock->name)}}</span>

@endsection

@section('frontendContent')


    <div class="jumbotron">
        <div class="pull-right">
            <img src="{{URL::to('Uploads/Backend/'.$stock->image)}}" alt="">

        </div>
        <h1 class="display-4">{{ucfirst($stock->name)}}!</h1>
        <p class="lead">{{ucfirst($stock->detail)}}</p>

        <hr class="my-4">
        <p>{{ucfirst($stock->detail)}}</p>


    </div>
    
    
    



@endsection
