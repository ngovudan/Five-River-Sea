<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $data = [
            'user'=>'Quang',
            'password'=>bcrypt('321'),
            'hoten'=>'Trần Gia Hưng',
            'diachi'=>'382',
            'lienhe'=>'hungtgps08690@fpt.edu.vn',
            'ngaythamgia'=>new Datetime(),
            'capbac'=>'Quản trị viên',
            'thanhpho'=>'TP.HCM',
        ];
        DB::table('tbluser')->insert($data);
    }
}
