<div class="bg-black text-white py-4 px-6 flex justify-between items-center">
    <div class="flex items-center">
        <img src="{{ asset('images/logo.png') }}" alt="ロゴ" class="h-10 w-auto">
        <!-- <span class="ml-3 text-lg font-bold">ShukkinApp</span> -->
    </div>
    <nav class="flex space-x-4">
        <a href="{{ route('attendance') }}" class="hover:underline">勤怠</a>
        <a href="{{ route('attendance.list') }}" class="hover:underline">勤怠一覧</a>
        <a href="{{ route('stamp_correction_request.list') }}" class="hover:underline">申請</a>
        <a href="{{ route('logout') }}" class="hover:underline">ログアウト</a>
    </nav>
</div>