@extends('layouts.app')

@section('header')
    Formula 1
@endsection

@section('content')
    <div class="py-8">
        <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
            <div class="text-end">
                <div class="flex w-full max-w-sm space-x-3">
                    <div class=" relative ">
                        <input type="number" id="page_count" name="page_count"
                            class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="#sahifalar soni" />
                    </div>
                    <button
                        class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                        type="button">
                        Filter
                    </button>
                </div>
            </div>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                Bo'g'in
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                Sahifalar
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                            </th>
                        </tr>
                    </thead>
                    <tbody id="formula1-content">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/formula1.js') }}"></script>
@endsection