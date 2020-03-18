<div>
    <div class="mt-8">
        <h3 class="px-3 text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider">
            Lessons
        </h3>
        <div class="mt-1">
            @foreach($lessons as $lesson)
                <a href="/lessons/{{$lesson->id}}" class="group flex items-center px-3 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:bg-gray-100 transition ease-in-out duration-150">
                        <span class="truncate">
                          {{$lesson->name}}
                        </span>
                </a>
            @endforeach
        </div>
    </div>
</div>
