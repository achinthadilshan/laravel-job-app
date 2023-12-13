@props(['tagsCSV'])

@php
    $tags = explode(',', trim($tagsCSV));
@endphp

<ul class="flex flex-wrap items-center gap-1">
    @foreach ($tags as $tag)
        <li>
            <a href="/?tag={{ $tag }}"
                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">{{ $tag }}</a>
        </li>
    @endforeach

</ul>
