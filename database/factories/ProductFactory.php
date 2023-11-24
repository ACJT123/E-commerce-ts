<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Chairs', 'Couches', 'Beds', 'Desks', 'Wardrobes'];
        $materials = ['Wood', 'Metal', 'Leather', 'Fabric', 'Glass'];
        $colors = ['Brown', 'Black', 'White', 'Gray', 'Red'];
        $dimensions = ['60" x 30" x 40"', '48" x 24" x 36"', '72" x 36" x 30"', '40" x 40" x 18"', '90" x 42" x 30"'];
        $styles = ['Modern', 'Traditional', 'Contemporary', 'Industrial', 'Rustic'];

        $name = $this->faker->unique()->word;
        $name = ucfirst($name); // Capitalize the first letter

        $imageLinks = ['https://i.ibb.co/kHR6XKw/WILMA-DINING-CHAIR-NATURAL-1-1140x475.jpg',
            'https://i.ibb.co/994gxkf/TRACY-DINING-CHAIR-WALNUT-1-1140x475.jpg',
            'https://www.joyd.my/image/cache/catalog/product%20images/Additional%20Images/ND/LILIA%20DINING%20TABLE%2004-1140x475.jpg',
            'https://www.joyd.my/image/cache/catalog/product%20images/Additional%20Images/CLEARANCE%20ITEM%202023/ALTO%203%20SEATER%20SOFA%20CHESTNUT%2001-1140x475.jpg',
            'https://www.joyd.my/image/cache/catalog/product%20images/Additional%20Images/CLEARANCE%20ITEM%202023/ALTO%201%20SEATER%20SOFA%20BLACK%2001-1140x475.jpg',
            'https://www.joyd.my/image/cache/catalog/product%20images/Additional%20Images/SF/DELRAY%20DINING%20CHAIR%20NATURAL%201-1140x475.jpg',
            'https://www.joyd.my/image/cache/catalog/product%20images/Additional%20Images/MONZEN/RUAI%20TALL%20SIDEBOARD-1140x475.jpg',
            'https://www.joyd.my/image/cache/catalog/product%20images/Additional%20Images/MAVIS/SCOTT%20L-SHAPE%20SOFA%20OWEN20%20FABRIC%2000-1140x475.jpg',
            'https://www.joyd.my/image/cache/catalog/product%20images/Additional%20Images/HINLIM/KEVA%20BED%20SIDE%20TABLE%20NATURAL%2000-1140x475.jpg',
            'https://www.joyd.my/image/cache/catalog/product%20images/Additional%20Images/RUDI/AERE%20L%20COFFEE%20TABLE%20BLACK%201-1-1140x475.jpg',
        ];

        // Generate a longer description with multiple paragraphs
        $description = $this->faker->paragraphs($nb = 3, $asText = true); // 3 paragraphs

        return [
            'name' => $name,
            'category' => $this->faker->randomElement($categories),
            'description' => $description,
            'quantity' => $this->faker->numberBetween(1, 10),
            'material' => $this->faker->randomElement($materials),
            'color' => $this->faker->randomElement($colors),
            'dimensions' => $this->faker->randomElement($dimensions),
            'style' => $this->faker->randomElement($styles),
            'image_link' => $this->faker->randomElement($imageLinks),
            'price' => $this->faker->randomFloat(2, 50, 1000), // Adjust the price range as needed
        ];
    }
}


