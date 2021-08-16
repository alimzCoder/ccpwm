@extends('layouts.app')

@section('content')


    <div class="container m-4">

        <span class="text-lg font-medium border-b">Edit {{$record->name}} Category</span>
        <form action="{{route('items_category.update',$record->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-5 gap-4 mt-4">

                <div>
                    <label for="name">Name</label>
                    <div><input class="w-56" type="text" id="name" value="{{$record->name}}" name="name"
                                placeholder="Category Name..."></div>
                    @error('name')
                    <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div></div>
                <div></div>
                <div></div>
                <div></div>

                <div>
                    <select name="parent_id" id="">
                        <option value="">Parent Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{$category->id == $record->parent_id ? 'selected' : ''}}>
                                {{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <select name="status_id" id="">
                        <option value="">Status</option>
                        @foreach($statuses as $status)
                            <option
                                value="{{$status->id}}" {{$record->status_id == $status->id ?'selected' : '' }}>{{$status->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <button class="bg-green-400 text-white p-4">Save Changes</button>
                </div>
            </div>
        </form>
    </div>

@endsection
