<!-- NAVIGATION -->
<header class="w-full fixed top-0 bg-white z-50">
    <nav class="container flex justify-between py-5 items-center">
        <div>
            <a href="{{ route('index') }}">
                <img src="{{ asset('assets/images/B-Uni.png') }}" height="60" class="max-h-[60px]" alt="" />
            </a>
        </div>
        <ul class="md:flex items-center gap-9 list-none font-montserrat hidden">
            <li class="relative h-full flex items-center group">
                <div class="flex items-center gap-1.5 x-dropdown-button cursor-pointer peer">
                    <span class="font-semibold">About Us</span>
                    <i class="bi bi-chevron-down group-hover:rotate-180 transition-all"></i>
                </div>
                <div
                    class="hidden peer-hover:block hover:block group-hover:block absolute rounded-xl overflow-hidden top-full w-fit shadow-xl">
                    <div class="pt-12">
                        <ul class="bg-white list-disc text-nowrap pl-8 p-3 rounded-xl">
                            <li><a href="{{ route('sejarah') }}" class="w-full block pl-2 pr-8 py-1">History</a></li>
                            <li><a href="{{ route('visimisi') }}" class="w-full block pl-2 pr-8 py-1">Vision &
                                    Mission</a>
                            </li>
                            <li><a href="{{ route('sambutan') }}" class="w-full block pl-2 pr-8 py-1">Rector's
                                    Welcome</a></li>
                            <li><a href="{{ route('fasilitas') }}" class="w-full block pl-2 pr-8 py-1">Facilities</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('sdm') }}" class="font-semibold">Human Resources</a>
            </li>
            <li class="relative h-full flex items-center group">
                <div class="flex items-center gap-1.5 x-dropdown-button cursor-pointer peer">
                    <span class="font-semibold">Academic</span>
                    <i class="bi bi-chevron-down group-hover:rotate-180 transition-all"></i>
                </div>
                <div
                    class="hidden shadow-xl rounded-xl overflow-hidden peer-hover:block hover:block group-hover:block absolute top-full w-fit -translate-x-1/2">
                    <div class="pt-12">
                        <div class="bg-white flex gap-4 px-6 py-3 rounded-xl">
                            <div class="px-4 flex-1">
                                <span class="block h-10 mb-4 font-semibold text-nowrap">HEALTH SCIENCES</span>
                                <ul class="list-disc space-y-1 text-nowrap">
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of NURSING</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of MIDWIFERY</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of PHARMACY</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of HOSPITAL
                                            ADMINISTRATION</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Diploma of MIDWIFERY</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Diploma of
                                            PHYSIOTHERAPY</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Diploma of PHARMACY</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-4 flex-1">
                                <span class="block h-10 mb-4 font-semibold text-nowrap">ECONOMICS AND BUSINESS</span>
                                <ul class="list-disc space-y-1 text-nowrap">
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of MANAGEMENT</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of ACCOUNTING</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of ISLAMIC
                                            ECONOMICS</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of
                                            ENTREPRENEURSHIP</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-4 flex-1">
                                <span class="block h-10 mb-4 font-semibold">SCIENCE, TECHNOLOGY, AND EDUCATION</span>
                                <ul class="text-nowrap space-y-1 list-disc">
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of ELEMENTARY
                                            EDUCATION</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of BIOLOGY</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of PHYSICS</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of COMPUTER
                                            ENGINEERING</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of INDUSTRIAL
                                            ENGINEERING</a>
                                    </li>
                                    <li>
                                        <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of INFORMATICS
                                            ENGINEERING</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('pengumuman') }}" class="font-semibold">Announcements</a>
            </li>
        </ul>
        <div class="hidden md:flex">
            <a href="{{ route('pendaftaran') }}"
                class="px-6 py-[14px] font-montserrat font-semibold text-xneutral-0 bg-primary-200 rounded-full">Registration</a>
        </div>

        <!-- Mobile menu toggle -->
        <button type="button"
            class="relative inline-flex md:hidden items-center justify-center rounded-md p-2 text-xneutral-300 hover:bg-xneutral-100 hover:text-xneutral-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div class="hidden shadow-xl" id="mobile-menu">
        <ul class="space-y-2 px-4 pb-3 pt-2">
            <li class="h-full w-full">
                <div class="flex items-center w-full justify-between gap-1.5 x-dropdown-button cursor-pointer"
                    data-target="menu1">
                    <span class="font-semibold">About Us</span>
                    <i class="bi bi-chevron-down transition-all"></i>
                </div>
                <div class="hidden x-dropdown-menu" id="menu1">
                    <div>
                        <ul class="bg-white text-nowrap px-3 rounded-xl">
                            <li><a href="{{ route('sejarah') }}" class="w-full block pl-2 pr-8 py-1">History</a></li>
                            <li><a href="{{ route('visimisi') }}" class="w-full block pl-2 pr-8 py-1">Vision &
                                    Mission</a>
                            </li>
                            <li><a href="{{ route('sambutan') }}" class="w-full block pl-2 pr-8 py-1">Rector's
                                    Welcome</a></li>
                            <li><a href="{{ route('fasilitas') }}" class="w-full block pl-2 pr-8 py-1">Facilities</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('sdm') }}" class="font-semibold">Human Resources</a>
            </li>
            <li class="h-full w-full">
                <div class="flex items-center w-full justify-between gap-1.5 x-dropdown-button cursor-pointer"
                    data-target="menu2">
                    <span class="font-semibold">Academic</span>
                    <i class="bi bi-chevron-down transition-all"></i>
                </div>
                <div class="hidden w-full x-dropdown-menu mt-4" id="menu2">
                    <div class="space-y-4">
                        <div class="pl-3">
                            <span class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                                data-target="menu-ilmu-kesehatan">HEALTH SCIENCES
                                <i class="bi bi-chevron-down transition-all"></i></span>
                            <ul id="menu-ilmu-kesehatan" class="hidden x-dropdown-menu space-y-1 text-nowrap">
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of NURSING</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of MIDWIFERY</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of PHARMACY</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">S1 ADMINISTRASI RUMAH
                                        SAKIT</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Diploma of MIDWIFERY</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Diploma of PHYSIOTHERAPY</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Diploma of PHARMACY</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pl-3">
                            <span class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                                data-target="menu-ekonomi-bisnis">ECONOMICS AND BUSINESS
                                <i class="bi bi-chevron-down transition-all"></i></span>
                            <ul id="menu-ekonomi-bisnis" class="x-dropdown-menu hidden space-y-1 text-nowrap">
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of MANAGEMENT</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of ACCOUNTING</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of ISLAMIC
                                        ECONOMICS</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of
                                        ENTREPRENEURSHIP</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pl-3">
                            <span class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                                data-target="menu-saintekdik">SCIENCE, TECHNOLOGY, AND EDUCATION
                                <i class="bi bi-chevron-down transition-all"></i></span>
                            <ul id="menu-saintekdik" class="x-dropdown-menu hidden text-nowrap space-y-1">
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of ELEMENTARY
                                        EDUCATION</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of BIOLOGY</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of PHYSICS</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of COMPUTER
                                        ENGINEERING</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of INDUSTRIAL
                                        ENGINEERING</a>
                                </li>
                                <li>
                                    <a href="#" class="w-full block pl-2 pr-8 py-1">Bachelor of INFORMATICS
                                        ENGINEERING</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('pengumuman') }}" class="font-semibold">Announcements</a>
            </li>
        </ul>
    </div>
</header>
<!-- END OF NAVIGATION -->
