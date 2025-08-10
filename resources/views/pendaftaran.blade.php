@extends('layouts.app')

@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
            Registration
        </h1>
        <p class="text-xneutral-200 font-montserrat text-sm sm:text-base font-semibold">
            Enroll with us and shape a remarkable future
        </p>

        @if (session('success'))
            <div id="alert" style="background-color: #3b82f6;"
                class="flex items-center text-white text-sm font-bold px-4 py-3" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                </svg>
                <p>{{ session('success') }}</p>
            </div>

            <script>
                // Set timeout to remove alert
                setTimeout(function() {
                    var alert = document.getElementById('alert');
                    if (alert) {
                        alert.style.opacity = '0';
                        alert.style.transition = 'opacity 0.5s ease';
                        setTimeout(function() {
                            alert.style.display = 'none';
                        }, 500);
                    }
                }, 3000);
            </script>
        @endif

        <!-- Registration Form -->
        <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data"
            class="space-y-6 mt-[70px]">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 md:gap-[124px] font-montserrat">
                <div class="space-y-10">
                    <div class="flex flex-col gap-3">
                        <label for="nama-lengkap" class="font-semibold text-sm text-xneutral-400">Full Name
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="text" id="nama-lengkap" name="namalengkap" placeholder="Enter your full name"
                            required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="email" class="font-semibold text-sm text-xneutral-400">Email Address
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="jalur" class="font-semibold text-sm text-xneutral-400">Admission Pathway
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex items-center">
                            <select id="jalur" name="jalur" required
                                class="border w-full peer placeholder:font-semibold appearance-none placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg">
                                <option class="font-montserrat text-xneutral-300" value="KIP-K">KIP-K</option>
                                <option class="font-montserrat text-xneutral-300" value="Reguler">Regular</option>
                            </select>
                            <i
                                class="bi bi-chevron-down pointer-events-none -ml-8 peer-focus:rotate-180 transition-all"></i>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="foto" class="font-semibold text-sm text-xneutral-400">Profile Photo
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex gap-3 items-center w-full">
                            <input type="file" id="foto" name="image" accept="image/*" required
                                placeholder="Upload your photo"
                                class="border w-full file:hidden placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                        </div>
                    </div>
                </div>

                <div class="space-y-10">
                    <div class="flex flex-col gap-3">
                        <label for="nama-panggilan" class="font-semibold text-sm text-xneutral-400">Preferred Name
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="text" id="nama-panggilan" name="namapanggilan"
                            placeholder="Enter your preferred name" required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="nomor-hp" class="font-semibold text-sm text-xneutral-400">Phone Number
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="tel" id="nomor-hp" name="nomor_hp" placeholder="Enter your phone number" required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="program-studi-1" class="font-semibold text-sm text-xneutral-400">First Study Program
                            Choice
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex items-center">
                            <select id="program-studi-1" name="programstudi_1" required
                                class="border peer appearance-none w-full placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg">
                                <option value="">Select your first study program</option>
                                <option value="S1 KEPERAWATAN">Bachelor of Nursing</option>
                                <option value="S1 KEBIDANAN">Bachelor of Midwifery</option>
                                <option value="S1 FARMASI">Bachelor of Pharmacy</option>
                                <option value="S1 ADMINISTRASI RUMAH SAKIT">Bachelor of Hospital Administration</option>
                                <option value="D3 KEBIDANAN">Diploma in Midwifery</option>
                                <option value="D3 FISIOTERAPI">Diploma in Physiotherapy</option>
                                <option value="D3 FARMASI">Diploma in Pharmacy</option>
                                <option value="S1 MANAJEMEN">Bachelor of Management</option>
                                <option value="S1 AKUNTANSI">Bachelor of Accounting</option>
                                <option value="S1 EKONOMI SYARIAH">Bachelor of Sharia Economics</option>
                                <option value="S1 KEWIRAUSAHAAN">Bachelor of Entrepreneurship</option>
                                <option value="S1 PENDIDIKAN GURU SD">Bachelor of Primary Education</option>
                                <option value="S1 BIOLOGI">Bachelor of Biology</option>
                                <option value="S1 FISIKA">Bachelor of Physics</option>
                                <option value="S1 TEKNIK KOMPUTER">Bachelor of Computer Engineering</option>
                                <option value="S1 TEKNIK INDUSTRI">Bachelor of Industrial Engineering</option>
                                <option value="S1 TEKNIK INFORMATIKA">Bachelor of Informatics Engineering</option>
                            </select>
                            <i
                                class="bi bi-chevron-down pointer-events-none -ml-8 peer-focus:rotate-180 transition-all"></i>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="program-studi-2" class="font-semibold text-sm text-xneutral-400">Second Study Program
                            Choice
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex items-center">
                            <select id="program-studi-2" name="programstudi_2" required
                                class="border peer appearance-none w-full placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg">
                                <option value="">Select your second study program</option>
                                <option value="S1 KEPERAWATAN">Bachelor of Nursing</option>
                                <option value="S1 KEBIDANAN">Bachelor of Midwifery</option>
                                <option value="S1 FARMASI">Bachelor of Pharmacy</option>
                                <option value="S1 ADMINISTRASI RUMAH SAKIT">Bachelor of Hospital Administration</option>
                                <option value="D3 KEBIDANAN">Diploma in Midwifery</option>
                                <option value="D3 FISIOTERAPI">Diploma in Physiotherapy</option>
                                <option value="D3 FARMASI">Diploma in Pharmacy</option>
                                <option value="S1 MANAJEMEN">Bachelor of Management</option>
                                <option value="S1 AKUNTANSI">Bachelor of Accounting</option>
                                <option value="S1 EKONOMI SYARIAH">Bachelor of Sharia Economics</option>
                                <option value="S1 KEWIRAUSAHAAN">Bachelor of Entrepreneurship</option>
                                <option value="S1 PENDIDIKAN GURU SD">Bachelor of Primary Education</option>
                                <option value="S1 BIOLOGI">Bachelor of Biology</option>
                                <option value="S1 FISIKA">Bachelor of Physics</option>
                                <option value="S1 TEKNIK KOMPUTER">Bachelor of Computer Engineering</option>
                                <option value="S1 TEKNIK INDUSTRI">Bachelor of Industrial Engineering</option>
                                <option value="S1 TEKNIK INFORMATIKA">Bachelor of Informatics Engineering</option>
                            </select>
                            <i
                                class="bi bi-chevron-down pointer-events-none -ml-8 peer-focus:rotate-180 transition-all"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-12 md:gap-[124px] !mt-[60px]">
                <a href="/"
                    class="px-6 py-[14px] w-full text-center font-montserrat text-neutral-0 bg-white border text-lg font-semibold border-primary-200 text-primary-200 rounded-full">
                    Back to Homepage
                </a>
                <button type="submit"
                    class="px-6 py-[14px] text-center w-full font-montserrat text-neutral-0 bg-primary-200 border text-lg font-semibold border-primary-200 text-xneutral-0 rounded-full">
                    Submit Registration
                </button>
            </div>
        </form>
    </article>
@endsection
