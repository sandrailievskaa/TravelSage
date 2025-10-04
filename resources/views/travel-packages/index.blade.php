<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пакети</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Пакети</h1>
    <a href="{{ route('travel-packages.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Креирај
        нов пакет</a>

    @if(session('success'))
        <p class="text-green-500 mt-4">{{ session('success') }}</p>
    @endif

    <table class="w-full mt-4 border-collapse border border-gray-300">
        <thead>
        <tr class="bg-gray-200">
            <th class="border px-4 py-2">ИД</th>
            <th class="border px-4 py-2">Име на пакет</th>
            <th class="border px-4 py-2">Цена</th>
            <th class="border px-4 py-2">Почеток</th>
            <th class="border px-4 py-2">Крај</th>
            <th class="border px-4 py-2">Акции</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($travelPackages as $package)
            <tr class="border">
                <td class="border px-4 py-2">{{ $package->id_package }}</td>
                <td class="border px-4 py-2">{{ $package->package_name }}</td>
                <td class="border px-4 py-2">{{ $package->price }}</td>
                <td class="border px-4 py-2">{{ $package->start_date }}</td>
                <td class="border px-4 py-2">{{ $package->end_date }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('travel-packages.edit', $package) }}" class="text-blue-500">Измени</a>
                    <form action="{{ route('travel-packages.destroy', $package) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-2">Избриши</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
