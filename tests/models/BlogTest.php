<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\models\Blog;


class BlogTest extends TestCase
{
    public function testAll()
    {   
        $expectedNumRows = 100;
        $returnNumRows = Blog::all()->num_rows;

        $this->assertEquals($expectedNumRows, $returnNumRows);

    }

    public function testWhere()
    {
        $expectedResult = new Blog();
        $result = Blog::where('id', '=', 1);

        $this->assertEquals($expectedResult, $result);
    }

    public function testGet()
    {
        $expectedResult = 1;
        $result = Blog::where('id', '=', 2)->get()->num_rows;

        $this->assertEquals($expectedResult, $result);
    }

    public function testFind()
    {
        $expectedResult = 1;
        $result = Blog::find(1)->num_rows;

        $this->assertEquals($expectedResult, $result);
    }

    public function testComments()
    {
        $expectedResult = 5;
        $blogs = new Blog();
        $result = $blogs->comments(13)->num_rows;

        $this->assertEquals($expectedResult, $result);
    }
}

?>