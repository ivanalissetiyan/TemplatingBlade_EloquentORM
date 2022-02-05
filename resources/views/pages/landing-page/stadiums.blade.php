@extends('layouts.app')

@section('title', 'home')

@section('content')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Stadiums</h1>
        </div>
    </header>

    <!-- table -->
    <div class="pb-16 pt-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Club
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Address
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Detail</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://resources.premierleague.com/premierleague/badges/t8.svg"
                                                alt="" />
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                Stamford Bridge
                                            </div>
                                            <div class="text-sm text-gray-500">40,853</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">Chelsea FC</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Stamford Bridge, Fulham Road, London, SW6 1HS
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://resources.premierleague.com/premierleague/badges/t3.svg"
                                                alt="" />
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                Emirates Stadium
                                            </div>
                                            <div class="text-sm text-gray-500">60,260</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">Arsenal</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Highbury House, 75 Drayton Park, London, N5 1BU
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                </td>
                            </tr>

                            <!-- More items... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-style')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .header-3-3 .btn-no-fill,
        .header-3-3 .text-gray-1 {
            color: #8b9caf;
            transition: 0.3s;
        }

        .header-3-3 .btn-no-fill:hover,
        .header-3-3 .text-black-1 {
            color: #243142;
        }

        .header-3-3 .text-gray-2 {
            color: #aaa6a6;
        }

        .header-3-3 .btn-outline:hover {
            border: 1px solid #6da4f9;
            color: #6da4f9;
            transition: 0.3s;
        }

        .header-3-3 .card {
            box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
            transition: 0.4s;
            top: 0px;
            left: 0px;
            position: relative;
        }

        .header-3-3 .card:hover {
            box-shadow: -4px 8px 15px 0px rgba(167, 167, 167, 0.25);
            top: -3px;
            left: -3px;
            position: relative;
            transition: 0.4s;
        }

        .header-3-3 .navigation .active {
            position: relative;
            padding-bottom: 3px;
            padding-top: 3px;
            transition: 0.3s;
        }

        .header-3-3 .navigation .active:before {
            content: "";
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            bottom: 0;
            height: 0px;
            width: 80%;
            /* or 100px */
            border-bottom: 2px solid #4e91f9;
        }

        .header-3-3 .btn-fill {
            border: 1px solid #4e91f9;
            background-color: #4e91f9;
            transition: 0.3s;
        }

        .header-3-3 .btn-fill:hover {
            background-color: #6da4f9;
            border: 1px solid #6da4f9;
            transition: 0.3s;
        }

        .header-3-3 .btn-outline {
            border: 1px solid #a6b1be;
            color: #a6b1be;
            transition: 0.3s;
        }

        .header-3-3 .btn-outline:hover div path {
            fill: #6da4f9;
            transition: 0.3s;
        }

        .header-3-3 .btn-outline:hover div rect {
            stroke: #6da4f9;
            transition: 0.3s;
        }

        .header-3-3 .navigation a:hover {
            color: #243142 !important;
            font-weight: 500;
            transition: 0.2s;
        }

        .header-3-3 #form {
            width: 100%;
        }

        .header-3-3 #form input[type="text"] {
            width: 100%;
            background-color: #eef4fd;
            box-sizing: border-box;
            font-size: 14px;
            padding: 0.375rem 0.5rem;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        .header-3-3 .search-icon:hover path {
            fill: #243142;
        }

        @media (max-width: 1023px) {
            .header-3-3 #form input[type="text"] {
                width: 100%;
            }
        }

        @media (min-width: 1024px) {
            .header-3-3 .center-search {
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            .header-3-3 #form {
                width: 320px;
            }
        }

    </style>
@endpush
