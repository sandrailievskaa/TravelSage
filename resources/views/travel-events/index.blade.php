<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Events</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Настани</h1>
    <a href="{{ route('travel-events.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Креирај нов настан</a>

@if(session('success'))
        <p class="text-green-500 mt-4">{{ session('success') }}</p>
    @endif

    <table class="w-full mt-4 border-collapse border border-gray-300">
        <thead>
        <tr class="bg-gray-200">
            <th class="border px-4 py-2">ИД</th>
            <th class="border px-4 py-2">Име на настан</th>
            <th class="border px-4 py-2">Видови</th>
            <th class="border px-4 py-2">Детали</th>
            <th class="border px-4 py-2">Почетен датум</th>
            <th class="border px-4 py-2">Краен датум</th>
            <th class="border px-4 py-2">Акции</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($travelEvents as $event)
            <tr class="border">
                <td class="border px-4 py-2">{{ $event->idnastan }}</td>
                <td class="border px-4 py-2">{{ $event->naziv }}</td>
                <td class="border px-4 py-2">{{ $event->vidovi }}</td>
                <td class="border px-4 py-2">{{ $event->detali }}</td>
                <td class="border px-4 py-2">{{ $event->pochetendatum }}</td>
                <td class="border px-4 py-2">{{ $event->kraendatum }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('travel-events.edit', $event) }}" class="text-blue-500">Измени</a>
                    <form action="{{ route('travel-events.destroy', $event) }}" method="POST" class="inline-block">
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
