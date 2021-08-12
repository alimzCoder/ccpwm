@extends('layouts.app')

@section('content')


    {{--    <div class="container m-4">--}}

    {{--        <span class="text-lg font-medium border-b">taxes</span>--}}
    {{--        <span class="px-4"><a class="border-b text-blue-500" href="{{route('taxes.create')}}">create</a></span>--}}
    {{--        <div class="gird grid-cols-1 gap-4 shadow-md rounded-lg p-4">--}}
    {{--            <div class="flex justify-start items-center gap-80 border-b">--}}
    {{--                <span>ID</span>--}}
    {{--                <span>Index</span>--}}
    {{--                <span>Amount</span>--}}
    {{--                <span>Status</span>--}}
    {{--            </div>--}}
    {{--            @foreach($records as $record)--}}
    {{--                <div class="flex justify-start   items-center gap-80 border-b">--}}
    {{--                    <span>{{$record->id}}</span>--}}
    {{--                    <span>{{$record->index}}</span>--}}
    {{--                    <div class="">{{$record->amount}}</div>--}}
    {{--                    <div class="">{{$record->is_active}}</div>--}}
    {{--                    <a class="text-purple-400 hover:text-purple-900"--}}
    {{--                       href="{{route('taxes.edit',$record->id)}}">edit</a>--}}
    {{--                    <form action="{{route('taxes.destroy',$record->id)}}" method="POST">--}}
    {{--                        @csrf--}}
    {{--                        @method('DELETE')--}}
    {{--                        <button class="text-red-600 hover:text-red-700">Delete</button>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            @endforeach--}}
    {{--        </div>--}}

    {{--    </div>--}}

    <h3 class="mt-6 text-xl">Taxes</h3>
    <div class="flex flex-col mt-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                    <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th
                                scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                            >
                                Index
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                            >
                                Amount
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                            >
                                Status
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-blue-500 uppercase"
                            >
                                <a href="{{route('taxes.create')}}">create</a>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($records as $record)
                            <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="">
                                            <div class="text-sm font-medium text-gray-900">{{$record->index}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$record->amount}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="
                                    inline-flex
                                    px-2
                                    text-xs
                                    font-semibold
                                    leading-5
                                    text-green-800
                                    bg-green-100
                                    rounded-full
                                  "
                                >
                                    {{$record->is_active == 1 ? 'Active' : 'Disabled'}}
                                </span>
                                </td>
{{--                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin</td>--}}
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a class="text-purple-400 hover:text-purple-900"
                                       href="{{route('taxes.edit',$record->id)}}">edit</a>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <form action="{{route('taxes.destroy',$record->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600 hover:text-red-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection



