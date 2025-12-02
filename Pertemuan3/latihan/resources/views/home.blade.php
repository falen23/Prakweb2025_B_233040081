<x-layout>
    <x-slot:title>Home</x-slot:title>
    
    <x-slot:header>
        <h2 class="text-xl font-extrabold text-blue-400 hover:text-blue-200 tracking-wider">
            Status
        </h2>
    </x-slot:header>

    <div class="space-y-6">
        {{-- Welcome Card --}}
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Selamat Datang!</h1>
                <p class="text-gray-600 text-lg">
                    Anda bisa melihat Ringkasan performa tim di pekan terakhir. Perhatikan metrik kritikal, identifikasi kelemahan lawan, dan persiapkan strategi melihat statistik.
                </p>
                
                <div class="mt-6 flex gap-4">
                    <a href="/categories" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Pertandingan Terakhir
                    </a>
                    <a href="/posts" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                        Lihat Peringkat 
                    </a>
                </div>
            </div>
        </div>

        {{-- Stats Grid (Contoh Widget) --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-indigo-500 rounded-md p-1">
                            <svg fill="#edededff" width="40px" height="40px" viewBox="0 0 100 100" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Grid"></g> <g id="_x31_"></g> <g id="_x32_"></g> <g id="_x33_"> <path d="M58.4,61.7H41.6c-0.8,0-1.5-0.7-1.5-1.5V19c0-0.3,0.1-0.6,0.3-0.9l8.4-11.6c0.6-0.8,1.9-0.8,2.4,0l8.4,11.6 c0.2,0.3,0.3,0.6,0.3,0.9v41.2C59.9,61,59.3,61.7,58.4,61.7z M43.1,58.7h13.9V19.5L50,9.9l-6.9,9.6V58.7z M66.5,73.9h-33 c-0.7,0-1.4-0.5-1.5-1.3l-2-12.2c-0.1-0.4,0.1-0.9,0.3-1.2c0.3-0.3,0.7-0.5,1.1-0.5h37c0.4,0,0.9,0.2,1.1,0.5s0.4,0.8,0.3,1.2 l-2,12.2C67.9,73.4,67.3,73.9,66.5,73.9z M34.8,70.9h30.5l1.5-9.2H33.3L34.8,70.9z M55.2,85.5H44.8c-0.8,0-1.5-0.7-1.5-1.5l0-11.5 c0-0.4,0.2-0.8,0.4-1.1c0.3-0.3,0.7-0.4,1.1-0.4h10.4c0.4,0,0.8,0.2,1.1,0.4c0.3,0.3,0.4,0.7,0.4,1.1l0,11.5 C56.7,84.8,56,85.5,55.2,85.5z M46.3,82.5h7.3l0-8.5h-7.3L46.3,82.5z M52.3,61.7h-4.6c-0.8,0-1.5-0.7-1.5-1.5V43.4 c0-2.1,1.7-3.8,3.8-3.8c2.1,0,3.8,1.7,3.8,3.8v16.8C53.8,61,53.1,61.7,52.3,61.7z M49.2,58.7h1.6V43.4c0-0.4-0.4-0.8-0.8-0.8 c-0.4,0-0.8,0.4-0.8,0.8V58.7z M55.2,92.8H44.8c-0.8,0-1.5-0.7-1.5-1.5V84c0-0.8,0.7-1.5,1.5-1.5h10.3c0.8,0,1.5,0.7,1.5,1.5v7.4 C56.7,92.1,56,92.8,55.2,92.8z M46.3,89.8h7.3v-4.4h-7.3V89.8z"></path> </g> <g id="_x34_"></g> <g id="_x35_"></g> <g id="_x36_"></g> <g id="_x37_"></g> <g id="_x38_"></g> <g id="_x39_"></g> <g id="_x31_0"></g> <g id="_x31_1"></g> <g id="_x31_2"></g> <g id="_x31_3"></g> <g id="_x31_4"></g> <g id="_x31_5"></g> <g id="_x31_6"></g> <g id="_x31_7"></g> <g id="_x31_8"></g> <g id="_x31_9"></g> <g id="_x32_0"></g> <g id="_x32_1"></g> <g id="_x32_2"></g> <g id="_x32_3"></g> <g id="_x32_4"></g> <g id="_x32_5"></g> </g></svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Pertandingan</dt>
                                <dd class="text-3xl font-semibold text-gray-900">530</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                            <svg width="30px" height="30px" viewBox="0 0 512 512" id="svg2793" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:serif="http://www.serif.com/" xmlns:svg="http://www.w3.org/2000/svg" fill="#feffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs2797"></defs> <g id="_29-Ratio" style="display:inline" transform="translate(-3072,-5120)"> <g id="g2138" transform="translate(3124.68,5312.57)"> <path d="m 0,-134.326 c -3.079,-3.079 -4.846,-7.341 -4.846,-11.692 0,-4.416 1.725,-8.576 4.838,-11.695 3.137,-3.131 7.296,-4.855 11.712,-4.855 h 80.88 c 4.417,0 8.576,1.724 11.695,4.838 3.124,3.13 4.845,7.289 4.845,11.712 0,4.358 -1.763,8.62 -4.836,11.693 -3.126,3.125 -7.282,4.847 -11.704,4.847 h -80.88 c -4.421,0 -8.577,-1.722 -11.704,-4.848 M 339.631,28.242 H 235.324 V -76.056 c 50.479,13.716 90.589,53.823 104.307,104.298 M 125.5,-113.111 c 5.04,-5.039 8.818,-11.213 11.104,-17.907 h 104.01 v 25.309 c -5.941,-1.502 -11.988,-2.708 -18.127,-3.602 -4.318,-0.632 -8.68,0.648 -11.975,3.497 -3.294,2.849 -5.188,6.99 -5.188,11.345 V 43.242 c 0,8.285 6.716,15 15,15 h 137.72 c 4.355,0 8.496,-1.893 11.346,-5.188 2.849,-3.294 4.126,-7.665 3.497,-11.976 -5.553,-38.093 -22.953,-72.695 -50.323,-100.064 -15.278,-15.279 -32.813,-27.447 -51.95,-36.187 v -50.845 c 0,-8.285 -6.716,-15 -15,-15 h -118.96 c -2.262,-6.669 -6.033,-12.788 -11.162,-17.925 -8.801,-8.786 -20.487,-13.625 -32.908,-13.625 h -80.88 c -12.42,0 -24.106,4.839 -32.925,13.642 -8.786,8.801 -13.625,20.488 -13.625,32.908 0,12.25 4.97,24.244 13.634,32.906 8.792,8.792 20.482,13.634 32.916,13.634 h 80.88 c 12.436,0 24.125,-4.842 32.916,-13.633" id="path2136" style="fill-rule:nonzero"></path> </g> <g id="g2142" transform="translate(3531.31,5271.86)"> <path d="m 0,325.306 c -3.069,3.074 -7.328,4.838 -11.685,4.838 h -80.889 c -4.421,0 -8.571,-1.718 -11.703,-4.856 -3.119,-3.114 -4.837,-7.263 -4.837,-11.684 0,-4.422 1.72,-8.578 4.845,-11.703 3.126,-3.125 7.279,-4.847 11.695,-4.847 h 80.889 c 4.351,0 8.614,1.767 11.694,4.847 3.125,3.126 4.846,7.282 4.846,11.703 0,4.42 -1.717,8.569 -4.855,11.702 M -349.305,120.544 c 0,-56.384 38.017,-105.766 90.87,-121.312 v 43.715 c -12.818,5.907 -24.182,15.013 -32.708,26.346 -11.195,14.882 -17.112,32.604 -17.112,51.251 0,47.068 38.288,85.36 85.351,85.36 18.649,0 36.373,-5.919 51.257,-17.117 11.33,-8.524 20.436,-19.887 26.345,-32.703 h 43.72 c -15.546,52.849 -64.932,90.86 -121.322,90.86 -69.698,0 -126.401,-56.702 -126.401,-126.4 M 21.222,280.688 C 12.558,272.024 0.563,267.054 -11.685,267.054 h -80.889 c -12.429,0 -24.115,4.842 -32.907,13.634 -5.127,5.127 -8.9,11.244 -11.164,17.916 h -81.969 v -21.726 c 36.246,-0.994 71.056,-14.55 98.445,-38.436 28.186,-24.581 46.663,-58.389 52.027,-95.194 0.629,-4.31 -0.647,-8.681 -3.497,-11.975 -2.849,-3.295 -6.99,-5.189 -11.345,-5.189 h -72.611 c -6.596,0 -12.42,4.311 -14.345,10.619 -7.048,23.082 -28.828,39.201 -52.964,39.201 -30.521,0 -55.351,-24.834 -55.351,-55.36 0,-24.14 16.118,-45.916 39.195,-52.953 6.313,-1.925 10.625,-7.749 10.625,-14.347 v -72.61 c 0,-4.355 -1.893,-8.496 -5.188,-11.346 -3.294,-2.848 -7.657,-4.126 -11.976,-3.497 -36.804,5.365 -70.614,23.841 -95.198,52.026 -24.832,28.467 -38.508,64.95 -38.508,102.727 0,77.484 56.642,141.975 130.691,154.275 v 38.785 c 0,8.284 6.716,15 15,15 h 96.968 c 2.263,6.673 6.035,12.784 11.156,17.897 8.783,8.798 20.472,13.643 32.916,13.643 h 80.889 c 12.263,0 24.26,-4.973 32.898,-13.625 8.798,-8.783 13.642,-20.473 13.642,-32.915 0,-12.435 -4.841,-24.124 -13.633,-32.916" id="path2140" style="fill-rule:nonzero"></path> </g> </g> </g></svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Rasio Kemenangan</dt>
                                <dd class="text-3xl font-semibold text-gray-900">68%</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                            <svg fill="#000000" width="30px" height="30px" viewBox="0 0 100 100" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Grid"></g> <g id="_x31_"></g> <g id="_x32_"></g> <g id="_x33_"></g> <g id="_x34_"></g> <g id="_x35_"></g> <g id="_x36_"></g> <g id="_x37_"></g> <g id="_x38_"></g> <g id="_x39_"></g> <g id="_x31_0"></g> <g id="_x31_1"></g> <g id="_x31_2"></g> <g id="_x31_3"></g> <g id="_x31_4"></g> <g id="_x31_5"></g> <g id="_x31_6"></g> <g id="_x31_7"></g> <g id="_x31_8"></g> <g id="_x31_9"></g> <g id="_x32_0"></g> <g id="_x32_1"></g> <g id="_x32_2"></g> <g id="_x32_3"></g> <g id="_x32_4"> <path d="M50.3,80.4c-0.8,0-1.6-0.3-2.2-0.8l-7.3-5.5l-6.6,4.3c-1.2,0.7-2.6,0.8-3.8,0.1c-1.2-0.7-2-1.9-2-3.3V52.7 c0-11.1,8.3-20.4,19.4-21.6c1.6-0.2,3-0.2,4.6,0c4.9,0.5,9.6,2.7,13.1,6.2c4.1,4.1,6.3,9.5,6.3,15.3v22.5c0,1.4-0.8,2.7-2,3.3 c-1.2,0.6-2.7,0.6-3.9-0.2l-6-4.1l-7.3,5.5C51.8,80.2,51,80.4,50.3,80.4z M40.7,71.1c0.6,0,1.1,0.2,1.6,0.5l7.5,5.6 c0.3,0.2,0.6,0.2,0.9,0l7.5-5.6c0.9-0.7,2.2-0.7,3.2,0l6.1,4.2c0.3,0.2,0.7,0.1,0.8,0c0.1-0.1,0.4-0.3,0.4-0.7V52.7 c0-5-1.9-9.7-5.5-13.2c-3-3-7-4.9-11.2-5.4c-1.3-0.1-2.6-0.1-4,0c-9.5,1-16.7,9-16.7,18.6v22.6c0,0.4,0.3,0.6,0.4,0.7 c0.1,0.1,0.4,0.2,0.8,0l6.7-4.4C39.7,71.3,40.2,71.1,40.7,71.1z M29.8,69.3c-0.1,0-0.1,0-0.2,0c-0.7-0.1-1.3-0.3-1.9-0.7l-7.3-5.4 l-6.6,4.3c-1.2,0.7-2.6,0.8-3.8,0.1c-1.2-0.7-2-1.9-2-3.3V41.7c0-12,9.7-21.7,21.7-21.7c5.8,0,11.2,2.3,15.3,6.4 c1.7,1.7,3,3.6,4.1,5.6c0.2,0.4,0.2,1,0,1.4c-0.2,0.4-0.7,0.7-1.2,0.8c-9.5,1-16.7,9-16.7,18.6v15.1c0,0.4-0.2,0.8-0.5,1.1 C30.5,69.2,30.2,69.3,29.8,69.3z M20.5,60.1c0.6,0,1.1,0.2,1.6,0.5l6.2,4.6V52.7c0-10.4,7.2-19.1,17.2-21.2c-0.7-1.1-1.5-2.1-2.5-3 c-3.5-3.5-8.2-5.5-13.2-5.5c-10.3,0-18.7,8.4-18.7,18.7v22.6c0,0.4,0.3,0.6,0.4,0.7c0.1,0.1,0.4,0.2,0.8,0l6.7-4.4 C19.5,60.3,20,60.1,20.5,60.1z M70.5,69.4c-0.2,0-0.3,0-0.5,0c-0.7-0.1-1.3-0.7-1.3-1.5V52.7c0-5-1.9-9.7-5.5-13.2 c-3-3-7-4.9-11.2-5.4c-0.5-0.1-0.9-0.3-1.2-0.8c-0.2-0.4-0.2-1,0-1.4c3.7-7.4,11.1-12,19.4-12c5.8,0,11.3,2.3,15.3,6.4 c4.1,4.1,6.4,9.5,6.4,15.3v22.5c0,1.4-0.8,2.7-2,3.3c-1.2,0.7-2.7,0.6-3.9-0.2l-6-4.1l-7.4,5.4C72,69.1,71.3,69.4,70.5,69.4z M54.5,31.5c4.1,0.9,7.9,2.9,10.8,5.9c4.1,4.1,6.3,9.5,6.3,15.3v12.9l6.7-5c0.9-0.7,2.2-0.7,3.2-0.1l6.2,4.2c0.3,0.2,0.7,0.1,0.8,0 c0.1-0.1,0.4-0.3,0.4-0.7V41.7c0-5-1.9-9.7-5.5-13.2c-3.5-3.5-8.2-5.5-13.2-5.5C63.8,23,57.9,26.2,54.5,31.5z M40.7,58.8 c-3.2,0-5.8-2.6-5.8-5.8s2.6-5.8,5.8-5.8s5.8,2.6,5.8,5.8S43.9,58.8,40.7,58.8z M40.7,50.2c-1.5,0-2.8,1.2-2.8,2.8s1.2,2.8,2.8,2.8 s2.8-1.2,2.8-2.8S42.3,50.2,40.7,50.2z M21.6,47.6c-4.7,0-8.6-3.9-8.6-8.6c0-4.7,3.9-8.6,8.6-8.6s8.6,3.9,8.6,8.6 C30.2,43.7,26.4,47.6,21.6,47.6z M21.6,33.3c-3.1,0-5.6,2.5-5.6,5.6c0,3.1,2.5,5.6,5.6,5.6s5.6-2.5,5.6-5.6 C27.2,35.9,24.7,33.3,21.6,33.3z M58.8,58.8c-3.2,0-5.8-2.6-5.8-5.8s2.6-5.8,5.8-5.8s5.8,2.6,5.8,5.8S61.9,58.8,58.8,58.8z M58.8,50.2c-1.5,0-2.8,1.2-2.8,2.8s1.2,2.8,2.8,2.8s2.8-1.2,2.8-2.8S60.3,50.2,58.8,50.2z M80,49.6c-3.2,0-5.8-2.6-5.8-5.8 S76.8,38,80,38s5.8,2.6,5.8,5.8S83.2,49.6,80,49.6z M80,41c-1.5,0-2.8,1.2-2.8,2.8s1.2,2.8,2.8,2.8s2.8-1.2,2.8-2.8S81.5,41,80,41z M70,38.6c-3.2,0-5.8-2.6-5.8-5.8S66.8,27,70,27s5.8,2.6,5.8,5.8S73.2,38.6,70,38.6z M70,30c-1.5,0-2.8,1.2-2.8,2.8 s1.2,2.8,2.8,2.8s2.8-1.2,2.8-2.8S71.5,30,70,30z"></path> </g> <g id="_x32_5"></g> </g></svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">KDA Rata-Rata Tim</dt>
                                <dd class="text-3xl font-semibold text-gray-900">4.5</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>