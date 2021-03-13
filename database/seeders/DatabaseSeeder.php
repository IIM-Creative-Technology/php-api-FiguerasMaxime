<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Note;
use App\Models\Prof;
use App\Models\Student;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('classes')->truncate();
        DB::table('students')->truncate();
        DB::table('profs')->truncate();
        DB::table('matieres')->truncate();
        DB::table('notes')->truncate();
        DB::table('users')->truncate();

        Classe::factory(5)->create();
        Student::factory(30)->create();
        Prof::factory(10)->create();
        Matiere::factory(15)->create();
        Note::factory(30)->create();
        User::factory(1)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
