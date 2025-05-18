<x-app-layout>
    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        {{-- 見出し --}}
        <h1 class="text-2xl font-bold text-gray-800 mb-4">勤怠一覧</h1>

        {{-- 月選択コンテナ --}}
        <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg mb-6">
            <button class="text-blue-600 font-semibold hover:underline">前月</button>
            <span class="text-lg font-medium text-gray-700">2025年3月</span>
            <button class="text-blue-600 font-semibold hover:underline">翌月</button>
        </div>

        {{-- 勤怠データテーブル --}}
        <div class="overflow-x-auto bg-gray-50 p-4 rounded-lg">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="p-3 border">日付</th>
                        <th class="p-3 border">出勤</th>
                        <th class="p-3 border">退勤</th>
                        <th class="p-3 border">休憩</th>
                        <th class="p-3 border">合計</th>
                        <th class="p-3 border">詳細</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- データがある場合は動的に表示 --}}
                    @foreach ($attendances as $attendance)
                        <tr class="border-t">
                            <td class="p-3">{{ $attendance->attendance_date }}</td>
                            <td class="p-3">{{ $attendance->clock_in }}</td>
                            <td class="p-3">{{ $attendance->clock_out }}</td>
                            <td class="p-3">{{ $attendance->break_time }}</td>
                            <td class="p-3">{{ $attendance->total_work_time }}</td>
                            <td class="p-3 text-blue-600 font-semibold hover:underline">
                                <a href="{{ route('attendance.details', ['id' => $attendance->id]) }}">詳細</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>