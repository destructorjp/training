
<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bodys = ['task1','task2','task3'];
        foreach ($bodys as $body) {
          DB::table('todos')->insert([
            'body' => $body,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
          ]);
        }
    }
}
