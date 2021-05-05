@extends('layouts.app')

@section('content')
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row my-10">
                <div class="recently-reviewed w-full lg:w-full mr-0 lg:mr-32">
                    <h2 class="text-brand uppercase tracking-wide font-semibold">Ignite Tutorials</h2>
                    <div class="recently-reviewed-container space-y-12 mt-8">
                        @foreach ($tutorials as $tutorial)
                        <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                            <div class="flex-none">
                                <a href="/tutorial/{{  $tutorial->id }}">
                                    <img src="/assets/img/ignite.png" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                            </div>
                            <div class="ml-6 lg:ml-12">
                                <a href="/detail" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">{{ $tutorial->title }}</a>
                                <div class="text-gray-400 mt-1">Beginners</div>
                                <p class="mt-6 text-gray-400 hidden lg:block">
                                    {{ $tutorial->body }}
                                </p>
                            </div>
                        </div>
                        <!-- end game -->
                        @endforeach
                    </div>
                </div>
            </div> <!-- end container -->

@endsection
