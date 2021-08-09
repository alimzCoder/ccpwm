@extends('layouts.app')

@section('content')


    <div class="container m-4">

        <span class="text-lg font-medium border-b">Currencies</span>
        <span class="px-4"><a class="border-b text-blue-500" href="{{route('currencies.create')}}">create</a></span>
        <div class="gird grid-cols-1 gap-4 shadow-md rounded-lg p-4">
            <div class="flex justify-start items-center gap-80 border-b">
                <span>name</span>
                <span>Code</span>
                <span>Exchange Rate</span>
                <span>Status</span>
            </div>
            @foreach($records as $record)
            <div class="flex justify-start   items-center gap-80 border-b">
                <span>{{$record->name}}</span>
                <span>{{$record->code}}</span>
                <div class="">{{$record->exchange_rate}}</div>
                <div class="">{{$record->is_default_exchanger}}</div>
                <a href="">edit</a>
                <a href="">delete</a>
            </div>
            @endforeach
        </div>

    </div>




@endsection


