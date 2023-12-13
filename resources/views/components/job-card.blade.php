@props(['job'])

<div
    class="flex flex-col gap-4 p-4 bg-white border rounded-lg shadow-lg border-slate-100 dark:border-slate-800 dark:bg-slate-900">
    <div class="flex flex-col gap-3 xl:flex-row xl:gap-4">
        <img src="{{ $job->image }}" alt="" class="object-cover object-center w-16 h-16 rounded-full">
        <div class="flex flex-col gap-1">
            <a href="{{ route('jobs.show', ['job' => $job]) }}"
                class="text-xl font-medium leading-none text-slate-900 dark:text-white">{{ $job->title }}</a>
            <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">{{ $job->company }}
            </p>
        </div>
    </div>
    <ul class="flex gap-4">
        <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
            <i class="bi bi-briefcase"></i>
            <span>{{ $job->type }}</span>
        </li>
        <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
            <i class="bi bi-geo-alt"></i>
            <span>{{ $job->city }}</span>
        </li>
    </ul>
    <x-tags :tagsCSV="$job->tags" />
    <div class="flex items-end grow">
        <div class="text-xs text-slate-400 dark:text-slate-600">Posted on {{ $job->created_at }}
        </div>
    </div>
</div>
