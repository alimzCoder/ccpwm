@extends('layouts.app')

@section('content')


    <h3 class="mt-6 text-xl">Items</h3>
    <div class="flex flex-col mt-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                    <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <div class="flex justify-end items-center flex-1 px-2 space-x-2 pb-2">
                            <!-- search icon -->
                            <span
                            ><svg
                                    class="w-6 h-6 text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                      <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                      />
                    </svg>
                  </span>
                            <form action="{{route('items.index')}}" method="GET" autocomplete="off" autofill="off">
                                <input
                                    name="search"
                                    type="text"
                                    placeholder="Search"
                                    value="{{Request::get('search')}}"
                                    class="w-1/5 px-4 py-3 text-gray-600 rounded-md focus:bg-gray-100 focus:outline-none"
                                />
                            </form>
                        </div>
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
                                status
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                            >
                                categories
                            </th>

                            <th
                                scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                            >
                                manufacturer
                            </th>
                            <th
                                scope="col"
                                class="px-6 flex justify-end py-3 text-xs font-medium tracking-wider text-left text-blue-500 uppercase"
                            >
                                <a class="ml-" href="{{route('items.create')}}">create</a>
                                <a class="text-purple-400 hover:text-purple-900 ml-10"
                                   href="/export">export all</a>
                            </th>
                            <th>

                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($records as $record)
                            <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img
                                                class="w-10 h-10 rounded-full"
                                                src="/uploads/{{$record->image_url}}"
                                                alt=""
                                            />
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{$record->name}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{!$record->status()->exists() ? 'none' : $record->status->name}}</div>
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
                                    <div class="flex items-center justify-center gap-4">
                                        @foreach($record->categories as $category)
                                            <span>{{$category->name}}</span>
                                        @endforeach
                                    </div>


                                </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{$record->manufacturer->name}}</td>

                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a class="text-purple-400 hover:text-purple-900"
                                       href="{{route('items.edit',$record->id)}}">edit</a>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <form action="{{route('items.destroy',$record->id)}}" method="POST">
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



