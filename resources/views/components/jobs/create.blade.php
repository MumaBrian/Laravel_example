<x-layout>
    <x-slot name="heading">Create Job</x-slot>

    <p>TODO</p>
    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray">Create a new Job</h2>
            <p class="mt-1 text-sm/6 text-gray">We just need a handful of details.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                <div class="mt-2">
                <div class="flex items-center rounded-md bg-white px-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="shift leader" required>
                </div>

                @error('title')
                    <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                @enderror
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
                <div class="mt-2">
                <div class="flex items-center rounded-md bg-white px-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="salary" id="salary" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="$50000 per year" required>
                </div>

                @error('salary')
                    <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                @enderror
                </div>
            </div>
        </div>
        </div>
            
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</x-layout>