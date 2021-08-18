@extends('index')
@section('content')
    <div style="text-align: center;margin-bottom: 20px;margin-top: 10px">
        <h1 class="btn btn-success" style="width: 50%">Compare your result</h1>
    </div>
    <table class="table shadow text-center">
        @foreach($array as $i => $values)
            <tr>
                @foreach($values as $j => $value)
                    <td @if($i.$j == $selectedResult)style="background-color: green" @endif style="width: 20%">{{ $value }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
    <div style="text-align: center;margin-top: 20px">
        <a href="{{route('showPets')}}" class="btn btn-danger">Back</a>
    </div>
@endsection
