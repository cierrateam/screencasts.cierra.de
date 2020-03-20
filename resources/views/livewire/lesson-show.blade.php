
<div class="w-1/4">
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
