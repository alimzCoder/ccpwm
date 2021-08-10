@extends('layouts.app')

@section('content')


    <div class="container m-4">

        <span class="text-lg font-medium border-b">Create</span>
        <form action="{{route('taxes.store')}}" method="POST">
            @csrf
            @method('POST')

            <div class="grid grid-cols-5 gap-4 mt-4">

                <div>
                    <label for="index">Index</label>
                    <div><input class="w-56" type="text" id="index" name="index" required placeholder=" Index..."></div>
                </div>

                <div class="mt-">
                    <label for="amount">Amount</label>
                    <div><input class="w-56" type="text" id="amount" name="amount" required placeholder=" amount...">
                    </div>
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div class="mt-">
                    <label for="is_active">Status</label>
                    <div><input class="w-56" type="checkbox" id="is_active" name="is_active" required
                                placeholder=" Status..."></div>
                </div>

                <div>
                    <button class="bg-green-400 text-white p-4">Save Changes</button>
                </div>
            </div>
        </form>
    </div>

@endsection
