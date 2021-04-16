<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\models\Comment;


class CommentTest extends TestCase
{
    public function testAll()
    {   
        $expectedNumRows = 200;
        $returnNumRows = Comment::all()->num_rows;

        $this->assertEquals($expectedNumRows, $returnNumRows);

    }

    public function testWhere()
    {
        $expectedResult = new Comment();
        $result = Comment::where('id', '=', 1);

        $this->assertEquals($expectedResult, $result);
    }

    public function testGet()
    {
        $expectedResult = 1;
        $result = Comment::where('id', '=', 5)->get()->num_rows;

        $this->assertEquals($expectedResult, $result);
    }

    public function testFind()
    {
        $expectedResult = 1;
        $result = Comment::find(1)->num_rows;

        $this->assertEquals($expectedResult, $result);
    }

    public function testComments()
    {
        $expectedResult = 1;
        $blogs = new Comment();
        $result = $blogs->blogs(13)->num_rows;

        $this->assertEquals($expectedResult, $result);
    }
}

?>