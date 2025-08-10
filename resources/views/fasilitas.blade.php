@extends('layouts.app')

@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
            B-University Facilities
        </h1>
        <p class="text-xneutral-200 font-montserrat text-sm sm:text-base font-semibold">
            Creating a comfortable and fully equipped learning environment
        </p>

        @if ($facilities->isEmpty())
            <div class="text-center text-xneutral-300 font-montserrat font-medium text-sm sm:text-base">
                No Data Available
            </div>
        @else
            @foreach ($facilities as $facility)
                <div class="grid grid-cols-1 sm:grid-cols-12 gap-8 mt-8">
                    <img src="{{ asset('storage/' . $facility->image) }}" alt="Information Systems and Technology Laboratory"
                        class="w-full h-fit object-cover rounded-[30px] sm:col-span-5" />
                    <div class="sm:col-span-7">
                        {!! $facility->content !!}
                    </div>
                </div>
            @endforeach
        @endif

        <style>
            /* Heading styles */
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                color: #333;
                font-family: 'Montserrat', sans-serif;
                font-weight: bold;
            }

            /* Bullet and numbering styles */
            ul {
                list-style-type: disc;
                padding-left: 20px;
                margin-bottom: 1em;
            }

            ol {
                list-style-type: decimal;
                padding-left: 20px;
                margin-bottom: 1em;
            }

            li {
                margin-bottom: 0.5em;
            }

            p {
                margin-bottom: 1em;
                color: #555;
            }
        </style>
    </article>
@endsection
