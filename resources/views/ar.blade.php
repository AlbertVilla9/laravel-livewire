<script src="https://cdn.jsdelivr.net/gh/aframevr/aframe@1c2407b26c61958baa93967b5412487cd94b290b/dist/aframe-master.min.js"></script>
<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>

<script>
    window.onload = function() {
        AFRAME.registerComponent("videohandler", {
            init:function() {
                var marker = this.el;

                this.vid = document.querySelector("#vid");

                marker.addEventListener(
                    "markerFound",
                    function() {
                        this.vid.play();
                    }.bind(this)
                );

                marker.addEventListener(
                    "markerLost",
                    function() {
                        this.vid.pause();
                        this.vid.currentTime = 0;
                    }.bind(this)
                );
            }
        });
    };
</script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="arjs-loader">
                        <div>Loading, please esperat...</div>
                    </div>
                        <a-scene
                            vr-mode-ui="enabled: false;"
                            renderer="logarithmicDepthBuffer: true;"
                            embedded
                            arjs="trackingMethod: best; sourceType: webcam;debugUIEnabled: true;"
                        >

                            
                            
                            <a-assets>

                            <video
                            src="{{ $urlvideo['urlvideo'] }}"
                            preload="auto"
                            id="vid"
                            response-type="arraybuffer"
                            loop
                            crossorigin
                            webkit-playsinline
                            autoplay
                            muted
                            playsinline
                            ></video>
                            
                            </a-assets>

                            <a-nft
                            videohandler
                            type="nft"
                            url="{{ env('APP_URL') }}/js/NFT/output/{{ $urlvideo['hash'] }}"
                            smooth="true"
                            smoothCount="10"
                            smoothTolerance=".01"
                            smoothThreshold="5"
                            >

                            <a-video src="#vid" position="0 0 0" width="640" height="480"></a-video>
                            </a-nft>
                            <a-entity camera></a-entity>
                        </a-scene>
                </div>
            </div>
        </div>
    </div>



