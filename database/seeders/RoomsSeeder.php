<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement(
            "INSERT INTO `rooms` (`id`, `created_at`, `updated_at`, `number`, `floor`, `view`, `type`, `handicap_accessible`, `baby_bed`, `price_per_night`, `capacity`, `bed_description`) VALUES
            (1, NULL, NULL, 207, 2, 'Mountain', 'Standard', 0, 1, 150, 2, 'Double bed'),
            (2, NULL, NULL, 208, 2, 'Mountain', 'Standard', 0, 1, 150, 2, 'Double bed'),
            (3, NULL, NULL, 209, 2, 'Mountain', 'Standard', 0, 1, 150, 2, 'Double bed'),
            (4, NULL, NULL, 210, 2, 'Mountain', 'Standard', 0, 1, 150, 2, 'Double bed'),
            (5, NULL, NULL, 211, 2, 'Mountain', 'Standard', 0, 1, 150, 2, 'Double bed'),
            (6, NULL, NULL, 212, 2, 'Mountain', 'Standard', 1, 1, 150, 2, '2 single bed'),
            (7, NULL, NULL, 213, 2, 'Mountain', 'Standard', 0, 1, 200, 4, '1 Double, 2 single bed'),
            (8, NULL, NULL, 214, 2, 'Mountain', 'Standard', 0, 1, 200, 4, '1 Double, 2 single bed'),
            (9, NULL, NULL, 215, 2, 'Mountain', 'Standard', 0, 1, 150, 2, '2 single bed'),
            (10, NULL, NULL, 216, 2, 'Mountain', 'Standard', 1, 1, 150, 2, 'Double bed'),
            (11, NULL, NULL, 217, 2, 'Mountain', 'Standard', 0, 1, 200, 4, '1 Double, 2x1 single bed'),
            (12, NULL, NULL, 218, 2, 'Lake', 'Standard', 0, 1, 200, 2, '2 single  bed'),
            (13, NULL, NULL, 219, 2, 'Lake', 'Standard', 1, 1, 200, 2, 'Double bed'),
            (14, NULL, NULL, 301, 3, 'Lake', 'Standard', 0, 0, 200, 2, '2 single bed'),
            (15, NULL, NULL, 220, 2, 'Lake', 'Luxurious', 0, 1, 250, 4, '1 Double, 2x single bed'),
            (16, NULL, NULL, 302, 3, 'Lake', 'Luxurious', 0, 0, 250, 2, 'Double bed'),
            (17, NULL, NULL, 303, 3, 'Lake', 'Luxurious', 0, 0, 250, 2, 'Double bed'),
            (18, NULL, NULL, 101, 1, 'Standard', 'Economy', 0, 0, 125, 2, '2 single bed'),
            (19, NULL, NULL, 102, 1, 'Standard', 'Economy', 0, 0, 125, 2, '2 Single bed'),
            (20, NULL, NULL, 103, 1, 'Standard', 'Economy', 0, 0, 125, 2, 'Double Bed'),
            (21, NULL, NULL, 104, 1, 'Standard', 'Economy', 0, 0, 125, 2, 'Double bed'),
            (22, NULL, NULL, 105, 1, 'Standard', 'Economy', 0, 1, 125, 2, 'Double bed'),
            (23, NULL, NULL, 106, 1, 'Standard', 'Economy', 0, 1, 125, 2, 'Double bed'),
            (24, NULL, NULL, 107, 1, 'Standard', 'Economy', 0, 1, 125, 4, 'Double Bed'),
            (25, NULL, NULL, 108, 1, 'Standard', 'Economy', 0, 0, 125, 4, 'Double bed');"
        );
    }
}
