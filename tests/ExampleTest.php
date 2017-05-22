<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
                ->see('Laravel')->dontSee('wty');
    }


    public function testIndex()
    {
        $this->visit('/test')
                ->click('About Us')
                ->seePageIs('/test/about');
    }

    public function testNewUserRegistration(){
        $this->visit('/test/register')
            ->type('Taylor', 'name')
            ->check('terms')
            ->press('Submit')
            ->seePageIs('/test/register')
            ->see('Success!');
    }


    public function testAbout()
    {
        $this->visit('/test/about')->see('Here we go!');
    }

//    public function testJsonArticle()
//    {
//        $this->post('/api/wechat/article');
//    }

    /**
     * 基本功能测试示例
     *
     * @return void
     */
    public function testJsonArticle()
    {
        $this->post('/api/wechat/article', ['id' => 110])
            ->seeJson([
                'success' => true,
                'status_code' => 200,
                'message' => '',
            ]);

    }
}
