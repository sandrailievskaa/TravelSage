<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Travel Activities</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Креирај нова активност </h1>

    <form action="{{ route('travel-activities.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">Име</label>
            <input type="text" name="imeaktivnost" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Информации</label>
            <input type="text" name="informacii" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Категорија</label>
            <input type="text" name="kategorija" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Износ</label>
            <input type="number" name="iznos" class="w-full border px-4 py-2 rounded">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Додади активност</button>
    </form>

</div>
</body>
</html>
