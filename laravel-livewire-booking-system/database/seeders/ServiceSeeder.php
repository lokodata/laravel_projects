<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Carbon\Carbon;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'id' => 1,
            'title' => 'Basic Haircut',
            'slug' => 'basic-haircut',
            'duration' => 30,
            'price' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Service::create([
            'id' => 2,
            'title' => 'Deluxe Haircut',
            'slug' => 'deluxe-haircut',
            'duration' => 45,
            'price' => 200,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Service::create([
            'id' => 3,
            'title' => 'Beard Trim',
            'slug' => 'beard-trim',
            'duration' => 15,
            'price' => 70,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Service::create([
            'id' => 4,
            'title' => 'Haircut & Beard Trim',
            'slug' => 'haircut-beard-trim',
            'duration' => 60,
            'price' => 170,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Service::create([
            'id' => 5,
            'title' => 'Kids Haircut',
            'slug' => 'kids-haircut',
            'duration' => 25,
            'price' => 70,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
