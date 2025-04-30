<?php
// index.php
?>

<!DOCTYPE html>
<html lang="kk">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>QADAM HISTORY</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-b from-yellow-50 to-white min-h-screen font-sans">

  <!-- Header -->
  <header class="bg-yellow-100 shadow-md p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-bold text-yellow-800">📜 QADAM HISTORY</h1>
      <a href="login.php" class="bg-yellow-700 text-white px-4 py-2 rounded hover:bg-yellow-800">Кіру</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="container mx-auto mt-12 text-center px-4">
    <h2 class="text-4xl font-semibold text-yellow-900 mb-4">Тарихпен саяхатқа бірге шығайық</h2>
    <p class="text-lg text-gray-700 max-w-2xl mx-auto">
      QADAM HISTORY — бұл оқушыларға арналған интерактивті платформа. Мұнда сіз бейнесабақтар көріп, тапсырмалар орындап, тест тапсырып, өз рейтингіңізді қадағалай аласыз.
    </p>
    <img 
      src="assets/images/historical_map_world.png" 
      alt="Historical map" 
      class="mx-auto mt-8 rounded shadow-md w-full max-w-3xl" />
  </section>

  <!-- Footer -->
  <footer class="mt-16 py-4 bg-yellow-100 text-center text-gray-700">
    © 2025 QADAM HISTORY. Барлық құқықтар қорғалған.
  </footer>

</body>
</html>
