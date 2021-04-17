<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::create([
            'title'     => 'SQL Injection',
            'description'   => 'Blablah',
            'status'        => 'pending',
            'agency_id'     => 1,
            'user_id'       => 1
        ]);
        Report::create([
            'title'     => 'Unrestricted File Upload',
            'description'   => 'Unrestricted File Upload Blablah',
            'status'        => 'pending',
            'agency_id'     => 1,
            'user_id'       => 1
        ]);
        Report::create([
            'title'     => 'Session Hacking',
            'description'   => 'Session Hacking Blablah',
            'status'        => 'pending',
            'agency_id'     => 2,
            'user_id'       => 1
        ]);
        Report::create([
            'title'     => 'DNS Spoofing',
            'description'   => 'Blablah',
            'status'        => 'resolved',
            'agency_id'     => 3,
            'user_id'       => 3
        ]);
        Report::create([
            'title'     => 'Cross Site Scripting',
            'description'   => 'Blablah',
            'status'        => 'pending',
            'agency_id'     => 1,
            'user_id'       => 2
        ]);
        Report::create([
            'title'     => 'SQL Injection',
            'description'   => 'Blablah',
            'status'        => 'pending',
            'agency_id'     => 2,
            'user_id'       => 1
        ]);
        Report::create([
            'title'     => 'Unrestricted File Upload',
            'description'   => 'Unrestricted File Upload Blablah',
            'status'        => 'pending',
            'agency_id'     => 4,
            'user_id'       => 1
        ]);
        Report::create([
            'title'     => 'Session Hacking',
            'description'   => 'Session Hacking Blablah',
            'status'        => 'pending',
            'agency_id'     => 3,
            'user_id'       => 2
        ]);
        Report::create([
            'title'     => 'DNS Spoofing',
            'description'   => 'Blablah',
            'status'        => 'resolved',
            'agency_id'     => 4,
            'user_id'       => 3
        ]);
        Report::create([
            'title'     => 'Cross Site Scripting',
            'description'   => 'Blablah',
            'status'        => 'pending',
            'agency_id'     => 5,
            'user_id'       => 2
        ]);
    }
}
