<?php

namespace Database\Seeders;

use App\Models\Agency;
use Illuminate\Database\Seeder;

class AgencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create([
            'name'      => 'Agricultural Credit Policy Council',
            'description'   => 'The ACPC is a pioneering reformist mandated to pursue innovations in rural and agricultural finance.',
            'policy'        => "A federal mandate for annualized case rate packages, would require all insurance companies to provide infertility treatment.  Local provider communities would decide on specific treatment algorithms and base their one-year case rates of unlimited services on these algorithms.  Patients would receive treatment at designated centers. Supported by infertility interest groups such as RESOLVE and many women’s groups.",
            'slug'          => 'acpc',
            'department_id'    => 1
        ]);

        Agency::create([
            'name'      => 'Agricultural Training Institure',
            'description'   => 'The ACPC is a pioneering reformist mandated to pursue innovations in rural and agricultural finance.',
            'policy'        => "A federal mandate for annualized case rate packages, would require all insurance companies to provide infertility treatment.  Local provider communities would decide on specific treatment algorithms and base their one-year case rates of unlimited services on these algorithms.  Patients would receive treatment at designated centers. Supported by infertility interest groups such as RESOLVE and many women’s groups.",
            'slug'          => 'ati',
            'department_id'    => 1
        ]);

        Agency::create([
            'name'      => 'Department_id of Agrarian Reform',
            'description'   => 'The ACPC is a pioneering reformist mandated to pursue innovations in rural and agricultural finance.',
            'policy'        => "A federal mandate for annualized case rate packages, would require all insurance companies to provide infertility treatment.  Local provider communities would decide on specific treatment algorithms and base their one-year case rates of unlimited services on these algorithms.  Patients would receive treatment at designated centers. Supported by infertility interest groups such as RESOLVE and many women’s groups.",
            'slug'          => 'dar',
            'department_id'    => 1
        ]);

        Agency::create([
            'name'      => 'Abra State Institute of Science and Technology',
            'description'   => 'The only state college in the province of Abra that provides technological, professional, technical and vocational education..',
            'policy'        => "A federal mandate for annualized case rate packages, would require all insurance companies to provide infertility treatment.  Local provider communities would decide on specific treatment algorithms and base their one-year case rates of unlimited services on these algorithms.  Patients would receive treatment at designated centers. Supported by infertility interest groups such as RESOLVE and many women’s groups.",
            'slug'          => 'asist',
            'department_id'    => 2
        ]);

        Agency::create([
            'name'      => 'Agusan del Sur State College of Agriculture and Technology',
            'description'   => 'The College primarily provide higher professional, technical and special instructions',
            'policy'        => "A federal mandate for annualized case rate packages, would require all insurance companies to provide infertility treatment.  Local provider communities would decide on specific treatment algorithms and base their one-year case rates of unlimited services on these algorithms.  Patients would receive treatment at designated centers. Supported by infertility interest groups such as RESOLVE and many women’s groups.",
            'slug'          => 'asscat',
            'department_id'    => 3
        ]);
    }
}
