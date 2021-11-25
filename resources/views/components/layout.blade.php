<!DOCTYPE html>

    <title>IntelRobotics - Robotter til din virksomhed!</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <body>
        <section class="py-4 px-6">
            <nav class="flex justify-between items-center pb-3 border-b">
                <div>
                    <a href="/front">IntelRobotics</a>
                </div>
                <div>
                    <a href="/" class="text-xs font-bold uppercase">Forside</a>
                    <a href="/katalog" class="text-xs ml-3">Katalog</a>
                    <a href="/om-os" class="text-xs ml-3">Om os</a>
                    <a href="/kontakt" class="text-xs ml-3">Kontakt</a>
                    <a href="/login" class="bg-blue-500 rounded-full text-xs text-white font-semibold ml-3 px-3 py-1 uppercase">Login</a>
                </div>
            </nav>

            {{ $slot }}

            <footer>

            </footer>

        </section>
    </body>

</html>