@extends('layouts.app')

@section('content')
    <section class="container mt-32 mb-20">
        <h1 class="text-2xl sm:text-3xl font-montserrat font-semibold mb-6">Student Registration</h1>

        @if (session('success'))
            <div class="mb-6 p-4 rounded-lg bg-green-50 text-green-700 border border-green-200">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 p-4 rounded-lg bg-red-50 text-red-700 border border-red-200">
                <ul class="list-disc ml-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data"
            class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-6 rounded-2xl border border-xneutral-100">
            @csrf

            <div class="flex flex-col gap-2">
                <label for="namalengkap" class="font-montserrat font-semibold">Full Name</label>
                <input type="text" id="namalengkap" name="namalengkap" value="{{ old('namalengkap') }}"
                    class="border rounded-lg px-4 py-2" required />
            </div>

            <div class="flex flex-col gap-2">
                <label for="namapanggilan" class="font-montserrat font-semibold">Nickname</label>
                <input type="text" id="namapanggilan" name="namapanggilan" value="{{ old('namapanggilan') }}"
                    class="border rounded-lg px-4 py-2" required />
            </div>

            <div class="flex flex-col gap-2">
                <label for="email" class="font-montserrat font-semibold">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="border rounded-lg px-4 py-2" required />
            </div>

            <div class="flex flex-col gap-2">
                <label for="nomor_hp" class="font-montserrat font-semibold">Phone Number</label>
                <input type="text" id="nomor_hp" name="nomor_hp" value="{{ old('nomor_hp') }}"
                    class="border rounded-lg px-4 py-2" required />
            </div>

            <div class="flex flex-col gap-2">
                <label for="jalur" class="font-montserrat font-semibold">Admission Path</label>
                <select id="jalur" name="jalur" class="border rounded-lg px-4 py-2" required>
                    <option value="" disabled {{ old('jalur') ? '' : 'selected' }}>Select one</option>
                    <option value="regular" {{ old('jalur') === 'regular' ? 'selected' : '' }}>Regular</option>
                    <option value="scholarship" {{ old('jalur') === 'scholarship' ? 'selected' : '' }}>Scholarship</option>
                    <option value="transfer" {{ old('jalur') === 'transfer' ? 'selected' : '' }}>Transfer</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="image" class="font-montserrat font-semibold">Photo (JPG/PNG, max 2MB)</label>
                <input type="file" id="image" name="image" accept="image/png,image/jpeg"
                    class="border rounded-lg px-4 py-2 bg-white" required />
            </div>

            <div class="flex flex-col gap-2">
                <label for="programstudi_1" class="font-montserrat font-semibold">First Study Program</label>
                <input type="text" id="programstudi_1" name="programstudi_1" value="{{ old('programstudi_1') }}"
                    class="border rounded-lg px-4 py-2" required />
            </div>

            <div class="flex flex-col gap-2">
                <label for="programstudi_2" class="font-montserrat font-semibold">Second Study Program</label>
                <input type="text" id="programstudi_2" name="programstudi_2" value="{{ old('programstudi_2') }}"
                    class="border rounded-lg px-4 py-2" required />
            </div>

            <div class="md:col-span-2 flex justify-end">
                <button type="submit"
                    class="px-6 py-[14px] font-montserrat font-semibold text-xneutral-0 bg-primary-200 rounded-full">Submit Registration</button>
            </div>
        </form>
    </section>
@endsection


