<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Noise Cancelling Pro Headphones',
            'brand' => 'Auraudio',
            'category' => 'Electronics',
            'price' => 249.99,
            'originalPrice' => 299.99,
            'rating' => 4.8,
            'reviewsCount' => 128,
            'stockCount' => 142,
            'inStock' => true,
            'isSale' => true,
            'sku' => 'HW-ANC-882',
            'status' => 'Active',
            'colors' => [
                ['name' => 'Obsidian Black', 'value' => '#1a1a1a'],
                ['name' => 'Arctic White', 'value' => '#e8e8e8']
            ],
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAEU4_bWfiaH1aJ0inbpUucyfdq6o5ys5iFJ6GQW5tX0bHlhQMPIq_aqQSeB-nLkidGXPc1GzZngBUk5Yw_xrAprLP11EnrS_R3FLq5KmLfyxLdllKwmlXw5lKWBWzLerMEIkGDlqHv15YaH2MHtTAT2zUra1e_1HjE2VHbVSo5ucwMFoSdsGZRACfqoCocTnjz59CNQXk0R1bik2saWM84DZmbQVLuKY05CzluROX8uexDRhAokjFN',
            'galleryImages' => [
                'https://lh3.googleusercontent.com/aida-public/AB6AXuAEU4_bWfiaH1aJ0inbpUucyfdq6o5ys5iFJ6GQW5tX0bHlhQMPIq_aqQSeB-nLkidGXPc1GzZngBUk5Yw_xrAprLP11EnrS_R3FLq5KmLfyxLdllKwmlXw5lKWBWzLerMEIkGDlqHv15YaH2MHtTAT2zUra1e_1HjE2VHbVSo5ucwMFoSdsGZRACfqoCocTnjz59CNQXk0R1bik2saWM84DZmbQVLuKY05CzluROX8uexDRhAokjFN'
            ],
            'description' => 'Immerse yourself in pure clarity with industry-leading active noise cancellation.',
        ]);

        Product::create([
            'name' => 'Quantum Smartwatch Series 5',
            'brand' => 'NexusTech',
            'category' => 'Electronics',
            'price' => 199.00,
            'rating' => 4.5,
            'reviewsCount' => 84,
            'stockCount' => 65,
            'inStock' => true,
            'sku' => 'NT-SMC-501',
            'status' => 'Active',
            'colors' => [
                ['name' => 'Matte Black', 'value' => '#222222']
            ],
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDQWUQdGhwq5TC-Wu_-eSc9LkEgRVidruPp3S2rp7Jg1aecKgly8BgKSIu0EyU3oq9Bz28Rf7ziTwLDmLRgbRzgsNHFQTee3UJZlQswOzr2sfBwXHgwDtIxWXqICZtIw-n5KjUowr3s3BV78wOf1aQgw3F79liFG3OU-VkUMGFOgsZpDNbovgEmHLadwh0I8uGWoXbTMUV8VIq2wspXUbLkn_8EBq6_AxH4fcgugnANrIqpekIVzx07',
            'galleryImages' => [
                'https://lh3.googleusercontent.com/aida-public/AB6AXuDQWUQdGhwq5TC-Wu_-eSc9LkEgRVidruPp3S2rp7Jg1aecKgly8BgKSIu0EyU3oq9Bz28Rf7ziTwLDmLRgbRzgsNHFQTee3UJZlQswOzr2sfBwXHgwDtIxWXqICZtIw-n5KjUowr3s3BV78wOf1aQgw3F79liFG3OU-VkUMGFOgsZpDNbovgEmHLadwh0I8uGWoXbTMUV8VIq2wspXUbLkn_8EBq6_AxH4fcgugnANrIqpekIVzx07'
            ],
            'description' => 'Track your health metrics in real-time with continuous ECG monitoring.',
        ]);
    }
}
