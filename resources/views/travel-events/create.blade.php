<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Travel Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Креирај нов настан</h1>

    <form action="{{ route('travel-events.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">Име</label>
            <input type="text" name="event_name" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Тип</label>
            <input type="text" name="event_type" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Детали</label>
            <textarea name="details" class="w-full border px-4 py-2 rounded"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Почетен датум</label>
            <input type="date" name="start_date" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Краен датум</label>
            <input type="date" name="end_date" class="w-full border px-4 py-2 rounded">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Додади настан</button>
    </form>

</div>
</body>
</html>
