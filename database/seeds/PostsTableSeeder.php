<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Post;
use App\Category;
use App\Tag;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([

            'name' => 'MYASH'
        ]);

        $auther1 = App\User::create([

            'name' => 'MYASH',

            'email' => 'imayshr@gmail.com',

            'password' => Hash::make('pass123')
        ]);

        $auther2 = App\User::create([

            'name' => 'YASH',

            'email' => 'myash@gmail.com',

            'password' => Hash::make('pass123word')
        ]);


        $category2 = Category::create([

            'name' => 'Cyber Security'
        ]);

        $category3 = Category::create([

            'name' => 'Hacking'
        ]);


        $post1 = $auther1->posts()->create([

            'title' => 'MYASH',

            'description' => 'Hacker. While this term originally referred to a clever or expert programmer,
                                it is now more commonly used to refer to someone who can gain unauthorized
                                access to other computers.
                                A hacker can "hack" his or her way through the security levels of a computer
                                system or network.',

            'content' =>        'In 2010, Sean Ellis, co-author of Hacking Growth and CEO of GrowthHackers, coined the term growth hacking in a blog post entitled, “Find a Growth Hacker for Your Startup.” Ellis wrote: “A growth hacker is a person whose true north is growth. Everything they do is scrutinized by its potential impact on scalable growth.”

                                  He further explained, “An effective growth hacker also needs to be disciplined to follow a growth hacking process of prioritizing ideas (their own and others in the company), testing the ideas, and being analytical enough to know which tested growth drivers to keep and which ones to cut. The faster this process can be repeated, the more likely they’ll find scalable, repeatable ways to grow the business.”',

            'category_id' => $category1->id,

            'image' => 'posts/1.jpg'
        ]);


        $post2 = $auther2->posts()->create([

            'title' => 'Top 5 brilliant content marketing strategies',

            'description' => 'Hacker. While this term originally referred to a clever or expert programmer,
                                it is now more commonly used to refer to someone who can gain unauthorized
                                access to other computers.
                                A hacker can "hack" his or her way through the security levels of a computer
                                system or network.',

            'content' =>        'In 2010, Sean Ellis, co-author of Hacking Growth and CEO of GrowthHackers, coined the term growth hacking in a blog post entitled, “Find a Growth Hacker for Your Startup.” Ellis wrote: “A growth hacker is a person whose true north is growth. Everything they do is scrutinized by its potential impact on scalable growth.”

                                  He further explained, “An effective growth hacker also needs to be disciplined to follow a growth hacking process of prioritizing ideas (their own and others in the company), testing the ideas, and being analytical enough to know which tested growth drivers to keep and which ones to cut. The faster this process can be repeated, the more likely they’ll find scalable, repeatable ways to grow the business.”',

            'category_id' => $category2->id,

            'image' => 'posts/2.jpg'



        ]);


        $post3 = $auther1->posts()->create([


            'title' => 'Hacking',

            'description' => 'Hacker. While this term originally referred to a clever or expert programmer,
                                it is now more commonly used to refer to someone who can gain unauthorized
                                access to other computers.
                                A hacker can "hack" his or her way through the security levels of a computer
                                system or network.',

            'content' =>        'In 2010, Sean Ellis, co-author of Hacking Growth and CEO of GrowthHackers, coined the term growth hacking in a blog post entitled, “Find a Growth Hacker for Your Startup.” Ellis wrote: “A growth hacker is a person whose true north is growth. Everything they do is scrutinized by its potential impact on scalable growth.”

                                  He further explained, “An effective growth hacker also needs to be disciplined to follow a growth hacking process of prioritizing ideas (their own and others in the company), testing the ideas, and being analytical enough to know which tested growth drivers to keep and which ones to cut. The faster this process can be repeated, the more likely they’ll find scalable, repeatable ways to grow the business.”',

            'category_id' => $category3->id,

            'image' => 'posts/3.jpg'



        ]);

        $post4 = $auther2->posts()->create([


            'title' => 'Best practices for minimalist design with example',

            'description' => 'Hacker. While this term originally referred to a clever or expert programmer,
                                it is now more commonly used to refer to someone who can gain unauthorized
                                access to other computers.
                                A hacker can "hack" his or her way through the security levels of a computer
                                system or network.',

            'content' =>        'In 2010, Sean Ellis, co-author of Hacking Growth and CEO of GrowthHackers, coined the term growth hacking in a blog post entitled, “Find a Growth Hacker for Your Startup.” Ellis wrote: “A growth hacker is a person whose true north is growth. Everything they do is scrutinized by its potential impact on scalable growth.”

                                  He further explained, “An effective growth hacker also needs to be disciplined to follow a growth hacking process of prioritizing ideas (their own and others in the company), testing the ideas, and being analytical enough to know which tested growth drivers to keep and which ones to cut. The faster this process can be repeated, the more likely they’ll find scalable, repeatable ways to grow the business.”',

            'category_id' => $category2->id,

            'image' => 'posts/4.jpg'



        ]);

        $tag1 = Tag::create([

            'name' => 'Networing'
        ]);

        $tag2 = Tag::create([

            'name' => 'Linux'
        ]);

        $tag3 = Tag::create([

            'name' => 'Windows'
        ]);


        $post1->tags()->attach([$tag1->id, $tag2->id]);

        $post2->tags()->attach([$tag2->id, $tag3->id]);

        $post3->tags()->attach([$tag3->id, $tag1->id]);

        $post4->tags()->attach([$tag1->id, $tag3->id]);



    }

}
