@extends('Backend.master')
@section('content')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><code style="color: lightblue;">Add Admin</code>
            </h3>
        </div>
        <div class="box-body">
            @include('message.message')
            <form method="post" enctype="multipart/form-data" action="{{route('admin-action')}}">
                {{csrf_field()}}
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                @if($errors->has('username'))
                    <code>
                        {{$errors->first('username')}}
                    </code>
                @endif
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                @if($errors->has('email'))
                    <code>
                        {{$errors->first('email')}}
                    </code>
                @endif
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                @if($errors->has('address'))
                    <code>
                        {{$errors->first('address')}}
                    </code>
                @endif
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                    <input type="file" class="form-control" name="image">
                </div>
                @if($errors->has('image'))
                    <code>
                        {{$errors->first('image')}}
                    </code>
                @endif
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                @if($errors->has('password'))
                    <code>
                        {{$errors->first('password')}}
                    </code>
                @endif
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-check-square-o"></i></span>
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Confirm Password">
                </div>
                @if($errors->has('password_confirmation'))
                    <code>
                        {{$errors->first('password_confirmation')}}
                    </code>
                @endif
                <br>
                <button type="submit" class="btn btn-social btn-bitbucket"><i class="fa fa-users"></i>Create Admin
                </button>
            </form>
        {{--button--}}

        {{--<div class="box">--}}
        {{--<div class="box-header">--}}
        {{--<h3 class="box-title">Social Buttons (By <a href="https://github.com/lipis/bootstrap-social">Lipis</a>)--}}
        {{--</h3>--}}
        {{--</div>--}}
        {{--<div class="box-body">--}}
        {{--<a class="btn btn-block btn-social btn-bitbucket">--}}
        {{--<i class="fa fa-bitbucket"></i> Sign in with Bitbucket--}}
        {{--</a>--}}

        {{--<br>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--end of button--}}



        <!-- /input-group -->
        </div>
        <!-- /.box-body -->
    </div>



@endsection