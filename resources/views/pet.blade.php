@extends('index')
@section('content')
    <div style="text-align: center;margin-bottom: 20px;margin-top: 10px">
        <h1 class="btn btn-success" style="width: 50%">Choose your favourite food</h1>
    </div>
    <div class="row">
        @foreach($pets as $pet)
            <div class="col-md-4">
                <div class="card @if(\Illuminate\Support\Facades\Session::get('pet_id') == $pet->id){{ "selected" }}@endif" style="width: 18rem">
                    <img src="{{asset('image_survey/'.$pet->image)}}" class="card-img-top" alt="..." style="height: 200px">
                    <div class="card-body">
                        <h5 class="card-title">{{$pet->name}}</h5>
                        <p class="card-text">{{$pet->description}}</p>
                        <div style="text-align: center">
                            <a href="{{route('selectPet',$pet->id)}}" class="btn btn-outline-primary">Select</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div style="text-align: center;margin-top: 20px">
        <a href="{{route('showFoods')}}" class="btn btn-danger">Back</a>
    </div>
@endsection
