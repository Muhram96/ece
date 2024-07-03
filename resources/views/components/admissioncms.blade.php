<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Messages</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 mt-0">
<div class="p-4 lg:p-8 bg-white border-b border-gray-200 mt-0">
    <h1 class="mt-8 text-2xl font-medium text-gray-900">
       Users Management
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Manage Admission Users
    </p>
</div>

<div class="container mx-auto mt-0">
    <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
        <table class="min-w-full bg-white border-collapse table-auto">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Name</th>
                <th class="py-3 px-6 text-left">Phone</th>
                <th class="py-3 px-6 text-left">Email</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            @foreach ($data as $adm)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $adm->name }}</td>
                    <td class="py-3 px-6 text-left">{{ $adm->phone }}</td>
                    <td class="py-3 px-6 text-left">{{ $adm->email }}</td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            {{--<!-- Edit Button -->
                            <a href="{{ route('contact-edit', ['id' => $contact->id]) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>

                            --}}<!-- Delete Form -->
                            <form action="{{ route('adm-delete', ['id' => $adm->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
            {{ $data->links() }}
        </div>
    </div>
</div>
</body>
</html>

