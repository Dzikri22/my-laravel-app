<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Clone - Member</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #141414; }
        .movie-card:hover { transform: scale(1.05); transition: 0.3s; }
    </style>
</head>
<body class="text-white font-sans">

    <nav class="p-6 flex justify-between items-center bg-black">
        <h1 class="text-red-600 text-3xl font-bold">NETFLIX</h1>
        <div class="space-x-4">
            <a href="#" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">Movies</a>
            <a href="#" class="bg-red-600 px-4 py-2 rounded">Logout</a>
        </div>
    </nav>

    <div class="px-10 py-8">
        <h2 class="text-2xl font-semibold mb-6">Popular on Netflix</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @forelse($movies as $movie)
                <div class="movie-card relative group cursor-pointer">
                    <img 
                        src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" 
                        alt="{{ $movie['title'] }}" 
                        class="rounded-md shadow-lg"
                    >
                    
                    <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex flex-col justify-end p-4 transition-opacity rounded-md">
                        <h3 class="font-bold text-sm">{{ $movie['title'] }}</h3>
                        <p class="text-xs text-yellow-400 mt-1">⭐ {{ $movie['vote_average'] }}</p>
                        <p class="text-[10px] text-gray-300 mt-2 line-clamp-3">
                            {{ $movie['overview'] }}
                        </p>
                    </div>
                </div>
            @empty
                <p class="col-span-full text-center text-gray-500">Tidak ada film ditemukan.</p>
            @endforelse
        </div>
    </div>

</body>
</html>