<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'dummy_01',
            'description' => 'Test Image',
            'path' => 'static/dummy/',
            'extension' => 'jpg',
            'file_size' => null,
            'height' => null,
            'width' => null,
            'created_at'    => Carbon::now()
        ];
    }
}
