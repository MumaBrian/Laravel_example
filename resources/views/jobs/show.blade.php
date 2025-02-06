<x-layout>
    <x-slot:heading>{{ $job->title }}</x-slot:heading>
    <p>
        {{ $job['title'] }} job pays {{ $job->salary }} per year
    </p>
    <p class="mt-6">
        <a href="/jobs/{{$job->id}}/edit" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
            Edit Job
        </a>    
    </p>
</x-layout>