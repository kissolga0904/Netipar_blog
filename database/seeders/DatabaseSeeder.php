<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
        User::truncate();
        Category::truncate();
        Post::truncate();
        //only for local environment:
        */

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);
        Post::factory(5)->create([
            'user_id' => $user ->id
        ]);


        /*
        $user = User::factory()->create();

        $personal  = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'Apple Pie',
            'slug' => 'apple-pie',
            'excerpt' => '<p>In this post you can learn how to make a delicious apple pie.</p>',
            'body' => '<p>Preheat oven to 375°. On a lightly floured surface, roll half of the dough to a 1/8-in.-thick circle; transfer to a 9-in. pie plate. In a small bowl, combine sugars, flour and spices. In a large bowl, toss apples with lemon juice. Add sugar mixture; toss to coat. Add filling; dot with butter.
            Roll remaining dough to a 1/8-in.-thick circle. Place over filling. Trim, seal and flute edge. Cut slits in top. Beat egg white until foamy; brush over crust. If desired, sprinkle with turbinado sugar and ground cinnamon. Cover edge loosely with foil.
            Bake 25 minutes. Remove foil; bake until crust is golden brown and filling is bubbly, 20-25 minutes longer. Cool on a wire rack. If desired, serve with ice cream and caramel sauce.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'How to make pancakes?',
            'slug' => 'how-to-make-pancakes',
            'excerpt' => '<p>In this post you can learn how to make a delicious pancakes.</p>',
            'body' => '<p>Put 100g plain flour, 2 large eggs, 300ml milk, 1 tbsp sunflower or vegetable oil and a pinch of salt into a bowl or large jug, then whisk to a smooth batter.
             Set aside for 30 mins to rest if you have time, or start cooking straight away.
             Set a medium frying pan or crêpe pan over a medium heat and carefully wipe it with some oiled kitchen paper.
             When hot, cook your pancakes for 1 min on each side until golden, keeping them warm in a low oven as you go.
             Serve with lemon wedges and caster sugar, or your favourite filling.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'Authentic Italian Tiramisu recipe',
            'slug' => 'authentic-italian-tiramisu',
            'excerpt' => '<p>In this post you can learn how to make a real tiramisu.</p>',
            'body' => '<p>First of all, make the coffee. Separate the egg whites from the yolks. Set aside the yolks and whip the egg whites until stiff: you will get at it when the egg whites will not move if you turn the bowl over.
            Remember that to whip egg whites to stiff peaks, there should be no trace of yolk. Once ready, set aside.Now, in a bowl, beat the egg yolks with sugar until light and smooth, 3 to 5 minutes.
            In the meantime, pour the mascarpone cheese into a bowl and work it with a spoon to make it softer.When the yolks are ready add the mascarpone cheese.Using the flexible-edge k-beater, slowly whip the mascarpone cream for 2 to 3 minutes. Now add the stiffly beaten egg whites. Mix slowly until smooth and creamy.Now let’s prepare the layers of ladyfingers and mascarpone cream. You can make 2 or more layers, depending on the width and depth of your pan.Dip the ladyfingers quickly (1 or 2 seconds) into the coffee. Then arrange the ladyfingers in the casserole of your liking.
            Arrange them so that they cover the bottom of the casserole. Then spread the mascarpone cream over the ladyfingers. Allow to rest 3 hours in the refrigerator before serving.</p>'
        ]);
        */
    }
}
