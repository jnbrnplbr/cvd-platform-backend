<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name'          => 'Department of Agriculture',
            'description'   => 'Leads policy-making for agriculture, the Department is the government agency responsible for the promotion of agricultural development.',
            'slug'          => 'da',
            'category_id'   => 1, 
        ]);

        Department::create([
            'name'          => 'Department of Agrarian Reform',
            'description'   => 'Leads policy-making for agriculture, the Department is the government agency responsible for the promotion of agricultural development.',
            'slug'          => 'dar',
            'category_id'   => 1, 
        ]);
        Department::create([
            'name'          => 'APO Production Unit Inc.',
            'description'   => 'Leads policy-making for agriculture, the Department is the government agency responsible for the promotion of agricultural development.',
            'slug'          => 'apui',
            'category_id'   => 2 
        ]);
        Department::create([
            'name'          => 'Alicia Water District',
            'description'   => 'Leads policy-making for agriculture, the Department is the government agency responsible for the promotion of agricultural development.',
            'slug'          => 'awd',
            'category_id'   => 3, 
        ]);
        Department::create([
            'name'          => 'City of Pasig, NCR',
            'description'   => 'Leads policy-making for agriculture, the Department is the government agency responsible for the promotion of agricultural development.',
            'slug'          => 'pasig',
            'category_id'   => 1, 
        ]);
    }
}
