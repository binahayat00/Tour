<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TourTest extends TestCase
{
    /**
     * Summary of test_index
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/api/tours');
        $response->assertStatus(200);
    }

    /**
     * Summary of test_store
     * @return void
     */
    public function test_store()
    {
        $data = [
            'title' => [
                'en' => 'test',
                'pl' => 'test pl',
            ],
            'description' => [
                'en' => 'test desc',
                'pl' => 'test desc pl',
            ],
            'overview' => [
                'en' => 'test',
                'pl' => 'test pl',
            ],
            'contract' => [
                'en' => 'test contract',
                'pl' => 'test contract pl',
            ],
            'location' => 'Poland',
            'general_price' => 100,
            'custom_price' => '{}',
            'from' => '2022-12-12',
            'to' => '2022-12-12',
            // 'cover'=>'required|file',
            // 'images'=>'required',
            // 'images.*' =>'required',
            'sold_out' => 0,
            'come' => 0,
            'user_id' => 1,
            'bonus' => '{}',
            //'vehicles.*' => '',

        ];
        $response = $this->post('/api/tours', $data);
        $response->assertStatus(200);
    }
}