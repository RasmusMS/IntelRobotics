<x-layout>
    <article>
        <h1 class="px-8 pt-8">Vores katalog</h1>
        @foreach (array_chunk($products, 4) as $chunk)
        <div class="px-8 py-3 flex">
            @foreach ($chunk as $add)
            <div class="flex-1 rounded hover:bg-gray-100 border mx-1 relative">
                <img src="/images/{{ $add['image'] ?? 'placeholder-1.jpg' }}" class="mx-auto mb-2 p-1 rounded">
                <div class="px-3 py-2 italic">
                    <h3 class="font-bold">{{ $add['name'] ?? '' }}</h3>
                    <p class="mb-2">{{ $add['bodytext'] ?? '' }}</p>
                </div>
                <div class="px-3 py-2 italic">
                    <a href="/produkt" class="rounded-full bg-blue-500 text-white hover:bg-blue-700 px-2 py-1 my-3">Læs mere</a>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </article>
</x-layout>