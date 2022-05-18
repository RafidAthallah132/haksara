<?php

use Illuminate\Database\Seeder;

class QuestionTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
        	[
        	    'title' => 'Carakan Level 1'],
            [
        	    'title' => 'Carakan Level 2'],
            [
        	    'title' => 'Aksara Angka'],
            [
        	    'title' => 'Aksara Murda'],
            [
        	    'title' => 'Sandhangan Level 1'],
            [
                'title' => 'Sandhangan Level 2'],
            [
                'title' => 'Aksara Rekan'],
            [
                'title' => 'Pasangan Level 1'],
            [
                'title' => 'Pasangan Level 2'],
        ]);

    }
}
