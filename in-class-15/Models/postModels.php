<?php

namespace Controllers\Models;

class postModel
{
    public function getAllPosts()
    {
        $posts = [
            [
                'title' => 'First Post',
                'description' => 'This is the first post.',
                'user-id' => '1',
            ],
            [
                'title' => 'Second Post',
                'description' => 'This is the second post.',
                'user-id' => '2',

            ],
            [
                'title' => 'Third Post',
                'description' => 'This is the third post.',
                'user-id' => '3',
            ],
        ];
        return $posts;
    }
}
