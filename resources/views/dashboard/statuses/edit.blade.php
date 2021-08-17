@extends('layouts.app')

@section('content')


    <div class="container m-4">

        <span class="text-lg font-medium border-b">Edit {{$record->name}} Status</span>
        <form action="{{route('statuses.update',$record->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-5 gap-4 mt-4">

                <div>
                    <label for="name">Name</label>
                    <div><input class="w-56" type="text" id="name" name="name" value="{{$record->name}}" placeholder=" Name..."></div>
                    @error('name')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div>
                    <label for="value">Value</label>
                    <div><input class="w-56" type="number" id="value" name="value" value="{{$record->value}}" placeholder=" Value..."></div>
                    @error('value')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="model">Model</label>
                    <div><input class="w-56" type="text" id="model" name="model" value="{{$record->model}}" placeholder=" Model..."></div>
                    @error('model')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>
                <div></div>
                <div></div>
                <div>
                    <label for="text_color">Text Color</label>
                    <div><input class="w-56" type="text" id="text_color" name="text_color" value="{{$record->text_color}}" placeholder=" Text Color..."></div>
                    @error('text_color')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div>
                    <label for="bg_color">Text Color</label>
                    <div><input class="w-56" type="text" id="bg_color" name="bg_color" value="{{$record->bg_color}}" placeholder=" Background Color..."></div>
                    @error('bg_color')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>


            </div>
            <div class="mt-10 ml-96">
                <button class="bg-green-400 text-white p-4">Save Changes</button>
            </div>
        </form>
    </div>

@endsection
