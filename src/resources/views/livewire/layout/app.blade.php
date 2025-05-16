<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ShukkinApp - Livewire Layout</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div class="container mx-auto px-4 py-6">
        {{ $slot }} <!-- ✅ Livewireのビューがここに挿入される -->
    </div>
    @livewireScripts
</body>
</html>