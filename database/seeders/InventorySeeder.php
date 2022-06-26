<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventory::create([
            "name"      => "Pensil FaberCastell 2B",
            "price"     => 2000
        ]);
        Inventory::create([
            "name"      => "Pulpen Joyko Gel 0.5mm",
            "price"     => 3500
        ]);
        Inventory::create([
            "name"      => "Pensil Warna Kenko 12 Colours",
            "price"     => 12000
        ]);
        Inventory::create([
            "name"      => "Penghapus FaberCastell Putih",
            "price"     => 4000
        ]);
    }
}
