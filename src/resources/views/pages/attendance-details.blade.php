<x-app-layout>
    <div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">
        {{-- 見出し --}}
        <h1 class="text-2xl font-bold text-gray-800 mb-6">勤怠詳細</h1>

        {{-- 勤怠詳細情報（静的データ） --}}
        <div class="bg-gray-100 p-6 rounded-lg mb-6">
            <table class="w-full text-left border-collapse">
                <tr>
                    <th class="p-3 border bg-gray-200 text-gray-700">名前</th>
                    <td class="p-3 border">〇〇 太郎</td>
                </tr>
                <tr>
                    <th class="p-3 border bg-gray-200 text-gray-700">日付</th>
                    <td class="p-3 border">2025年3月16日</td>
                </tr>
                <tr>
                    <th class="p-3 border bg-gray-200 text-gray-700">出勤・退勤</th>
                    <td class="p-3 border">08:00 ～ 17:00</td>
                </tr>
                <tr>
                    <th class="p-3 border bg-gray-200 text-gray-700">休憩</th>
                    <td class="p-3 border">12:00 ～ 13:00</td>
                </tr>
                <tr>
                    <th class="p-3 border bg-gray-200 text-gray-700">備考</th>
                    <td class="p-3 border">
                        <textarea class="w-full p-2 border rounded-lg" placeholder="電車遅延などの理由を記入"></textarea>
                    </td>
                </tr>
            </table>
        </div>

        {{-- 修正ボタン（静的） --}}
        <div class="text-center">
            <button class="bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-bold hover:bg-blue-700">
                修正
            </button>
        </div>
    </div>
</x-app-layout>