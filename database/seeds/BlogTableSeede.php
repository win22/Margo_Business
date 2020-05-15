<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Blog;

class BlogTableSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author =  User::create([
            'name' => 'Ibrahimma DIALLO',
            'email' =>'khaliloulahdiallo@gmail.com',
            'password' => Hash::make('passer'),
            'role' => 'admin',
            'image' => 'users/diallo.jpeg'
        ]);

        // creation des blog normalement
        Blog::create([
            'name' => 'Lorem ipsum slug',
            'slug' => 'Lorem ipsum slug',
            'description' => 'Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, We travel Roswell sententiae.',
            'content' => "What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'type' => 1,
            'image' => 'blogs/1.jpeg',
            'user_id' => $author->id,
            'status' => 1,
        ]);

        Blog::create([
            'name' => 'Lorem ipsum name',
            'slug' => 'Lorem ipsum name',
            'description' => 'Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, We travel Roswell sententiae.',
            'content' => "What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'type' => 1,
            'image' => 'blogs/2.jpeg',
            'user_id' => $author->id,
            'status' => 1,
        ]);

        //creation des blogs avec les relations
        $author->blogs()->create([
            'name' => 'Lorem ipsum',
            'slug' => 'Lorem ipsum',
            'description' => 'Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, We travel Roswell sententiae.',
            'content' => "What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'type' => 0,
            'link' => 'https://www.youtube.com/watch?v=A5B5uGEancU',
            'image' => 'blogs/3.jpg',
            'status' => 1,
        ]);

        $author->blogs()->create([
            'name' => 'Lorem ipsum  test',
            'slug' => 'Lorem ipsum  test',
            'description' => 'Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, We travel Roswell sententiae.',
            'content' => "What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'type' => 0,
            'link' => 'https://www.youtube.com/watch?v=A5B5uGEancU',
            'image' => 'blogs/4.jpg',
            'status' => 1,
        ]);


    }
}
