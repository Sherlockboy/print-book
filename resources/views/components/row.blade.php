@php
    $first = '';
    $second = '';
    if($formula == 1){
        $first = $rows['first'];
        $second = $rows['second'];
    }

    if(in_array($formula, [2, 3])){
        foreach ($rows as $key => $row) {
            if($first){
                $first = "{$first},{$row['first']}";
            } else {
                $first = $row['first'];
            }
            
            if($second){
                $second = "{$second},{$row['second']}";
            } else {
                $second = $row['second'];
            }
        }
    }
@endphp

<tr>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
            <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
            <span class="relative">#1</span>
        </span>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <textarea
            class="appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent mr-5"
            rows="1" cols="40">{{ $first }}</textarea>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <button type="button"
            class="copy-btn py-1 px-2 flex justify-center items-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  w-12 h-12 rounded-lg max-w-min">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                </path>
            </svg>
        </button>
    </td>
</tr>
<tr>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
            <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
            <span class="relative">#2</span>
        </span>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <textarea
            class="appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent mr-5"
            rows="1" cols="40">{{ $second }}</textarea>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <button type="button"
            class="copy-btn py-1 px-2 flex justify-center items-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  w-12 h-12 rounded-lg max-w-min">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                </path>
            </svg>
        </button>
    </td>
</tr>