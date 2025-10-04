<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Промени пакет</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Промени го пакетот</h1>

    <form action="{{ route('travel-packages.update', $travelPackage) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Име на пакетот</label>
            <input type="text" name="package_name" value="{{ old('package_name', $travelPackage->package_name) }}"
                   class="w-full border px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Цена</label>
            <input type="number" name="price" value="{{ old('price', $travelPackage->price) }}"
                   class="w-full border px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Почеток</label>
            <input type="datetime-local" name="start_date" value="{{ old('start_date', $travelPackage->start_date) }}"
                   class="w-full border px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Крај</label>
            <input type="datetime-local" name="end_date" value="{{ old('end_date', $travelPackage->end_date) }}"
                   class="w-full border px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Зачувај промени</button>
    </form>
</div>
</body>
</html>
