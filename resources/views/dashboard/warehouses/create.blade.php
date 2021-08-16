@extends('layouts.app')

@section('content')


    <div class="container m-4">

        <span class="text-lg font-medium border-b">Create</span>
        <form action="{{route('warehouses.store')}}" method="POST">
            @csrf
            @method('POST')

            <div class="grid grid-cols-5 gap-4 mt-4">

                <div>
                    <label for="name">Name</label>
                    <div><input class="w-56" type="text" id="name" name="name" placeholder=" Name..."></div>
                    @error('name')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>


                <div class="mt-">
                    <label for="address">Address</label>
                    <div><input class="w-56" type="text" id="address" name="address"  placeholder="Address..."></div>
                    @error('address')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>


                <div>
                    <button class="bg-green-400 text-white p-4">Save Changes</button>
                </div>
            </div>
        </form>
    </div>

@endsection
