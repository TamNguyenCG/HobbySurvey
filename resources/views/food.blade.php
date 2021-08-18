@extends('index')
@section('content')
    <div style="text-align: center;margin-bottom: 20px;margin-top: 10px">
        <h1 class="btn btn-success" style="width: 50%">Choose your favourite food</h1>
    </div>
    <div class="row">
        @foreach($foods as $food)
            <div class="col-md-4">
                <div class="card @if(\Illuminate\Support\Facades\Session::get('food_id') == $food->id){{ "selected" }}@endif" style="width: 18rem">
                    <img style="height: 200px" src="{{asset('image_survey/'.$food->image)}}" class="card-img-top"
                         alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$food->name}}</h5>
                        <p class="card-text">{{$food->description}}</p>
                        <div style="text-align: center">
                            <a href="{{route('selectFood',$food->id)}}" class="btn btn-outline-primary">Select</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div style="text-align: center;margin-top: 20px">
        <a href="{{route('welcome')}}" class="btn btn-danger">Back</a>
    </div>
@endsection
