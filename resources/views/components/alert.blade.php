@props(['message'])

<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
    class="absolute z-40 flex items-center max-w-xs gap-2 px-6 py-3 rounded-lg shadow top-24 right-4 bg-slate-100 text-slate-800 dark:bg-slate-700 dark:text-slate-300">
    <span class="grid bg-teal-200 rounded-full dark:bg-teal-700 w-7 h-7 place-items-center">
        <i class="text-lg text-teal-700 dark:text-teal-200 bi bi-check2"></i>
    </span>
    {{ $message }}
</div>
