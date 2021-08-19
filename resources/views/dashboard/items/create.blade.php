@extends('layouts.app')

@section('content')


    <div class="container m-4">

        <span class="text-lg font-medium border-b">Create</span>
        <form action="{{route('items.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')

            <div class="grid grid-cols-5 gap-10 mt-4">

                <div>
                    <label for="name">Name</label>
                    <div><input class="w-56" type="text" id="name" name="name" placeholder="Item Name..."></div>
                    @error('name')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>



                <div class="">
                    <select class="w-full" name="status_id" id="">
                        <option value="">Select Status</option>
                        @foreach($statuses as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <select class="w-full" name="manufacturer_id" id="">
                        <option value="">Select Manufacturer</option>
                            <option value="1">M1</option>
                    </select>
                </div>
                <div></div>
                <div></div>
                <style>
                    select.category{
                        width: 20rem;
                    }
                </style>
                <div>
                    <select class="category" multiple name="categories[]" id="">
                        <option value="">Select Categories</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <style>
                    input.file{
                        width: 20rem;
                        height: 6rem;
                    }
                </style>
                <div class="ml-10">
                    <input class="file" type="file" name="image_url">
                </div>
            </div>
            <div class="mt-6">
                <button class="bg-green-400 text-white p-4">Save Changes</button>
            </div>
        </form>
    </div>

@endsection
