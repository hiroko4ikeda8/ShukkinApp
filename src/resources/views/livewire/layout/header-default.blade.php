<div class="bg-black text-white py-4 px-6 flex justify-between items-center">
    <div class="flex items-center">
        <img src="{{ asset('images/logo.png') }}" alt="ロゴ" class="h-10 w-auto">
        <span class="ml-3 text-lg font-bold">ShukkinApp</span>
    </div>
    <nav class="flex space-x-4">
        <a href="{{ route('home') }}" class="hover:underline">ホーム</a>
        <a href="{{ route('register') }}" class="hover:underline">登録</a>
        <a href="{{ route('login') }}" class="hover:underline">ログイン</a>
    </nav>
</div>