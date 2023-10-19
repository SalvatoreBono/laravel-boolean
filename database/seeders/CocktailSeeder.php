<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktails = [
            [
                "name" => "Mojito",
                "alcoholic" => true,
                "description" => "A classic cocktail that originated in Cuba, the mojito is a favorite summertime beverage worldwide. The mint and lime give it a cool, refreshing flavor, and the soda lightens it up with a fizzy crispness. There are many ways that you can switch up the flavor of the basic recipe, which makes it a fun cocktail to share with friends.",
                "imageURL" => "https://www.giallozafferano.it/images/5-570/Mojito_450x300.jpg"
            ],
            [
                "name" => "Gin-Tonic",
                "alcoholic" => true,
                "description" => "A classic cocktail that originated in Cuba, the mojito is a favorite summertime beverage worldwide. The mint and lime give it a cool, refreshing flavor, and the soda lightens it up with a fizzy crispness. There are many ways that you can switch up the flavor of the basic recipe, which makes it a fun cocktail to share with friends.",
                "imageURL" => "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2021/06/gin-tonic/_jcr_content/header-par/image-single.img.jpg/1624435073277.jpg"
            ],
            [
                "name" => "Virgin-Mojito",
                "alcoholic" => false,
                "description" => "A classic cocktail that originated in Cuba, the mojito is a favorite summertime beverage worldwide. The mint and lime give it a cool, refreshing flavor, and the soda lightens it up with a fizzy crispness. There are many ways that you can switch up the flavor of the basic recipe, which makes it a fun cocktail to share with friends.",
                "imageURL" => "https://40aprons.com/wp-content/uploads/2021/04/virgin-mojito-3.jpg"
            ],
            [
                "name" => "Spritz",
                "alcoholic" => true,
                "description" => "A classic cocktail that originated in Cuba, the mojito is a favorite summertime beverage worldwide. The mint and lime give it a cool, refreshing flavor, and the soda lightens it up with a fizzy crispness. There are many ways that you can switch up the flavor of the basic recipe, which makes it a fun cocktail to share with friends.",
                "imageURL" => "https://www.giallozafferano.it/images/218-21853/Spritz_450x300_sp.jpg"
            ]
            ];
            
        foreach ($cocktails as $cocktail) {
            $newCocktail = new Cocktail();
            
            $newCocktail->name = $cocktail["name"];
            $newCocktail->alcoholic = $cocktail["alcoholic"];
            $newCocktail->description = $cocktail["description"];
            $newCocktail->imageURL = $cocktail["imageURL"];
            $newCocktail->save();
        };
    }
}
