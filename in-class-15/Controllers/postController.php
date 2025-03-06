<?php

namespace Controllers\Controllers;

require "Models/postModel.php";

use Controllers\Models\postModel;

class postController
{
    public function index()
    {
        $postModel = new postModel();

        return $postModel -> getAllPosts();
    }
}
