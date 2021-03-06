@extends('layouts.app')

@section('content')


    <div class="container m-4">

        <span class="text-lg font-medium border-b">Edit {{$record->index}}</span>
        <form action="{{route('taxes.update',$record->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-5 gap-4 mt-4">

                <div>
                    <label for="index">Index</label>
                    <div><input class="w-56" type="text" id="index" value="{{$record->index}}" name="index"
                                placeholder=" Index..."></div>
                    @error('index')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mt-">
                    <label for="amount">Amount</label>
                    <div><input class="w-56" type="text" id="amount" name="amount" value="{{$record->amount}}"
                                placeholder=" amount...">
                    </div>
                    @error('amount')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div></div>
                <div></div>
                <div></div>

                <div class="mt-">
                    <label for="is_active">Status</label>
                    <div><input class="w-56" type="checkbox" {{$record->is_active == 1 ? 'checked' : ''}} id="is_active"
                                name="is_active"
                                placeholder=" Status..."></div>
                </div>

                <div>
                    <button class="bg-green-400 text-white p-4">Save Changes</button>
                </div>

            </div>
        </form>
    </div>

@endsection
