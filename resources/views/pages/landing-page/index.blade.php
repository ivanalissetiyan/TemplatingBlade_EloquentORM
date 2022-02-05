@extends('layouts.app')

@section('title', 'home')

@section('content')
    <div class="max-w-screen-2xl px-4 lg:px-24 mx-auto content">
        <div class="text-center section-heading mb-16">
            <div class="mb-3 text-4xl font-bold leading-relaxed text-blackText-2 lg:text-6xl">
                Why choose us
            </div>
            <div class="text-lg font-medium text-gray-7">
                House is comitted to helping its clients to reach their goals
            </div>
        </div>
        <div class="grid justify-center grid-cols-6 gap-10 text-left section-element lg:grid-cols-12 md:gap-2">
            <!-- TAX ADVANTAGE -->
            <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                    <div class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/taxes-color.svg"
                            alt="house" class="color" width="76" />
                    </div>
                    <div>
                        <img class="non-color" width="76"
                            src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/taxes.svg"
                            alt="house" />
                    </div>
                    <div class="mt-6 mb-1 text-base font-bold text-blue-primary">
                        Tax Advantage
                    </div>
                    <div class="text-base font-normal leading-7 text-gray-7">
                        Tax advantage which applies to certain accounts or
                        investments.
                    </div>
                </div>
            </div>
            <!-- PROPERTY INSURANCE -->
            <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                    <div class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/user-color.svg"
                            alt="house" class="color" />
                    </div>
                    <div>
                        <img class="non-color"
                            src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/user.svg"
                            alt="house" />
                    </div>
                    <div class="mt-6 mb-1 text-base font-bold text-blue-primary">
                        Property Insurance
                    </div>
                    <div class="text-base font-normal leading-7 text-gray-7">
                        A series of policies that offer either property protection of
                        liability coverage.
                    </div>
                </div>
            </div>
            <!-- LOWEST COMMISSION -->
            <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                    <div class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/discount-color.svg"
                            alt="house" class="color" />
                    </div>
                    <div>
                        <img class="non-color"
                            src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/discount.svg"
                            alt="house" />
                    </div>
                    <div class="mt-6 mb-1 text-base font-bold text-blue-primary">
                        Lowest Commission
                    </div>
                    <div class="text-base font-normal leading-7 text-gray-7">
                        No longer have to negotiate commissions and haggle with other
                        agents.
                    </div>
                </div>
            </div>
            <!-- HOUSE NOW-->
            <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                    <div class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/calendar-color.svg"
                            alt="house" class="color" width="62" />
                    </div>
                    <div>
                        <img class="non-color" width="62"
                            src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/calendar.svg"
                            alt="house" />
                    </div>
                    <div class="mt-6 mb-1 text-base font-bold text-blue-primary">
                        House Now
                    </div>
                    <div class="text-base font-normal leading-7 text-gray-7">
                        Easy booking system for a host. Try our innovative model.
                    </div>
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
