<?php

use Illuminate\Database\Seeder;
use App\Worker;

class WorkerSeeder extends Seeder
{
    public function run()
    {
        factory(Worker::class, 50) -> create();
    }
}