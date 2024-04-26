<x-page title="Изображение">

<x-extendby :href="to_page('fields-file')">
    File
</x-extendby>

<x-p>
    Поле <em>Image</em> является расширением <em>File</em>,
    которое позволяет отобразить превью загруженных изображений.
</x-p>

<x-code language="php">
use MoonShine\Fields\Image; // [tl! focus]

//...

public function fields(): array
{
    return [
        Image::make('Thumbnail') // [tl! focus]
    ];
}

//...
</x-code>

<x-image theme="light" src="{{ asset('screenshots/image.png') }}"></x-image>
<x-image theme="dark" src="{{ asset('screenshots/image_dark.png') }}"></x-image>

</x-page>
