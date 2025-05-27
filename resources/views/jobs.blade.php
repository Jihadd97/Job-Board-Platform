<x-layout>
    <x-slot:title>Jobs </x-slot:title>
    <x-slot:heading>Jobs Listing</x-slot:heading>
    <h2>
        @foreach ($jobs as $job)
        <a href="/jobs/{{$job['id']}}">
           <li><strong>{{$job['title']}}:</strong> Pays as {{$job['salary']}} per year.</li>
       </a> @endforeach
      
    </h2>
</x-layout>
