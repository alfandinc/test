<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about' , [
        "title" => "About",
        "name" => "Harry Maguire",
        "email" => "harrymaguire@terbantai.com",
        "image" => "maguire.jpg"
    ]);
});





Route::get('/blog', function () {

    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Bambang",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam autem voluptates ipsa at est vero quod repellat similique dolores dolorum, sed nobis ea neque! Maiores ad rem obcaecati pariatur aperiam ducimus tempora hic, qui nostrum ut incidunt, a impedit? Praesentium tempora magni ipsa maiores totam, corporis, assumenda error accusantium labore voluptas beatae aliquam deserunt voluptatibus quia. Expedita laborum ducimus aspernatur ipsam magni similique ad atque et inventore dolore porro, a beatae consectetur quibusdam animi quidem magnam id est praesentium. Amet?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Parjo",
            "body" => "2Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam autem voluptates ipsa at est vero quod repellat similique dolores dolorum, sed nobis ea neque! Maiores ad rem obcaecati pariatur aperiam ducimus tempora hic, qui nostrum ut incidunt, a impedit? Praesentium tempora magni ipsa maiores totam, corporis, assumenda error accusantium labore voluptas beatae aliquam deserunt voluptatibus quia. Expedita laborum ducimus aspernatur ipsam magni similique ad atque et inventore dolore porro, a beatae consectetur quibusdam animi quidem magnam id est praesentium. Amet?"
        ],
    
    ];


    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

//halaman single post

Route::get('posts/{slug}' , function($slug){
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Bambang",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam autem voluptates ipsa at est vero quod repellat similique dolores dolorum, sed nobis ea neque! Maiores ad rem obcaecati pariatur aperiam ducimus tempora hic, qui nostrum ut incidunt, a impedit? Praesentium tempora magni ipsa maiores totam, corporis, assumenda error accusantium labore voluptas beatae aliquam deserunt voluptatibus quia. Expedita laborum ducimus aspernatur ipsam magni similique ad atque et inventore dolore porro, a beatae consectetur quibusdam animi quidem magnam id est praesentium. Amet?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Parjo",
            "body" => "2Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam autem voluptates ipsa at est vero quod repellat similique dolores dolorum, sed nobis ea neque! Maiores ad rem obcaecati pariatur aperiam ducimus tempora hic, qui nostrum ut incidunt, a impedit? Praesentium tempora magni ipsa maiores totam, corporis, assumenda error accusantium labore voluptas beatae aliquam deserunt voluptatibus quia. Expedita laborum ducimus aspernatur ipsam magni similique ad atque et inventore dolore porro, a beatae consectetur quibusdam animi quidem magnam id est praesentium. Amet?"
        ],
    
    ];

    $new_post = [];
    foreach($blog_post as $post){
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }

    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

