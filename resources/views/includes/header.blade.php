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
