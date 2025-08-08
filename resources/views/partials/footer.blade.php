<!-- FOOTER SECTION -->
<footer class="w-full mt-14 pt-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 lg:gap-36 container">
        <div>
            <img class="mb-10"
                src="{{ $datafooter->image ? Storage::url($datafooter->image) : asset('/assets/images/B-Uni.png') }}"
                alt="B-University Logo" />
            <p class="text-medium text-xneutral-200 font-poppins text-sm mb-6">
                Follow our journey on social media
            </p>
            <div class="flex items-center gap-11">
                <a href="{{ $datafooter->instagram_link ?? 'null' }}"
                    class="w-8 h-8 grid place-content-center rounded-full bg-primary-200">
                    <i class="bi bi-instagram text-lg text-xneutral-0"></i>
                </a>
                <a href="{{ $datafooter->youtube_link ?? 'null' }}"
                    class="w-8 h-8 grid place-content-center rounded-full bg-primary-200">
                    <i class="bi bi-youtube text-lg text-xneutral-0"></i>
                </a>
                <a href="{{ $datafooter->linkedin_link ?? 'null' }}"
                    class="w-8 h-8 grid place-content-center rounded-full bg-primary-200">
                    <i class="bi bi-linkedin text-sm text-xneutral-0"></i>
                </a>
                <a href="{{ $datafooter->facebook_link ?? 'null' }}"
                    class="w-8 h-8 grid place-content-center rounded-full bg-primary-200">
                    <i class="bi bi-facebook text-lg text-xneutral-0"></i>
                </a>
            </div>
        </div>
        <div>
            <h4 class="font-poppins font-semibold text-lg text-xneutral-300 mb-10">
                Contact Us
            </h4>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <i class="bi bi-geo-alt-fill text-xneutral-200"></i>
                    <p class="font-poppins text-xneutral-200 text-sm">
                        {{ $datafooter->address ?? 'null' }}
                    </p>
                </div>
                <div class="flex gap-4">
                    <i class="bi bi-envelope text-xneutral-200"></i>
                    <p class="font-poppins text-xneutral-200 text-sm">
                        {{ $datafooter->email ?? 'null' }}
                    </p>
                </div>
                <div class="flex gap-4">
                    <i class="bi bi-whatsapp text-xneutral-200"></i>
                    <p class="font-poppins text-xneutral-200 text-sm">
                        {{ $datafooter->whatsapp_number ?? 'null' }}
                    </p>
                </div>
            </div>
        </div>
        <div>
            <h4 class="font-poppins font-semibold text-lg text-xneutral-300 mb-10">
                Find Us
            </h4>
            <div class="max-h-24">
                <a href="{{ $datafooter->google_maps_link ?? 'null' }}" target="_blank" rel="noopener noreferrer">
                    <button
                        class="px-6 py-[14px] text-center w-full font-montserrat text-neutral-0 bg-white border text-lg font-semibold border-primary-200 text-primary-200 rounded-full">
                        View on Google Maps
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <hr class="mt-14 border-2 border-xneutral-300" />
        <p class="text-center my-6 font-poppins text-xneutral-200">
            © 2025 | B-University. All rights reserved.
        </p>
    </div>
</footer>
<!-- END OF FOOTER SECTION -->
