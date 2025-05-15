<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // `users` テーブルからユーザーIDを取得
        $userIds = DB::table('users')->pluck('id');

        // `attendances` テーブルから出勤データのIDを取得
        $attendanceIds = DB::table('attendances')->pluck('id');

        // 1ユーザーにつき3件の申請データを生成
        foreach ($userIds as $userId) {
            for ($i = 0; $i < 3; $i++) { // 🔹 申請数を3件に調整！
                DB::table('applications')->insert([
                    'user_id' => $userId,
                    'attendance_id' => $attendanceIds->random(), // ランダムな出勤データに紐付け
                    'remarks' => '遅延のため', //  統一
                    'status' => 'pending', //  申請は全て承認待ちの状態にする！
                    'application_date' => now()->subDays(rand(0, 30))->toDateString(), // 申請日を過去30日以内に設定
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
