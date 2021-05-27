<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['brand' => '1080 Disc Golf'],
            ['brand' => 'ABC Discs'],
            ['brand' => 'Above Ground Level'],
            ['brand' => 'Aerobie'],
            ['brand' => 'Albatrossdisc'],
            ['brand' => 'Alfa Discs'],
            ['brand' => 'AquaFlight Discs'],
            ['brand' => 'Arsenal Discs'],
            ['brand' => 'Axiom Discs'],
            ['brand' => 'Best Disc Golf Discs'],
            ['brand' => 'Black Zombie Disc Golf'],
            ['brand' => 'CHING Sports'],
            ['brand' => 'Crosslap Disc Golf Parks'],
            ['brand' => 'Daredevil Discs'],
            ['brand' => 'Deity Discs'],
            ['brand' => 'Disc Golf Association'],
            ['brand' => 'Disc Golf UK Ltd.'],
            ['brand' => 'Disc King'],
            ['brand' => 'Discmania'],
            ['brand' => 'Discraft'],
            ['brand' => 'Disctroyer'],
            ['brand' => 'Discwing Ltd'],
            ['brand' => 'Divergent Discs'],
            ['brand' => 'DKG Disc Sports'],
            ['brand' => 'DMI Sports'],
            ['brand' => 'Dynamic Discs'],
            ['brand' => 'Element Discs'],
            ['brand' => 'Elevation Disc Golf'],
            ['brand' => 'EMSCO Group'],
            ['brand' => 'Essential Discs'],
            ['brand' => 'Eurodisc'],
            ['brand' => 'EV-7'],
            ['brand' => 'Ferris State University'],
            ['brand' => 'Fly High Discs'],
            ['brand' => 'FLYTEC'],
            ['brand' => 'Fourth Circle Discs'],
            ['brand' => 'Full Turn Discs'],
            ['brand' => 'Galaxy Disc Golf'],
            ['brand' => 'Gateway Disc Sports'],
            ['brand' => 'Guru Disc Golf'],
            ['brand' => 'Hero Disc'],
            ['brand' => 'Hero Leports Co., Ltd.'],
            ['brand' => 'HOLE19 sarl'],
            ['brand' => 'Hyperflite'],
            ['brand' => 'Infinite Discs'],
            ['brand' => 'Innova Champion Discs'],
            ['brand' => 'Kastaplast'],
            ['brand' => 'Kestrel Outdoors'],
            ['brand' => 'L√∏ft Discs'],
            ['brand' => 'Las Aves Disc Golf'],
            ['brand' => 'Latitude 64'],
            ['brand' => 'Launch Disc Golf'],
            ['brand' => 'LB Sport Loisir'],
            ['brand' => 'Legacy Discs'],
            ['brand' => 'Lightning Discs'],
            ['brand' => 'Lone Star Molding'],
            ['brand' => 'Millennium Golf Discs'],
            ['brand' => 'Mint Discs'],
            ['brand' => 'MVP Disc Sports'],
            ['brand' => 'Newb SimHouse Custom Discs'],
            ['brand' => 'Nordisc'],
            ['brand' => 'Obsidian Discs Oy'],
            ['brand' => 'Ozone Discs'],
            ['brand' => 'Pacific Cycle'],
            ['brand' => 'Paradigm Disc Golf'],
            ['brand' => 'Plastic Addicts'],
            ['brand' => 'Prodigy Disc'],
            ['brand' => 'Prodiscus'],
            ['brand' => 'Quest Applied Technologies'],
            ['brand' => 'Reptilian Disc Golf'],
            ['brand' => 'Rip Disc Golf'],
            ['brand' => 'RPM Discs/Disc Golf Aotearoa'],
            ['brand' => 'Salient Discs'],
            ['brand' => 'Skyiron'],
            ['brand' => 'Skyquest Discs'],
            ['brand' => 'Snap Discsports'],
            ['brand' => 'Sportme'],
            ['brand' => 'Storm Disc Golf'],
            ['brand' => 'Streamline Discs'],
            ['brand' => 'Sune Sport'],
            ['brand' => 'Synergy Discs'],
            ['brand' => 'Thought Space Athletics'],
            ['brand' => 'TOBU Discs'],
            ['brand' => 'Tokyo Discs'],
            ['brand' => 'UB Disc Golf - Hand Candy'],
            ['brand' => 'Vibram Disc Golf'],
            ['brand' => 'Viking Discs'],
            ['brand' => 'Westside Golf Discs'],
            ['brand' => 'Wham-O, Inc.'],
            ['brand' => 'Wild Discs'],
            ['brand' => 'XCOM Discs'],
            ['brand' => 'Yikun Discs'],
        ];
        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}

