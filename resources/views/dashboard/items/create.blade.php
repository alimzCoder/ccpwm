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
                    <div><input class="w-full" type="text" id="name" name="name" placeholder="Item Name..."></div>
                    @error('name')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>



                <div class="">
                    <label for="status">Status</label>
                    <select class="w-full border border-gray-200" name="status_id" id="status">
                        <option value="">Select Status</option>
                        @foreach($statuses as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="name">Manufacturer</label>
                    <select class="w-full border border-gray-200" name="manufacturer_id" id="">
                        <option value="">Select Manufacturer</option>
                        @foreach($manufacturers as $man)
                            <option value="{{$man->id}}">{{$man->name}}</option>
                        @endforeach
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
                    <label for="name">Categories</label>
                    <select class="category border border-gray-200" multiple name="categories[]" id="">
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
                <div></div>
                <div class="">
                    <div>
                        <label for="image_url" class="mb-1 block cursor-pointer font-bold text-gray-400">
                            Item Image
                            <div class="w-full h-48 bg-gray-100 mt-2 rounded shadow-lg border relative hover:border-purple-300">
                                <img id="blah" class="w-full h-full object-center object-cover rounded"

                                     src="https://i2.wp.com/melsmunchies.com/wp-content/plugins/woocommerce/assets/images/placeholder.png?ssl=1" alt="">
                                <div class="text-center absolute bottom-0 w-full">
                                    <div class="flex items-center justify-center">
                                        <i class="text-xl fa fa-cloud-upload-alt text-gray-300"></i>
                                        <div class="text-sm font-medium ml-2">
                                            Choose an image
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <input id="image_url" name="image_url" type="file"  class="hidden">
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <button class="bg-green-400 text-white p-4">Save Changes</button>
            </div>
        </form>
    </div>

@endsection
