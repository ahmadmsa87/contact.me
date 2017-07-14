<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ContactTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
//        Test Main URl and contact page, DB connection. 
        $this->visit('/')
                ->see('Contact us')
                ->seeInDatabase('contacts',['id'=>1,'name'=>'Ahmad Saleh'])
                ;
    }
    
        /**
     * A basic test controller.
     *
     * @return void
     */
    public function testController()
    {
//        Test Contact controller.
  
        $this->post(route('contact_us'))->seeStatusCode(302);
    }
}
