<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\User;
use Illuminate\Support\Facades\DB;
use app\Models\berita;
use app\Models\kategori;
use app\Models\produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Admin Karya Kencana',
            'email' => 'adminKKencana@gmail.com',
            'password' => 'ad101dk01k10k1031',
        ]);
    }
}
