<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculties Profile</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 mt-0">
<div class="p-4 lg:p-8 bg-white border-b border-gray-200 mt-0">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-medium text-gray-900">
            Faculties Profile
        </h1>
        <a href="{{ route('faculty-create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Add New
        </a>
    </div>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    <p class="mt-6 text-gray-500 leading-relaxed">
        Manage Faculties profile.
    </p>
</div>

<div class="container mx-auto mt-0">
    <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
        <table class="min-w-full bg-white border-collapse table-auto">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Name</th>
                <th class="py-3 px-6 text-left">Design</th>
                <th class="py-3 px-6 text-left">Email</th>
                <th class="py-3 px-6 text-left">Details</th>
                <th class="py-3 px-6 text-left">Image</th>
                <th class="py-3 px-6 text-left">Group</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            @foreach ($data as $pro)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $pro->name }}</td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $pro->design }}</td>
                    <td class="py-3 px-6 text-left">{{ $pro->email }}</td>
                    <td class="py-3 px-6 text-left">{{ $pro->detail }}</td>
                    <td class="py-3 px-6 text-left">{{ $pro->image }}</td>
                    <td class="py-3 px-6 text-left">{{ $pro->group }}</td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <!-- Edit Button -->
                            <a href="{{ route('profile-edit', ['id' => $pro->id]) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>

                            <!-- Delete Form -->
                            <form action="{{ route('profile-delete', ['id' => $pro->id]) }}" method="POST">
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

