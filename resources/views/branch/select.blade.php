<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Cabang</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Pastikan ini ada -->
    @vite(['resources/css/app.css'])    
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-center text-xl font-bold mb-4">Pilih Cabang</h2>
        <form method="POST" action="{{ route('branch.store') }}">
            @csrf
            <div class="grid grid-cols-3 gap-4">
                <button type="submit" name="branch" value="cabang1" class="bg-blue-500 text-white py-2 px-4 rounded">Cabang 1</button>
                <button type="submit" name="branch" value="cabang2" class="bg-green-500 text-white py-2 px-4 rounded">Cabang 2</button>
                <button type="submit" name="branch" value="cabang3" class="bg-red-500 text-white py-2 px-4 rounded">Cabang 3</button>
            </div>
        </form>
    </div>
</body>
</html>
