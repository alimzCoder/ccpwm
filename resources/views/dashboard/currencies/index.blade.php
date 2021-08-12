@extends('layouts.app')

@section('content')


    {{--    <div class="container m-4">--}}

    {{--        <span class="text-lg font-medium border-b">Currencies</span>--}}
    {{--        <span class="px-4"><a class="border-b text-blue-500" href="{{route('currencies.create')}}">create</a></span>--}}
    {{--        <div class="gird grid-cols-1 gap-4 shadow-md rounded-lg p-4">--}}
    {{--            <div class="flex justify-start items-center gap-80 border-b">--}}
    {{--                <span>name</span>--}}
    {{--                <span>Code</span>--}}
    {{--                <span>Exchange Rate</span>--}}
    {{--                <span>Status</span>--}}
    {{--            </div>--}}
    {{--            @foreach($records as $record)--}}
    {{--            <div class="flex justify-start   items-center gap-80 border-b">--}}
    {{--                <span>{{$record->name}}</span>--}}
    {{--                <span>{{$record->code}}</span>--}}
    {{--                <div class="">{{$record->exchange_rate}}</div>--}}
    {{--                <div class="">{{$record->is_default_exchanger}}</div>--}}
    {{--                <a class="text-purple-400 hover:text-purple-900"--}}
    {{--                   href="{{route('currencies.edit',$record->id)}}">edit</a>--}}
    {{--                <form action="{{route('currencies.destroy',$record->id)}}" method="POST">--}}
    {{--                    @csrf--}}
    {{--                    @method('DELETE')--}}
    {{--                    <button class="text-red-600 hover:text-red-700">Delete</button>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--            @endforeach--}}
    {{--        </div>--}}

    {{--    </div>--}}


    <h3 class="mt-6 text-xl">Currencies</h3>
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
                                name
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                            >
                                Code
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                            >
                                Exchange Rate
                            </th>

                            <th
                                scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                            >
                                Status
                            </th>
                            <th
                                scope="col"
                                class="px-6 flex justify-end py-3 text-xs font-medium tracking-wider text-left text-blue-500 uppercase"
                            >
                                <a class="ml-" href="{{route('currencies.create')}}">create</a>
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
                                            <div class="text-sm font-medium text-gray-900">{{$record->name}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$record->code}}</div>
                                    <div
                                        class="text-sm text-gray-500"></div>
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
                                  {{$record->exchange_rate}}
                                </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{$record->is_default_exchanger == 1 ? 'Default' : 'Not Default'}}</td>

                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a class="text-purple-400 hover:text-purple-900"
                                       href="{{route('currencies.edit',$record->id)}}">edit</a>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <form action="{{route('currencies.destroy',$record->id)}}" method="POST">
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



