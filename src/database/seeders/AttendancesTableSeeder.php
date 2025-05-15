<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 6人のユーザーのIDを取得（全員分）
        $userIds = DB::table('users')->pluck('id');

        // 今日の日付を基準に、過去180日分の出勤データを生成
        $days = 180;
        foreach ($userIds as $userId) {
            for ($i = 0; $i < $days; $i++) {
                DB::table('attendances')->insert([
                    'user_id' => $userId,
                    'clock_in' => '09:00:00', // 出勤時間（固定）
                    'clock_out' => '18:00:00', // 退勤時間（固定）
                    'status' => '勤務中', // 勤務ステータス（例）
                    'attendance_date' => now()->subDays($i)->toDateString(), // 日付を過去180日に遡る
                    'total_work_time' => 540, // 勤務時間（分単位: 9時間）
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
