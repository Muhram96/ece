<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>
<div class="max-w-7xl mx-auto my-24 px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @if(isset($gallery) && count($gallery) > 0)
            @foreach ($gallery as $image)
                <div class="rounded-lg overflow-hidden">
                    <img
                        src="{{ asset($image->image) }}"
                        alt="Gallery image"
                        class="h-auto w-full object-cover"
                        style="height: 300px;"
                    />
                </div>
            @endforeach
        @else
            <p class="text-center">No Gallery Images found.</p>
        @endif
    </div>
</div>
</body>
</html>
