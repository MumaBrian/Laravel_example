<x-layout>
    <x-slot:heading>Jobs listing page</x-slot:heading>

    <div class="space-y-6">
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <strong>{{$job['title']}}</strong>
                <p>Pays {{$job['salary']}} per year</p>
            </a>
        @endforeach
    </div>

    {{$jobs->links()}}
</x-layout>