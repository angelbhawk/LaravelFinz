@extends('components.layout')

@section('title', 'Transactions')

@section('content')

<div class="container mx-auto mt-4">
    <!-- Busqueda -->
    <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
        <div class="relative">
            <button id="dropdownMultiSelectButton" data-dropdown-toggle="dropdownMultiSelect" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5" type="button">
                <svg class="w-3 h-3 text-gray-500 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                </svg>
                Filter Options
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <!-- Dropdown menu for multi-select -->
            <div id="dropdownMultiSelect" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow absolute bottom-full mb-2 left-0" style="transform: translateY(-100%);">
                <ul class="p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownMultiSelectButton">
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100">
                            <input id="filter-checkbox-1" type="checkbox" value="last_day" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="filter-checkbox-1" class="w-full ms-2 text-sm font-medium text-gray-900">Last day</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100">
                            <input id="filter-checkbox-2" type="checkbox" value="last_7_days" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="filter-checkbox-2" class="w-full ms-2 text-sm font-medium text-gray-900">Last 7 days</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100">
                            <input id="filter-checkbox-3" type="checkbox" value="last_30_days" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="filter-checkbox-3" class="w-full ms-2 text-sm font-medium text-gray-900">Last 30 days</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100">
                            <input id="filter-checkbox-4" type="checkbox" value="last_month" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="filter-checkbox-4" class="w-full ms-2 text-sm font-medium text-gray-900">Last month</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100">
                            <input id="filter-checkbox-5" type="checkbox" value="last_year" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="filter-checkbox-5" class="w-full ms-2 text-sm font-medium text-gray-900">Last year</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
        </div>
    </div>
    <!-- Tabla -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Date</th>
                    <th scope="col" class="px-6 py-3">Month</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Account</th>
                    <th scope="col" class="px-6 py-3">Amount</th>
                    <th scope="col" class="px-6 py-3">Type</th>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $transaction['date'] }}</td>
                    <td class="px-6 py-4">{{ $transaction['month'] }}</td>
                    <td class="px-6 py-4">
                        <span class="
                            @if($transaction['status'] === 'pending') text-yellow-500
                            @elseif($transaction['status'] === 'completed') text-green-500
                            @elseif($transaction['status'] === 'canceled') text-red-500
                            @endif
                        ">
                            {{ ucfirst($transaction['status']) }}
                        </span>
                    </td>
                    <td class="px-6 py-4">{{ $transaction['account'] }}</td>
                    <td class="px-6 py-4">{{ $transaction['amount'] }}</td>
                    <td class="px-6 py-4">
                        <span class="
                            @if($transaction['type'] === 'income') text-green-500
                            @elseif($transaction['type'] === 'expense') text-red-500
                            @endif
                        ">
                            {{ ucfirst($transaction['type']) }}
                        </span>
                    </td>
                    <td class="px-6 py-4">{{ $transaction['category'] }}</td>
                    <td class="px-6 py-4">{{ $transaction['description'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection