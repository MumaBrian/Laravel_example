<x-layout>
    <x-slot:heading>Jobs listing page</x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{$job['title']}}</strong>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>