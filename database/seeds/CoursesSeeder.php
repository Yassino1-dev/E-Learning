<?php

use App\User;
use App\Course;
use App\Category;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugify = new Slugify();

        $course = new Course();
        $course->title = 'Les bases de Symfony 4';
        $course->subtitle = 'Apprendre à créer un site avec Symfony 4';
        $course->slug = $slugify->slugify($course->title);
        $course->desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in libero congue, interdum sem sit amet, sodales felis. Quisque nec mi nulla. Suspendisse potenti. Aenean lobortis, elit ultricies cursus pretium, ante elit mattis mauris, pretium egestas dolor ante vitae metus. Ut felis ante, egestas ut augue ut, tincidunt semper nibh. Proin elementum commodo eros vitae luctus. Integer eleifend euismod mollis. Praesent enim nisl, mattis ac metus quis, consequat sagittis metus.';
        $course->price = 99.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();

        $course = new Course();
        $course->title = 'Créer un site avec Wordpress';
        $course->subtitle = 'Construire un site e-commerce avec Wordpress';
        $course->slug = $slugify->slugify($course->title);
        $course->desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in libero congue, interdum sem sit amet, sodales felis. Quisque nec mi nulla. Suspendisse potenti. Aenean lobortis, elit ultricies cursus pretium, ante elit mattis mauris, pretium egestas dolor ante vitae metus. Ut felis ante, egestas ut augue ut, tincidunt semper nibh. Proin elementum commodo eros vitae luctus. Integer eleifend euismod mollis. Praesent enim nisl, mattis ac metus quis, consequat sagittis metus.';
        $course->price = 199.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();

        $course = new Course();
        $course->title = 'Les bases de laravel 7';
        $course->subtitle = "Créer une plateforme d'enseignement en ligne avec laravel 7";
        $course->slug = $slugify->slugify($course->title);
        $course->desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in libero congue, interdum sem sit amet, sodales felis. Quisque nec mi nulla. Suspendisse potenti. Aenean lobortis, elit ultricies cursus pretium, ante elit mattis mauris, pretium egestas dolor ante vitae metus. Ut felis ante, egestas ut augue ut, tincidunt semper nibh. Proin elementum commodo eros vitae luctus. Integer eleifend euismod mollis. Praesent enim nisl, mattis ac metus quis, consequat sagittis metus.';
        $course->price = 299.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();
    }
}
