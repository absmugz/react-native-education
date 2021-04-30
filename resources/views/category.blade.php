@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-full mr-0 lg:mr-32">
                <h2 class="text-brand uppercase tracking-wide font-semibold">Ignite Tutorials</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="flex-none">
                            <a href="#">
                                <img src="/assets/img/ignite.png" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="ml-6 lg:ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Build an iOS and Android app in less than 30 minutes using Ignite</a>
                            <div class="text-gray-400 mt-1">Beginners</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                In this tutorial, I will guide you through creating an iOS and Android App with Ignite using react-native-elements for layout and styling in less than 30 mins. Don't ask why the 30 seconds. We will be creating a Liverpool Football Club First Team App which lists the first team then you can click to open a detailed view of the selected/current player.
                            </p>
                        </div>
                    </div>
                     <!-- end game -->
                </div>
            </div>
        </div> <!-- end container -->
@endsection
