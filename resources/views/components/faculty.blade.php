<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <!-- from node_modules -->
    <!-- <script src="node_modules/@material-tailwind/html/scripts/collapse.js"></script> -->

    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <title>Document</title>
</head>
<body>
<div class="max-w-[1450px] mx-auto my-10 space-y-8 px-5">
    <h1 class="text-2xl font-bold text-center">Our Faculty</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div
            class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-full lg:w-96"
        >
            <div
                class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white shadow-lg bg-clip-border w-auto rounded-xl h-80"
            >
                <img
                    src="https://docs.material-tailwind.com/img/team-3.jpg"
                    alt="profile-picture"
                />
            </div>
            <div class="p-6 text-center">
                <h4
                    class="block mb-2 font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                >
                    Natalie Paisley
                </h4>
                <p
                    class="block font-sans text-base antialiased font-medium leading-relaxed text-black"
                >
                    Assistant Professor
                </p>
                <a
                    href="#"
                    class="block font-sans text-base antialiased font-medium leading-relaxed text-green-600"
                >
                    website
                </a>
                <p
                    class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-600"
                >
                    01333-44837371
                </p>

            </div>
        </div>
    </div>
</div>
</body>
</html>
