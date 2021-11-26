<x-layout>
    <article>
        <h1 class="px-8 pt-8">Vores katalog</h1>
        <div class="px-8 py-3 flex">
            @foreach ($products as $product)
            <div class="flex-1 rounded hover:bg-gray-100 border mx-1">
                <img src="/images/{{ $product['image'] ?? 'placeholder-1.jpg' }}" class="mx-auto mb-2 p-1 rounded">
                <div class="px-3 py-2 italic">
                    <h3 class="font-bold">{{ $product['name'] ?? '' }}</h3>
                    <p class="mb-2">{{ $product['description'] ?? '' }}</p>
                    <a href="/produkt" class="rounded-full bg-blue-500 text-white hover:bg-blue-700 px-2 py-1 my-3">Læs mere</a>
                </div>
            </div>
            @endforeach
            <!-- <div class="flex-1 rounded hover:bg-gray-100 border mx-1">
                <img src="/images/robotarm-1.jpg" class="mx-auto mb-2 p-1 rounded">
                <div class="px-3 py-2 italic">
                    <h3 class="font-bold">Robotarm</h3>
                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor porta neque id mattis. Integer imperdiet faucibus turpis, ac porttitor urna malesuada eget. Aliquam erat volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <a href="/produkt" class="rounded-full bg-blue-500 text-white hover:bg-blue-700 px-2 py-1 my-3">Læs mere</a>
                </div>
            </div>
            <div class="flex-1 rounded hover:bg-gray-100 border mx-1">
                <img src="/images/nao-1.jpg" class="mx-auto mb-2 p-1 rounded">
                <div class="px-3 py-2 italic">
                    <h3 class="font-bold">Nao</h3>
                    <p class="mb-2">{{ $description ?? '' }}</p>
                    <a href="/produkt" class="rounded-full bg-blue-500 text-white hover:bg-blue-700 px-2 py-1 my-3">Læs mere</a>
                </div>
            </div>
            <div class="flex-1 rounded hover:bg-gray-100 border mx-1">
                <img src="/images/{{ $image ?? 'placeholder-1.jpg' }}" class="mx-auto mb-2 p-1 rounded">
                <div class="px-3 py-2 italic">
                    <h3 class="font-bold">{{ $name ?? '' }}</h3>
                    <p class="mb-2">{{ $description ?? '' }}</p>
                    <a href="/produkt" class="rounded-full bg-blue-500 text-white hover:bg-blue-700 px-2 py-1 my-3">Læs mere</a>
                </div>
            </div>
            <div class="flex-1 rounded hover:bg-gray-100 border mx-1">
                <img src="/images/{{ $image ?? 'placeholder-1.jpg' }}" class="mx-auto mb-2 p-1 rounded">
                <div class="px-3 py-2 italic">
                    <h3 class="font-bold">{{ $name ?? '' }}</h3>
                    <p class="mb-2">{{ $description ?? '' }}</p>
                    <a href="/produkt" class="rounded-full bg-blue-500 text-white hover:bg-blue-700 px-2 py-1 my-3">Læs mere</a>
                </div>
            </div> -->
        </div>
    </article>
</x-layout>