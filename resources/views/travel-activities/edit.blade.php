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
    <h1 class="text-2xl font-bold mb-4">Промени ја активноста</h1>

    <form action="{{ route('travel-activities.update', $travelActivity) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Име</label>
            <input type="text" name="activity_name" value="{{ $travelActivity->activity_name }}"
                   class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Информации</label>
            <input type="text" name="information" value="{{ $travelActivity->information }}"
                   class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Категорија</label>
            <input type="text" name="category" value="{{ $travelActivity->category }}"
                   class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Износ</label>
            <input type="number" name="amount" value="{{ $travelActivity->amount }}"
                   class="w-full border px-4 py-2 rounded">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Зачувај промени</button>
    </form>
</div>
</body>
</html>
