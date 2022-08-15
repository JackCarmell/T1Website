@extends('layouts.app')

@section('content')


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Founder's name
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Jack Carmell
                </th>
                <td class="py-4 px-6">
                    200186933@aston.ac.uk
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Christian Afrifa-Boakye
                </th>
                <td class="py-4 px-6">
                    200104074@aston.ac.uk
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Mohammad Yassin
                </th>
                <td class="py-4 px-6">
                    160155253@aston.ac.uk
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Arjun Dhillon
                </th>
                <td class="py-4 px-6">
                    200099666@aston.ac.uk 
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Ohimor Anthony eseogheneohimor
                </th>
                <td class="py-4 px-6">
                    210257735@aston.ac.uk
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Talha Khalid
                </th>
                <td class="py-4 px-6">
                    200167035@aston.ac.uk
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection