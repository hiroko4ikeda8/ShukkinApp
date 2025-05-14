<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // `attendances` テーブルのデータを取得
        $attendanceIds = DB::table('attendances')->pluck('id');

        // 出勤データごとに休憩時間を設定（ランチ休憩の想定）
        foreach ($attendanceIds as $attendanceId) {
            DB::table('breaks')->insert([
                'attendance_id' => $attendanceId,
                'break_start' => '12:00:00', // 休憩開始（固定）
                'break_end' => '13:00:00',   // 休憩終了（固定）
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
