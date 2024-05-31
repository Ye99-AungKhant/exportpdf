<x-pdf-layout>
    <h1>{{ $title }}</h1>
    @foreach ($data as $item)
        <p>{{ $item->name }}</p>
    @endforeach

    <p class="cursive">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, vero?
    </p>

    <div class="page-break"></div>

    <h1>Page 2</h1>
</x-pdf-layout>
