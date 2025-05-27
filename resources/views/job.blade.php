<x-layout>
    <x-slot:title>Job </x-slot:title>
    <x-slot:heading>Job description</x-slot:heading>
    <h2><strong>
        {{ $job['title'] }}
    </strong></h2>
    <p>
       This job pays {{$job['salary']}} per year.
    </p>
</x-layout>
