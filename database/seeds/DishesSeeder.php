<?php

use Illuminate\Database\Seeder;

use App\Dishes;

class DishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dishes')->truncate();

        /*$products = [
		    [
                "name" => "Footlong Beyond Meatball™ Marinara Sub Combo (1010-2080 Cals)",
                "category_id" => 3,
                "image" => "https://restaurants-static.skipthedishes.com/images/resized/item-6cc498e009d2f9f1a22d.jpg",
                "description" => "The Beyond Meatball™ sub is a saucy classic featuring the tasty plant-based Beyond Meatball™. Includes a footlong sub, chips, or two cookies, and bottled drink.",
                "ingredients" => "meat, tomatoes, lettuce",
                "allergens" => "containes wheat, pickels",
                "nutritional_facts" => "calories: 1010cals, proteins: 30mg, iron: 50g",
                "is_halal" => false,
                "is_vegan" => true,
                "is_glutenfree" => false,
                "price" => 1639,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => null
            ],
            [
                "name" => "Footlong Beyond Meatball™ Sub Combo (890-1490 Cals)",
                "category_id" => 2,
                "image" => "https://restaurants-static.skipthedishes.com/images/resized/item-321f18dff9e3d6d527e5.jpg",
                "description" => "The Beyond Meatball™ sub is a saucy classic featuring the tasty plant-based Beyond Meatball™. Includes a footlong sub, chips, or two cookies, and bottled drink.",
                "ingredients" => "chicken, lettuce, marinara sauce",
                "allergens" => "containes wheat, pickels",
                "nutritional_facts" => "calories: 180mg, proteins: 20mg, iron: 40g",
                "is_halal" => false,
                "is_vegan" => true,
                "is_glutenfree" => true,
                "price" => 1639,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => null
            ],
            [
                "name" => "Footlong Rotisserie-Style Chicken and Bacon Ranch Sub Melt Combo (1090-1640 Cals)",
                "category_id" => 1,
                "image" => "https://restaurants-static.skipthedishes.com/images/resized/item-36910cf296945f9e84a0.jpg",
                "description" => "On the one hand, rotisserie-style chicken. On the other, strips of maple wood smoked bacon. All topped off with a tangy smooth ranch sauce. Each combo includes a Footlong sub, chips or two cookies, and a bottled drink.",
                "ingredients" => "bacon, chicken, maple flavour",
                "allergens" => "containes wheat, pickels",
                "nutritional_facts" => "calories: 180mg, proteins: 20mg, iron: 40g",
                "is_halal" => true,
                "is_vegan" => false,
                "is_glutenfree" => false,
                "price" => 1639,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => null
            ]
        ];*/

        $products = [
            [
                "name" => "Chicken and Rice with White Yogurt Sauce - A Family Feast",
                "category_id" => 3,
                "image" => "/images/dishes/HalalChickenWhiteRice.jpg",
                "description" => "A tasty mediterranean dish compiled with steamed rice, flamed chicken and garnished with white sauce.",
                "ingredients" => "Chicken Thighs, Coriender, Garlic, Lettuce, Onion, Hot Sauce, Lemon Juice, Mayonnaise, Basmati Rice, Cumin ground",
                "allergens" => "Contains wheat(bread), Cumin ground",
                "nutritional_facts" => "Calories: 1130cal, Protein: 3.1g, Fat: 60g, Carbs: 45g, Cholestrol: 5mg",
                "is_halal" => true,
                "is_vegan" => false,
                "is_glutenfree" => false,
                "price" => 1639,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => new DateTime
            ],
            [
                "name" => "One Pot Cheesy Taco Orzot",
                "category_id" => 2,
                "image" => "/images/dishes/CheezyTacoOrzo.jpg",
                "description" => "Orzo is small cut pasta that tastes heavenly in big entrees packed with a lot of proteins and variety of veggies swirled up in a lot of cheese.",
                "ingredients" => "Onion, Garlic, Orzo, Broth, Hot Sauce, Cheese, Veggies, Seasoning, Taco Sauce",
                "allergens" => "Olives, Garlic, Seasoning",
                "nutritional_facts" => "Calories: 950cal, Protein: 4.1g, Fat: 70g, Carbs: 48g, Cholestrol: 6mg",
                "is_halal" => false,
                "is_vegan" => false,
                "is_glutenfree" => true,
                "price" => 1369,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => new DateTime
            ],
            [
                "name" => "Roasted Garlic Butter Parmesan Potatoes",
                "category_id" => 3,
                "image" => "/images/dishes/GarlicParmesanPotatoes.jpg",
                "description" => "These epic roasted potatoes with garlic butter parmesan are crispy and golden on the outside and fluffy on the inside.",
                "ingredients" => "Red Potatoes, Olive Oil, Garlic, Black Petter, Italian Seasoning, Un-salted Butter, Parsley, Bacon",
                "allergens" => "Potatoes, Olive Oil",
                "nutritional_facts" => "Calories: 750cal, Protein: 3.2g, Fat: 50g, Carbs: 26g, Cholestrol: 3mg",
                "is_halal" => false,
                "is_vegan" => true,
                "is_glutenfree" => true,
                "price" => 1369,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => new DateTime
            ],
            [
                "name" => "Lentil Dal and Rice",
                "category_id" => 3,
                "image" => "/images/dishes/LentilDaalRice.jpg",
                "description" => "A spicy and nutritious lentil curry served with rice and corriender.",
                "ingredients" => "Lentils, Coconut Milk, Lemon Juice, Curry Powder, Tamarind, Curry Paste",
                "allergens" => "Tamrind, Seasoning",
                "nutritional_facts" => "Calories: 650cal, Protein: 3.8g, Fat: 50g, Carbs: 26g, Cholestrol: 3mg",
                "is_halal" => false,
                "is_vegan" => true,
                "is_glutenfree" => false,
                "price" => 1599,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => new DateTime
            ],
            [
                "name" => "Pumpkin Pie",
                "category_id" => 4,
                "image" => "/images/dishes/PumpkinPie.jpg",
                "description" => "A sweet gluten-free pumpkin pie made with almond crust and coconut cream based pumpkin custard.",
                "ingredients" => "Pumpkin Puree, Eggs, Maple Syrup, Almond Flour, Baking Soda, Vanilla, Coconut Oil and Cream",
                "allergens" => "Coconut, Pumpkin",
                "nutritional_facts" => "Calories: 900cal, Protein: 2g, Fat: 53g, Carbs: 15g, Cholestrol: 10mg",
                "is_halal" => false,
                "is_vegan" => false,
                "is_glutenfree" => true,
                "price" => 899,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => new DateTime
            ],
            [
                "name" => "Garlic Butter Shrimp",
                "category_id" => 3,
                "image" => "/images/dishes/GarlicButterShrimp.jpg",
                "description" => "Creamy fresh shrimps seasoned with Garlic and Herbs and some italian seasonings.",
                "ingredients" => "Shrimp, Garlic, Lemon, Parsley, Italian Seasoning, Pepper, Salt, Butter",
                "allergens" => "Parsley, Shrimp, Pepper",
                "nutritional_facts" => "Calories: 950cal, Protein: 6g, Fat: 35g, Carbs: 26g, Cholestrol: 5mg",
                "is_halal" => false,
                "is_vegan" => false,
                "is_glutenfree" => true,
                "price" => 1369,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => new DateTime
            ],
            [
                "name" => "Crunchy Taco Cups",
                "category_id" => 1,
                "image" => "/images/dishes/TacoCups.jpg",
                "description" => "Crunchy Tacos Made With Italian Herbs and Seasonings and baked tomatoes, in a muffin tin.",
                "ingredients" => "Meat, Diced Tomatoes, Taco seasoning, Wonton Wrappers, Chedder Cheese",
                "allergens" => "",
                "nutritional_facts" => "Calories: 850cal, Protein: 4g, Fat: 25g, Carbs: 26g, Cholestrol: 5mg",
                "is_halal" => false,
                "is_vegan" => false,
                "is_glutenfree" => false,
                "price" => 1129,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => new DateTime
            ],
            [
                "name" => "Mediterranean Nachos",
                "category_id" => 1,
                "image" => "/images/dishes/MediterraneanNachos.jpg",
                "description" => "Tangy and Tasty Vegetarian Appetizer with Crispy Pita Bread and Hummus.",
                "ingredients" => "Banana Peppers, Chick Peas, Cucumber, Dill, Onion, Hummus, Kalamatta Olives, Greek Yoghurt",
                "allergens" => "Chick Peas, Dill, Kalamatta Olives",
                "nutritional_facts" => "Calories: 557cal, Protein: 2g, Fat: 10g, Carbs: 7g, Cholestrol: 5mg",
                "is_halal" => false,
                "is_vegan" => true,
                "is_glutenfree" => false,
                "price" => 1129,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => new DateTime
            ],
            [
                "name" => "Mini Quiches",
                "category_id" => 1,
                "image" => "/images/dishes/MiniQuiches.jpg",
                "description" => "Salty mini quiches garnished with onions, ham and grated cheese.",
                "ingredients" => "Ham, Onion, Eggs, Puff Pastry, Grated Cheese, Cream",
                "allergens" => "Eggs, Onion, Cheese",
                "nutritional_facts" => "Calories: 950cal, Protein: 6g, Fat: 12g, Carbs: 7g, Cholestrol: 15mg",
                "is_halal" => false,
                "is_vegan" => true,
                "is_glutenfree" => false,
                "price" => 1128,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => new DateTime
            ],
            [
                "name" => "Fresh Peach Margaritas",
                "category_id" => 5,
                "image" => "/images/dishes/PeachMargaritas.jpg",
                "description" => "Fresh peach margaritas with cool peach slices and a shot of tequila.",
                "ingredients" => "Lime, Peaches, Lime Juice, Orange Juice, Tequila",
                "allergens" => "",
                "nutritional_facts" => "Calories: 300cal, Protein: 0g, Fat: 0g, Carbs: 0g, Cholestrol: 0mg",
                "is_halal" => false,
                "is_vegan" => false,
                "is_glutenfree" => false,
                "price" => 1128,
                "is_available" => true,
                "created_at" => new DateTime,
                "updated_at" => new DateTime
            ]
            ];

        DB::table('dishes')->insert($products);
    }
}
