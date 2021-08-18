@extends('index')
@section('content')
    <style>
        p {
            background-color: #fff;
            color: #636b6f;
            font-family: "Comic Sans MS", "Comic Sans", cursive;
            font-size:100px;
            height: 50vh;
            margin: 0;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        label{
            background-color: #fff;
            color: #636b6f;
            font-family: "Comic Sans MS", "Comic Sans", cursive;
            font-size:25px;
        }
    </style>
    <p>Welcome to survey</p>
    <form method="get" action="{{route('createEmail')}}">
        <div class="form-group" style="text-align: center">
            <label> Insert your email to begin
            <input type="email" class="form-control" placeholder="Email" name="email" required>
            </label>
            <button type="submit" class="btn btn-primary">Begin</button>
        </div>
    </form>
@endsection
