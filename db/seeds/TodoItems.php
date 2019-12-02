<?php


use Phinx\Seed\AbstractSeed;

class TodoItems extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Get bread',
                'description' => 'Need to ge bread for dinner',
                'done' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Study Web Applications',
                'description' => 'Need to study REST api\'s in Slim framework',
                'done' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Feed the cat',
                'description' => 'cat needs food',
                'done' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Watch Rick and Morty',
                'description' => 'New season is out! woot!',
                'done' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'Wake up today',
                'description' => 'First things first',
                'done' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        $users = $this->table('todo_items');
        $users->insert($data)
              ->save();
    }
}
