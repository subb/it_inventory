@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Phone Data</h3>
        @if (count($phones)>0)
            <ul>
                @foreach ($phones as $phone)
                    <li>{{ $phone->name}} -> {{number_format($phone->price,2)}}</li>
                @endforeach
            </ul>
            <p>{{$phones->links()}}</p>
        @else
            <p>no data</p>
        @endif
    </div>
@endsection