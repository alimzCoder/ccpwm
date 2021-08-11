@extends('layouts.app')

@section('content')


    <div class="container m-4">

        <span class="text-lg font-medium border-b">Create</span>
        <form action="{{route('currencies.store')}}" method="POST">
            @csrf
            @method('POST')

        <div class="grid grid-cols-5 gap-4 mt-4">

            <div>
                <label for="name">Name</label>
                <div><input class="w-56" type="text" id="name" name="name" placeholder="Currency Name..."></div>
                @error('name')
                <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror
            </div>


            <div class="mt-">
                <label for="code">Code</label>
                <div><input class="w-56" type="text" id="code" name="code"  placeholder="Currency Code 3 char max..."></div>
                @error('code')
                <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror
            </div>
            <div></div>
            <div></div>
            <div></div>
            <div class="mt-">
                <label for="exchange_rate">Rate</label>
                <div><input class="w-56" type="number" id="exchange_rate" name="exchange_rate"  placeholder="Currency Rate..."></div>
                @error('exchange_rate')
                <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror
            </div>

            <div>
                <select name="is_default_exchanger" id="">
                    <option value="">Select Value</option>
                    <option value="1">Default</option>
                    <option value="0">Not Default</option>
                </select>
            </div>

            <div>
                <button class="bg-green-400 text-white p-4">Save Changes</button>
            </div>
        </div>
        </form>
    </div>

@endsection
