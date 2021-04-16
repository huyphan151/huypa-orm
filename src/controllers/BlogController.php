<?php
namespace App\controllers;

use App\models\Blog;
include 'models/Blog.php';


class BlogController
{
    public static function getBlogs()
    {
        $blogs = Blog::all(); 
        return $blogs;
    }

    public function getBlogById()
    {
        $blog = Blog::find(1);
    }

    public function getBlogsByCondition()
    {
        $blogs = Blog::where('id','in','(1,2,3)')->get();
        return $blogs;
    }
}

?>