<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class ConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conditions = [
            [
                'sleepy_scale_rating' => 10,
                'description' => 'Never thrown, no ink, brand new condition'
            ],
            [
                'sleepy_scale_rating' => 9,
                'description' => 'Field tested or used for one or two rounds, many use this for storage wear as well'
            ],
            [
                'sleepy_scale_rating' => 8,
                'description' => 'Lightly used with very minimal wear'
            ],
            [
                'sleepy_scale_rating' => 7,
                'description' => 'Used with some minor dings or scuffs but still in good shape'
            ],
            [
                'sleepy_scale_rating' => 6,
                'description' => 'Typical used disc with the usual dings, scratches but still worthy'
            ],
            [
                'sleepy_scale_rating' => 5,
                'description' => 'Kinda beat, significant wear, has lost a good bit of it’s stability'
            ],
            [
                'sleepy_scale_rating' => 4,
                'description' => 'Beat up turnover disc with some evident war story wear'
            ],
            [
                'sleepy_scale_rating' => 3,
                'description' => '3 or under, beat to hell, dog chew toy'
            ],
        ];

        foreach ($conditions as $condition) {
            Condition::create($condition);
        }
    }
}
