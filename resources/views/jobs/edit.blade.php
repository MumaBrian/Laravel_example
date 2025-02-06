<x-layout>
    <x-slot name="heading">Edit Job {{$job->title}}</x-slot>

    <p>TODO</p>
    <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                <div class="mt-2">
                <div class="flex items-center rounded-md bg-white px-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="shift leader" required value="{{$job->title}}">
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
                    <input type="text" name="salary" id="salary" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="$50000 per year" required value="{{$job->salary}}">
                </div>

                @error('salary')
                    <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                @enderror
                </div>
            </div>
        </div>
        </div>
            
        <div class="flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-sm font-bold text-red-600 hover:text-red-800">Delete</button>
            </div>
            
            <div class="mt-6 flex items-center gap-x-6">
                <a href="/jobs/{{$job->id}}" type="button" class="text-sm/6 font-semibold text-white">Cancel</a>
            
                <div>
                    <button type="submit" class="text-sm/6 font-semibold text-white bg-green-600 hover:bg-green-700">Update</button>
                </div>
            </div>
        </div>
    </form>

    <form id="delete-form" action="/jobs/{{$job->id}}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>