<!DOCTYPE html>

    <title>IntelRobotics - Robotter til din virksomhed!</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <body>
        <section class="py-4 px-6">
            <nav class="flex justify-between items-center pb-3 px-8 border-b">
                <div>
                    <a href="/">IntelRobotics</a>
                </div>
                <div>
                    <a href="/" class="text-xs font-bold uppercase">Forside</a>
                    <a href="/katalog" class="text-xs ml-3">Katalog</a>
                    <a href="/om-os" class="text-xs ml-3">Om os</a>
                    <a href="/kontakt" class="text-xs ml-3">Kontakt</a>                    
                    <select name="cars" id="cars">
                        <option value="danish">Dansk (Danish)</option>
                        <option value="english">Engelsk (English)</option>
                        <option value="japanese">Japansk (Japanese)</option>
                    </select>
                    <a href="/login" class="bg-blue-500 rounded-full text-xs text-white hover:bg-blue-700 font-semibold ml-3 px-3 py-1 uppercase">Login</a>
                </div>
            </nav>

            {{ $slot }}

            <footer class="border-t border-gray-200">
                <div
                    class="
                    container
                    flex flex-col flex-wrap
                    px-4
                    py-16
                    mx-auto
                    md:items-center
                    lg:items-start
                    md:flex-row md:flex-nowrap
                    "
                >
                    <div
                    class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left"
                    >
                    <a
                        class="
                        flex
                        items-center
                        justify-center
                        text-4xl
                        font-bold
                        text-blue-700
                        md:justify-start
                        "
                    >
                        IntelRobotics
                    </a>
                    <p class="mt-2 text-sm text-gray-500">
                        Vi er en international virksomhed der udvikler industrirobotter. 
                        Vi har afdelinger i Danmark, Canada og Japan. Vi er på nuværende tidspunkt
                        en virksomhed i vækst og udvider aktivt vores sortiment og lokationer.
                    </p>
                    </div>
                    <div class="justify-between w-full mt-4 text-center lg:flex">
                        <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                            <h2 class="mb-2 font-bold tracking-widest text-gray-900">
                            IntelRobotics Danmark
                            </h2>
                            <p>Fælledvej 12</p>
                            <p>2200 København</p>
                            <p>Denmark</p>
                            <p>info-den@intelrobitics.com</p>
                            <p>+45 53023017</p>
                        </div>
                        <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                            <h2 class="mb-2 font-bold tracking-widest text-gray-900">
                            IntelRobotics Canada
                            </h2>
                            <p>136 Vivian Ave</p>
                            <p>Mount Royal, QC H3P 1N7</p>
                            <p>Canada</p>
                            <p>info-can@intelrobitics.com</p>
                            <p>+1 (514)509-6440</p>
                        </div>
                        <div class="w-full px-4 lg:w-1/3 md:w-1/2">
                            <h2 class="mb-2 font-bold tracking-widest text-gray-900">
                            IntelRobotics Japan
                            </h2>
                            <p>2-chōme-5 Taitō, Taito City</p>
                            <p>Tokyo 110-0016</p>
                            <p>Japan</p>
                            <p>info-jap@intelrobitics.com</p>
                            <p>+81 (03)2032-7438</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <p class="text-base text-gray-400">
                    All rights reserved by © IntelRobotics 2021
                    </p>
                </div>
            </footer>

        </section>
    </body>

</html>