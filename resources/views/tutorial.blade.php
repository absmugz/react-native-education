@extends('layouts.app')

@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div x-data="video()" x-init="init()" >
        <section class="tw-bg-deep-black tw-p-0">
            <div class="video-main justify-start mx-auto" style="max-width: 150vh;">
                <div id="laracasts-video-wrap" class="tw-flex-1 tw-overflow-hidden">
                    <div id="laracasts-video" data-vimeo-initialized="true">
                        <div style="padding:56.25% 0 0 0;position:relative;">
                            <iframe x-ref="player" src="<?=URL("https://player.vimeo.com/video/{$tutorial->videos[0]->screencast}")?>"
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
                                    <img src="{{ url('storage/'.$tutorial->category->thumbnail) }}"alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </div>
                            <div class="ml-6 lg:ml-12">
                                <p class="block text-lg font-semibold leading-tight mt-4">{{ $tutorial->title }}</p>
                                <div class="text-gray-400 mt-1">Beginners</div>
                                <p class="mt-6 text-gray-400 hidden lg:block">
                                    {!! $tutorial->body !!}
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
                            <div class="w-full sm:w-auto inline-flex items-center justify-center text-darkBackground group-hover:text-purple-500 font-medium leading-none bg-white rounded-lg shadow-sm group-hover:shadow-lg py-3 px-5 border border-transparent transform group-hover:-translate-y-0.5 transition-all duration-150"><svg width="24" height="24" fill="currentColor" class="text-darkBackground mr-3 text-opacity-50 transform"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.606 9.606 0 0112 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48C19.137 20.107 22 16.373 22 11.969 22 6.463 17.522 2 12 2z"></path></svg><span>Download from github</span></div>

                            <!-- <svg width="24" height="24" fill="currentColor" class="hover:opacity-75 transition ease-in-out duration-150"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.606 9.606 0 0112 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48C19.137 20.107 22 16.373 22 11.969 22 6.463 17.522 2 12 2z"></path></svg> -->
                            </a>
                            <div class="ml-4">
                                <!--  <a href="https://github.com/absmugz/Liverpool" target="_blank" class="hover:text-gray-300">download from github</a>
                                 <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div> -->
                            </div>
                        </div>
                    </div>

                    @if ($tutorial->videos->count() > 1)
                        <h2 class="text-brand uppercase tracking-wide font-semibold mt-12">Videos</h2>
                        @foreach ($tutorial->videos as $video)
                            <div class="most-anticipated-container space-y-10 mt-8">
                                <div class="game flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-100 w-100 hover:opacity-75 transition ease-in-out duration-150" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                    </svg>
                                    <div class="ml-4">
                                        <div @click="loadVideo({{ $video->screencast }})" class="hover:text-gray-300">{{ $video->title }}</div>
                                        <!-- <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div> -->
                                    </div>
                                </div>
                            @endforeach
                            <!-- end video -->
                                @endif




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
    </div>


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
