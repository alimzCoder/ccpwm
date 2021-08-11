@extends('layouts.app')

@section('content')


    <div class="container m-4">

        <span class="text-lg font-medium border-b">Edit {{$record->name}}</span>
        <form action="{{route('currencies.update',$record->id)}}" method="Post">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-5 gap-4 mt-4">

                <div>
                    <label for="name">Name</label>
                    <div><input class="w-56" type="text" id="name" name="name" value="{{$record->name}}" required placeholder="Currency Name..."></div>
                </div>

                <div class="mt-">
                    <label for="code">Code</label>
                    <div><input class="w-56" type="text" id="code" name="code" value="{{$record->code}}" required placeholder="Currency Code 3 char max..."></div>
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div class="mt-">
                    <label for="exchange_rate">Rate</label>
                    <div><input class="w-56" type="number" id="exchange_rate" name="exchange_rate"  value="{{$record->exchange_rate}}" required placeholder="Currency Rate..."></div>
                </div>

                <div>
                    <select name="is_default_exchanger" id="">
                        <option value="">Select Value</option>
                        <option value="1" {{$record->is_default_exchanger ==1 ? 'selected' : ''}}>Default</option>
                        <option value="0" {{$record->is_default_exchanger ==0 ? 'selected' : ''}}>Not Default</option>
                    </select>
                </div>

                <div>
                    <button class="bg-green-400 text-white p-4">Save Changes</button>
                </div>
            </div>
        </form>
    </div>

@endsection
