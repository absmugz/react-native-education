@extends('layouts.app')

@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <section x-data="video()" x-init="init()" class="tw-bg-deep-black tw-p-0">
        <div class="video-main justify-start mx-auto" style="max-width: 150vh;">
            <div id="laracasts-video-wrap" class="tw-flex-1 tw-overflow-hidden">
                <div id="laracasts-video" data-vimeo-initialized="true">
                    <div style="padding:56.25% 0 0 0;position:relative;">
                        <iframe x-ref="player" src="https://player.vimeo.com/video/543201387"
                                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""
                                style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                title="Play-Up-And-Down-The-Neck" data-ready="true"></iframe></div></div></div></div>

        <!--
                <div class="mt-8 p-6 font-semibold text-lg text-center">

                    <h2 class="text-2xl text-gray-800" x-ref="title" x-text="title"></h2>

                    <div class="px-6 py-4 mt-4 rounded bg-blue-700 text-white">
                        <span x-text="progress"></span><span x-show="progress"> %</span>
                    </div>

                    <button @click="getTitle()" class="bg-black my-4 py-2 px-6 rounded text-white hover:pointer hover:bg-gray-800">Title</button>

                    <button @click=" !status ? play() : stop() " class="bg-black my-4 py-2 px-6 rounded text-white hover:pointer hover:bg-gray-800">
                        <span x-show="!status">Play</span>
                        <span x-show="status">Stop</span>
                    </button>

                    <button @click="loadVideo('323777613') " class="bg-black my-4 py-2 px-6 rounded text-white hover:pointer hover:bg-gray-800">loadVideo('323777613')</button>

                </div>
                -->
            </section>

    <div class="container mx-auto px-4">
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
        </div> <!-- end popular-games -->
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-brand uppercase tracking-wide font-semibold">About this Tutorial</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="flex-none">
                            <a href="/detail">
                                <img src="/assets/img/ignite.png" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="ml-6 lg:ml-12">
                            <a href="/detail" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Build an iOS and Android app in less than 30 minutes using Ignite</a>
                            <div class="text-gray-400 mt-1">Beginners</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                In this tutorial, I will guide you through creating an iOS and Android App with Ignite using react-native-elements for layout and styling in less than 30 mins. Don't ask why the 30 seconds. We will be creating a Liverpool Football Club First Team App which lists the first team then you can click to open a detailed view of the selected/current player.
                            </p>
                        </div>
                    </div>
                    <!-- end game -->
                </div>
            </div>
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-brand uppercase tracking-wide font-semibold">Tutorial Material</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="https://github.com/absmugz/Liverpool" target="_blank">
                            <img src="/assets/img/github.png" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="https://github.com/absmugz/Liverpool" target="_blank" class="hover:text-gray-300">download from github</a>
                            <!-- <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->






            <!--
            <main x-data="video()" x-init="init()">
                <iframe class="bg-black mx-auto" x-ref="player" src="https://player.vimeo.com/video/543201387" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                <div class="mt-8 p-6 font-semibold text-lg text-center">

                    <h2 class="text-2xl text-gray-800" x-ref="title" x-text="title"></h2>

                    <div class="px-6 py-4 mt-4 rounded bg-blue-700 text-white">
                        <span x-text="progress"></span><span x-show="progress"> %</span>
                    </div>

                    <button @click="getTitle()" class="bg-black my-4 py-2 px-6 rounded text-white hover:pointer hover:bg-gray-800">Title</button>

                    <button @click=" !status ? play() : stop() " class="bg-black my-4 py-2 px-6 rounded text-white hover:pointer hover:bg-gray-800">
                        <span x-show="!status">Play</span>
                        <span x-show="status">Stop</span>
                    </button>

                    <button @click="loadVideo('323777613') " class="bg-black my-4 py-2 px-6 rounded text-white hover:pointer hover:bg-gray-800">loadVideo('323777613')</button>

                </div>
            </main>
            -->

@endsection
<script>
    function video() {
        const iframe = document.querySelector('iframe');
        const player = new Vimeo.Player(iframe);
        const title = 'This title should get replaced'
        const status = false
        const videoId = ''
        const progress = null

        return {
            title: title,
            status: status,
            progress: progress,
            getTitle(){
                player.getVideoTitle().then( t => {this.title = t } )
            },
            loadVideo(id){
                player.pause().then(
                    player.loadVideo(id).then(v => {
                        this.videoId = v
                        this.getTitle()
                        player.play()
                    } )
                )
            },
            timeupdate(){
                player.on('timeupdate', time => {
                    this.progress = (time.percent * 100).toFixed(1)
                })
            },
            play(){
                player.play()
            },
            stop(){
                player.pause()
            },
            init(){
                this.getTitle()
                this.timeupdate();
                player.on('play', s => {
                    this.status = true
                })

                player.on('pause', s => {
                    this.status = false
                })
            },
        };
    }
</script>
<style>
    .tw-relative {
        position: relative;
    }

    .tw-mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .tw-justify-center {
        justify-content: center;
    }

</style>
