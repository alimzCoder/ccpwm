@extends('layouts.app')

@section('content')


    <div class="container m-4">

        <span class="text-lg font-medium border-b">Currencies</span>
        <span class="px-4"><a class="border-b text-blue-500" href="{{route('taxes.create')}}">create</a></span>
        <div class="gird grid-cols-1 gap-4 shadow-md rounded-lg p-4">
            <div class="flex justify-start items-center gap-80 border-b">
                <span>ID</span>
                <span>Index</span>
                <span>Amount</span>
                <span>Status</span>
            </div>
            @foreach($records as $record)
                <div class="flex justify-start   items-center gap-80 border-b">
                    <span>{{$record->id}}</span>
                    <span>{{$record->index}}</span>
                    <div class="">{{$record->amount}}</div>
                    <div class="">{{$record->is_active}}</div>
                    <a href="">edit</a>
                    <a href="">delete</a>
                </div>
            @endforeach
        </div>

    </div>




@endsection



