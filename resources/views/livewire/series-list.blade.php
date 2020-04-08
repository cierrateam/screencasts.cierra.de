<div class="w-full">

    <div class="relative pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Alle Serien
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                    Wähle eine Serie aus die du anschauen willst.
                </p>
            </div>
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">

                @foreach($series as $series_obj)
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="{{$series_obj->thumbnail_image}}" alt="" />
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm leading-5 font-medium text-indigo-600">
                                <a href="/lessons/{{$series_obj->lessons->first()->id}}" class="hover:underline">
                                    {{$series_obj->category_string}}
                                </a>
                            </p>
                            <a href="/lessons/{{$series_obj->lessons->first()->id}}" class="block">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                    {{$series_obj->name}}
                                </h3>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    {{$series_obj->subtitle}}
                                </p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="/lessons/{{$series_obj->lessons->first()->id}}">
                                    <img class="h-10 w-10 rounded-full" src="https://www.gravatar.com/avatar/e0767d767d3ce77f74ceae988d4d1b37" alt="" />
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-gray-900">
                                    <a href="/lessons/{{$series_obj->lessons->first()->id}}" class="hover:underline">
                                        Vittorio Emmermann
                                    </a>
                                </p>
                                <div class="flex text-sm leading-5 text-gray-500">
                                    {{$series_obj->created_at->diffForHumans()}}
                                    <span class="mx-1">
                  &middot;
                </span>
                                    <span>
                  {{$series_obj->lessons->count()}} Folgen
                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
