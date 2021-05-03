@extends('layouts.app')

@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-darkBackground">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-brand sm:text-4xl">
                <span class="block">React Native Education</span>
            </h2>
            <!-- <h2 class="text-3xl text-white sm:text-4xl">
              <span class="block">Coming Soon.</span>
            </h2>-->
            <!-- <p class="mt-4 text-lg leading-6 text-indigo-200">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
           <a href="#" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
               Sign up for free
           </a>-->
       </div>
   </div>

    <div class="container mx-auto px-4 py-8">
        <h2 class="text-brand uppercase tracking-wide font-semibold">Screencasts</h2>

        <div class="categories text-sm grid grid-col-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">
            <div class="game mt-8">
                <div class="inline-block">
                    <a href="/category">
                        <img src="/assets/img/ignite.png" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <a href="/category" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Ignite</a>
                <div class="text-gray-400 mt-1">Available to watch.</div>
            </div>
            <div class="game mt-8">
                <div class="inline-block">
                    <a href="#">
                        <img src="/assets/img/react.png" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">React Native</a>
                <div class="text-gray-400 mt-1">Coming Soon.</div>
            </div>
            <div class="game mt-8">
                <div class="inline-block">
                    <a href="#">
                        <img src="/assets/img/mobx.png" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Mobx State Tree</a>
                <div class="text-gray-400 mt-1">Coming Soon.</div>
            </div>
            <div class="game mt-8">
                <div class="inline-block">
                    <a href="#">
                        <img src="/assets/img/redux.png" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Redux</a>
                <div class="text-gray-400 mt-1">Coming Soon.</div>
            </div>
            <div class="game mt-8">
                <div class="inline-block">
                    <a href="#">
                        <img src="/assets/img/storybook.png" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Storybook</a>
                <div class="text-gray-400 mt-1">Coming Soon.</div>
            </div>
            <div class="game mt-8">
                <div class="inline-block">
                    <a href="#">
                        <img src="/assets/img/graphql.png" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Graph ql</a>
                <div class="text-gray-400 mt-1">Coming Soon.</div>
            </div>
        </div>

    </div>




@endsection
