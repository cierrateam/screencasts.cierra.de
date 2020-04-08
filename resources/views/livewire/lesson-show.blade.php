
<div class="w-1/4">
    <div class="rounded-md bg-gray-50 p-4 mt-9 mr-4 shadow">
        <span class="text-2xl font-bold">Digitale Präsenz als Autohaus aufbauen</span>
    </div>
    <livewire:lessons-list :series="$lesson->series_id" />
</div>

<div class="w-3/4">

    <div class="md:flex md:items-center md:justify-between py-4">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{$lesson->name}}
            </h2>
        </div>
        {{--    <div class="mt-4 flex md:mt-0 md:ml-4">--}}
        {{--        <span class="ml-3 shadow-sm rounded-md">--}}
        {{--      <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700 transition duration-150 ease-in-out">--}}
        {{--        Mark as seen--}}
        {{--      </button>--}}
        {{--    </span>--}}
        {{--    </div>--}}
    </div>

    <div>
        <div class="embed-container">
            <iframe class="mx-auto" src="{{$lesson->url}}" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
    </div>
    <div class="mt-6 flex items-center">
        <div class="flex-shrink-0">
            <a href="#">
                <img class="h-10 w-10 rounded-full" src="https://www.gravatar.com/avatar/e0767d767d3ce77f74ceae988d4d1b37" alt="" />
            </a>
        </div>
        <div class="ml-3">
            <p class="text-sm leading-5 font-medium text-gray-900">
                <span class="hover:underline">
                    Vittorio Emmermann
                </span>
            </p>
            <div class="flex text-sm leading-5 text-gray-500">
                {{$lesson->created_at->diffForHumans()}}
                <span class="mx-1">
                  &middot;
                </span>
                <span>
                    {{__('ui.Part of')}} {{$series->name}}
                </span>
            </div>
        </div>
    </div>

    <p class="my-4 rounded bg-gray-800 text-white p-4">
        {{$lesson->description}}
    </p>

</div>

<style>
    .embed-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0; overflow: hidden;
        max-width: 100%; height: auto;
    }
    .embed-container iframe, .embed-container object, .embed-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
