    <section class="h-full w-full border-box transition-all duration-500 linear relative"
        style="background-color: #fafcff">

        <!-- Navbar -->
        <div class="header-3-3" style="font-family: 'Poppins', sans-serif">
            <header x-data="{ open: false }"
                class="w-full grid grid-cols-1 lg:grid-cols-3 py-8 lg:px-24 md:px-16 sm:px-8 px-8">
                <div class="flex items-center justify-between">
                    <a href="{{ route('index') }}">
                        <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-6.png"
                            alt="" />
                    </a>
                    <div class="flex justify-end items-center lg:hidden cursor-pointer">
                        <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </div>
                </div>
                <!-- Backdrop -->
                <!-- Backdop -->
                <div :class="{'hidden': !open}"
                    class="bg-black fixed hidden w-full h-full top-0 left-0 z-30 bg-opacity-60" @click="open = !open">
                </div>
                <nav :class="{'flex': open, 'hidden': !open}"
                    class="hidden z-50 fixed left-3 right-3 rounded-md shadow-md flex-col p-8 justify-center navigation items-start lg:shadow-none lg:bg-transparent lg:p-0 lg:items-center lg:flex lg:flex-row lg:relative lg:space-x-7 bg-white">
                    <a href="{{ route('index') }}">
                        <img class="m-0 lg:hidden mb-3"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-6.png"
                            alt="" />
                    </a>
                    <a href="{{ route('clubs') }}"
                        class="text-sm text-gray-1 font-medium mx-0 lg:mx-5 my-4 lg:my-0 relative">Clubs</a>
                    <a href="{{ route('players') }}"
                        class="text-sm text-gray-1 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Players</a>
                    <a href="{{ route('managers') }}"
                        class="text-sm text-gray-1 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Managers</a>
                    <a href="{{ route('stadiums') }}"
                        class="text-sm text-gray-1 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Stadium</a>
                    <div class="mx-0 lg:mx-5 my-4 lg:my-0" x-data="{ search: false }">
                        <svg @click="search = !search" class="hidden cursor-pointer search-icon"
                            :class="{'flex': !search, 'hidden': search}" width="15" height="15" viewBox="0 0 15 15"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                                fill="#8B9CAF" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                                fill="#8B9CAF" />
                        </svg>
                        <form id="form" :class="{'flex lg:absolute center-search': search, 'hidden': !search}"
                            class="hidden items-center rounded-full focus:outline-none px-3"
                            style="background-color: #eef4fd">
                            <input type="text" class="rounded-full focus:outline-none" placeholder="Search" />
                            <button type="button">
                                <svg @click="search = !search" style="width: 20px; height: 20px"
                                    class="focus:outline-none cursor-pointer" fill="none" stroke="#243142"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="flex items-center justify-end w-full lg:hidden mt-3">
                        <button class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
                            Sign In
                        </button>
                        <button
                            class="btn-fill text-sm text-white font-medium py-3 px-8 rounded-full focus:outline-none">
                            Register
                        </button>
                    </div>
                    <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 cursor-pointer lg:hidden"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </nav>
                <div class="hidden items-center justify-end lg:flex">
                    <button class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
                        Sign In
                    </button>
                    <button class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
                        Register
                    </button>
                </div>
            </header>
            <div class="lg:px-24 md:px-16 sm:px-8 px-8">
                <hr style="border-color: #f3f8ff" />
            </div>

            <!-- Hero -->
            <div>
                <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div
                        class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                        <h1 class="text-black-1 title-font sm:text-5xl lg:text-6xl text-4xl mb-5 font-semibold"
                            style="line-height: 1.25">
                            The New Way<br class="lg:block hidden" />
                            <span style="color: #4e91f9"> Learn Skills</span> From
                            <br class="lg:block hidden" />
                            Our Best Mentor
                        </h1>
                        <p class="text-base text-gray-1 font-light leading-6 tracking-wide mb-12 lg:mb-20">
                            Hard to find a good mentor according to your wishes?<br class="sm:block hidden" />
                            Don't worry because we are here to help you
                        </p>
                        <div
                            class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                            <button
                                class="btn-fill inline-flex font-semibold text-white text-base py-4 px-8 rounded-full mb-4 lg:mb-0 md:mb-0 focus:outline-none">
                                Get Started
                            </button>
                            <button
                                class="btn-outline font-normal text-base py-4 px-6 rounded-full focus:outline-none bg-transparent">
                                <div class="flex items-center">
                                    <svg class="mr-2.5" width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.9295 13L11.6668 10.158V15.842L15.9295 13ZM17.9175 13.2773L10.8515 17.988C10.8013 18.0214 10.743 18.0406 10.6828 18.0434C10.6225 18.0463 10.5627 18.0328 10.5095 18.0044C10.4563 17.9759 10.4119 17.9336 10.3809 17.8818C10.3499 17.8301 10.3335 17.771 10.3335 17.7107V8.28933C10.3335 8.22904 10.3499 8.16988 10.3809 8.11816C10.4119 8.06644 10.4563 8.0241 10.5095 7.99564C10.5627 7.96718 10.6225 7.95367 10.6828 7.95655C10.743 7.95943 10.8013 7.9786 10.8515 8.012L17.9175 12.7227C17.9631 12.7531 18.0006 12.7943 18.0265 12.8427C18.0524 12.8911 18.0659 12.9451 18.0659 13C18.0659 13.0549 18.0524 13.1089 18.0265 13.1573C18.0006 13.2057 17.9631 13.2469 17.9175 13.2773Z"
                                            fill="#A6B1BE" />
                                        <rect x="0.5" y="0.5" width="25" height="25" rx="12.5" stroke="#A6B1BE" />
                                    </svg>
                                    Watch the video
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                        <img class="absolute bottom-0 lg:block hidden lg:right-24 md:right-16 sm:right-8 right-8"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-2.png"
                            alt="" />
                        <div class="flex items-end lg:pl-16 pl-0 z-1">
                            <div class="container mx-auto flex flex-wrap items-center">
                                <div
                                    class="card rounded-xl p-5 bg-white flex flex-col md:ml-auto w-full mt-10 md:mt-0 space-y-5">
                                    <div class="flex items-center space-x-4">
                                        <div>
                                            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-3.png"
                                                alt="" />
                                        </div>
                                        <div class="text-left">
                                            <p class="font-semibold text-base mb-1">Felix Potah</p>
                                            <p class="font-light text-xs text-gray-2">Pro Mentor</p>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 text-left">
                                        <div>
                                            <p class="font-medium text-base mb-0.5" style="color: #1b8171">
                                                64,100
                                            </p>
                                            <p class="font-light text-xs text-gray-2">Followers</p>
                                        </div>
                                        <div>
                                            <p class="font-medium text-base mb-0.5" style="color: #ff7468">
                                                106
                                            </p>
                                            <p class="font-light text-xs text-gray-2">Reviews</p>
                                        </div>
                                    </div>
                                    <button
                                        class="btn-fill font-semibold text-white text-base py-3 px-16 mb-0.5 rounded-xl">
                                        Hire Me
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="h-full w-full border-box transition-all duration-500 linear" style="background-color: #f5f5f5">

        <section class="value bg-softBlue py-16">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");

                body {
                    font-family: "Inter", sans-serif;
                }

                :root {
                    --black-1: #080e09;
                    --black-2: #232323;
                    --black-3: #101419;
                    --gray-3: #e2e3e5;
                    --gray-4: #c9c9c9;
                    --gray-5: #adb2b8;
                    --gray-6: #9c9c9c;
                    --gray-7: #879fb0;
                    --blue-primary: #0f52ba;
                    --blue-secondary: #478fff;
                    --blue-tertiary: #739ad5;
                    --softBlue: #f9fcfc;
                    --yellow: #ff9900;
                }

                .border-blue-primary {
                    border-color: var(--blue-primary);
                }

                .text-blackText-2 {
                    color: var(--black-2);
                }

                .text-blue-primary {
                    color: var(--blue-primary);
                }

                .text-gray-6 {
                    color: var(--gray-6);
                }

                .text-gray-7 {
                    color: var(--gray-7);
                }

                .shadow-sblue {
                    box-shadow: 0px 24px 32px rgba(15, 82, 186, 0.4);
                }

                .shadow-cardShadow {
                    box-shadow: none;
                }

                .cardShadow:hover {
                    box-shadow: 12px 24px 80px rgba(15, 82, 186, 0.06);
                }

                .rounded-28 {
                    border-radius: 28px;
                }

                .z-forBackground {
                    z-index: -99;
                }

                .text-7 {
                    font-size: 28px;
                }

                .bg-softBlue {
                    background-color: var(--softBlue);
                }

                .icon-placeholder {
                    height: 200px;
                    width: 274px;
                }

                @media (min-width: 768px) {
                    .icon-placeholder {
                        height: 274px;
                        width: 303px;
                    }
                }

                @media (min-width: 1024px) {
                    .icon-placeholder {
                        width: 250px;
                    }
                }

            </style>

        </section>
        <!-- Password toggle -->
        <script>
            function togglePassword() {
                var x = document.getElementById("password-content-3-5");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </section>
