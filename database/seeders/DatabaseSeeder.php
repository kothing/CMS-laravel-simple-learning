<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Page;
use App\Models\User;
use App\Models\Comment;
use App\Models\Settings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Page::truncate();
        Comment::truncate();
        Settings::truncate();

        Settings::create([
            'site_title' => 'World of Unix',
            'site_tagline' => 'Think Different',
            'site_description' => 'Yet another site about BSD',
            'site_keywords' => 'unix, freebsd, openbsd, linux',
            'site_url' => '',
            'posts_per_page' => 10
        ]);


        $user1 = User::create([
            'name' => 'admin',
            'firstname' => 'Jakub',
            'lastname' => 'Pacanowski',
            'bio' => 'Programming, operating systems',
            'email' => 'admin@example.com',
            'password' => 'admin',
            'role' => 'ADMIN'
        ]);

        $user2 = User::create([
            'name' => 'mattonit',
            'firstname' => 'Bart',
            'lastname' => 'Malan',
            'bio' => 'React, traveling, cars',
            'email' => 'mattonit@example.com',
            'password' => 'mattonit',
            'role' => 'AUTHOR'
        ]);

        $user3 = User::create([
            'name' => 'falcon030',
            'email' => 'falcon030@example.com',
            'password' => 'falcon030',
            'role' => 'READER'
        ]);


        Post::create([
            'user_id' => $user1->id,
            'title' => 'Why I switched to OpenBSD',
            'slug' => 'why-i-switched-to-openbsd',
            // 'tags' => 'openbsd',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque id diam vel quam. Sit amet purus gravida quis blandit turpis cursus. Tempus imperdiet nulla malesuada pellentesque. Pretium fusce id velit ut. Duis at tellus at urna condimentum mattis pellentesque. Donec enim diam vulputate ut pharetra sit. Fusce ut placerat orci nulla pellentesque dignissim enim sit amet. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper.</p><p>Accumsan sit amet nulla facilisi. Nec ullamcorper sit amet risus nullam. Laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean. Elementum nisi quis eleifend quam. Pellentesque dignissim enim sit amet. Dui id ornare arcu odio ut sem nulla pharetra. Nisi vitae suscipit tellus mauris a diam. Ante metus dictum at tempor. Neque sodales ut etiam sit amet. Arcu non odio euismod lacinia at quis risus. Leo vel orci porta non pulvinar. Ligula ullamcorper malesuada proin libero.</p><p>Maecenas pharetra convallis posuere morbi leo. Lobortis mattis aliquam faucibus purus. Euismod in pellentesque massa placerat duis ultricies lacus. Rutrum quisque non tellus orci ac auctor augue. Est sit amet facilisis magna etiam tempor orci eu. Sed adipiscing diam donec adipiscing tristique. Purus faucibus ornare suspendisse sed nisi lacus sed viverra. Sodales ut eu sem integer. Ac orci phasellus egestas tellus rutrum tellus. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Eu feugiat pretium nibh ipsum consequat. Nec feugiat in fermentum posuere urna nec tincidunt praesent.</p>',
            'created_at' => '2020-11-28 16:29:05'
        ]);

        Post::create([
            'user_id' => $user1->id,
            'title' => 'I started learning Hindi',
            'slug' => 'i-started-learning-hindi',
            // 'tags' => 'hindi',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque id diam vel quam. Sit amet purus gravida quis blandit turpis cursus. Tempus imperdiet nulla malesuada pellentesque. Pretium fusce id velit ut. Duis at tellus at urna condimentum mattis pellentesque. Donec enim diam vulputate ut pharetra sit. Fusce ut placerat orci nulla pellentesque dignissim enim sit amet. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper.</p><p>Accumsan sit amet nulla facilisi. Nec ullamcorper sit amet risus nullam. Laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean. Elementum nisi quis eleifend quam. Pellentesque dignissim enim sit amet. Dui id ornare arcu odio ut sem nulla pharetra. Nisi vitae suscipit tellus mauris a diam. Ante metus dictum at tempor. Neque sodales ut etiam sit amet. Arcu non odio euismod lacinia at quis risus. Leo vel orci porta non pulvinar. Ligula ullamcorper malesuada proin libero.</p><p>Maecenas pharetra convallis posuere morbi leo. Lobortis mattis aliquam faucibus purus. Euismod in pellentesque massa placerat duis ultricies lacus. Rutrum quisque non tellus orci ac auctor augue. Est sit amet facilisis magna etiam tempor orci eu. Sed adipiscing diam donec adipiscing tristique. Purus faucibus ornare suspendisse sed nisi lacus sed viverra. Sodales ut eu sem integer. Ac orci phasellus egestas tellus rutrum tellus. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Eu feugiat pretium nibh ipsum consequat. Nec feugiat in fermentum posuere urna nec tincidunt praesent.</p>',
            'created_at' => '2023-11-28 16:29:05'
        ]);

        Post::create([
            'user_id' => $user2->id,
            'title' => 'Things to do after Installing FreeBSD',
            'slug' => 'things-to-do-after-installing-freebsd',
            // 'tags' => 'freebsd',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque id diam vel quam. Sit amet purus gravida quis blandit turpis cursus. Tempus imperdiet nulla malesuada pellentesque. Pretium fusce id velit ut. Duis at tellus at urna condimentum mattis pellentesque. Donec enim diam vulputate ut pharetra sit. Fusce ut placerat orci nulla pellentesque dignissim enim sit amet. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper.</p><p>Accumsan sit amet nulla facilisi. Nec ullamcorper sit amet risus nullam. Laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean. Elementum nisi quis eleifend quam. Pellentesque dignissim enim sit amet. Dui id ornare arcu odio ut sem nulla pharetra. Nisi vitae suscipit tellus mauris a diam. Ante metus dictum at tempor. Neque sodales ut etiam sit amet. Arcu non odio euismod lacinia at quis risus. Leo vel orci porta non pulvinar. Ligula ullamcorper malesuada proin libero.</p><p>Maecenas pharetra convallis posuere morbi leo. Lobortis mattis aliquam faucibus purus. Euismod in pellentesque massa placerat duis ultricies lacus. Rutrum quisque non tellus orci ac auctor augue. Est sit amet facilisis magna etiam tempor orci eu. Sed adipiscing diam donec adipiscing tristique. Purus faucibus ornare suspendisse sed nisi lacus sed viverra. Sodales ut eu sem integer. Ac orci phasellus egestas tellus rutrum tellus. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Eu feugiat pretium nibh ipsum consequat. Nec feugiat in fermentum posuere urna nec tincidunt praesent.</p>',
            'created_at' => '2021-11-28 16:29:05'
        ]);

        Post::create([
            'user_id' => $user2->id,
            'title' => 'SQL queries optimalization',
            'slug' => 'sql-queries-optimalization',
            // 'tags' => 'sql',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque id diam vel quam. Sit amet purus gravida quis blandit turpis cursus. Tempus imperdiet nulla malesuada pellentesque. Pretium fusce id velit ut. Duis at tellus at urna condimentum mattis pellentesque. Donec enim diam vulputate ut pharetra sit. Fusce ut placerat orci nulla pellentesque dignissim enim sit amet. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper.</p><p>Accumsan sit amet nulla facilisi. Nec ullamcorper sit amet risus nullam. Laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean. Elementum nisi quis eleifend quam. Pellentesque dignissim enim sit amet. Dui id ornare arcu odio ut sem nulla pharetra. Nisi vitae suscipit tellus mauris a diam. Ante metus dictum at tempor. Neque sodales ut etiam sit amet. Arcu non odio euismod lacinia at quis risus. Leo vel orci porta non pulvinar. Ligula ullamcorper malesuada proin libero.</p><p>Maecenas pharetra convallis posuere morbi leo. Lobortis mattis aliquam faucibus purus. Euismod in pellentesque massa placerat duis ultricies lacus. Rutrum quisque non tellus orci ac auctor augue. Est sit amet facilisis magna etiam tempor orci eu. Sed adipiscing diam donec adipiscing tristique. Purus faucibus ornare suspendisse sed nisi lacus sed viverra. Sodales ut eu sem integer. Ac orci phasellus egestas tellus rutrum tellus. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Eu feugiat pretium nibh ipsum consequat. Nec feugiat in fermentum posuere urna nec tincidunt praesent.</p>',
            'created_at' => '2018-11-28 16:29:05',
            'status' => 'DRAFT'
        ]);

        Post::create([
            'user_id' => $user2->id,
            'title' => 'How to become a hacker',
            'slug' => 'how-to-become-a-hacker',
            // 'tags' => 'hacker',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque id diam vel quam. Sit amet purus gravida quis blandit turpis cursus. Tempus imperdiet nulla malesuada pellentesque. Pretium fusce id velit ut. Duis at tellus at urna condimentum mattis pellentesque. Donec enim diam vulputate ut pharetra sit. Fusce ut placerat orci nulla pellentesque dignissim enim sit amet. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper.</p><p>Accumsan sit amet nulla facilisi. Nec ullamcorper sit amet risus nullam. Laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean. Elementum nisi quis eleifend quam. Pellentesque dignissim enim sit amet. Dui id ornare arcu odio ut sem nulla pharetra. Nisi vitae suscipit tellus mauris a diam. Ante metus dictum at tempor. Neque sodales ut etiam sit amet. Arcu non odio euismod lacinia at quis risus. Leo vel orci porta non pulvinar. Ligula ullamcorper malesuada proin libero.</p><p>Maecenas pharetra convallis posuere morbi leo. Lobortis mattis aliquam faucibus purus. Euismod in pellentesque massa placerat duis ultricies lacus. Rutrum quisque non tellus orci ac auctor augue. Est sit amet facilisis magna etiam tempor orci eu. Sed adipiscing diam donec adipiscing tristique. Purus faucibus ornare suspendisse sed nisi lacus sed viverra. Sodales ut eu sem integer. Ac orci phasellus egestas tellus rutrum tellus. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Eu feugiat pretium nibh ipsum consequat. Nec feugiat in fermentum posuere urna nec tincidunt praesent.</p>',
            'created_at' => '2016-11-28 16:29:05',
        ]);


        Page::create([
            'title' => 'About us',
            'slug' => 'about-us',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque id diam vel quam. Sit amet purus gravida quis blandit turpis cursus. Tempus imperdiet nulla malesuada pellentesque. Pretium fusce id velit ut. Duis at tellus at urna condimentum mattis pellentesque. Donec enim diam vulputate ut pharetra sit. Fusce ut placerat orci nulla pellentesque dignissim enim sit amet. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper.</p><p>Accumsan sit amet nulla facilisi. Nec ullamcorper sit amet risus nullam. Laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean. Elementum nisi quis eleifend quam. Pellentesque dignissim enim sit amet. Dui id ornare arcu odio ut sem nulla pharetra. Nisi vitae suscipit tellus mauris a diam. Ante metus dictum at tempor. Neque sodales ut etiam sit amet. Arcu non odio euismod lacinia at quis risus. Leo vel orci porta non pulvinar. Ligula ullamcorper malesuada proin libero.</p><p>Maecenas pharetra convallis posuere morbi leo. Lobortis mattis aliquam faucibus purus. Euismod in pellentesque massa placerat duis ultricies lacus. Rutrum quisque non tellus orci ac auctor augue. Est sit amet facilisis magna etiam tempor orci eu. Sed adipiscing diam donec adipiscing tristique. Purus faucibus ornare suspendisse sed nisi lacus sed viverra. Sodales ut eu sem integer. Ac orci phasellus egestas tellus rutrum tellus. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Eu feugiat pretium nibh ipsum consequat. Nec feugiat in fermentum posuere urna nec tincidunt praesent.</p>',
            'created_at' => '2021-11-28 16:29:05'
        ]);

        Page::create([
            'title' => 'Resources',
            'slug' => 'resources',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque id diam vel quam. Sit amet purus gravida quis blandit turpis cursus. Tempus imperdiet nulla malesuada pellentesque. Pretium fusce id velit ut. Duis at tellus at urna condimentum mattis pellentesque. Donec enim diam vulputate ut pharetra sit. Fusce ut placerat orci nulla pellentesque dignissim enim sit amet. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper.</p><p>Accumsan sit amet nulla facilisi. Nec ullamcorper sit amet risus nullam. Laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean. Elementum nisi quis eleifend quam. Pellentesque dignissim enim sit amet. Dui id ornare arcu odio ut sem nulla pharetra. Nisi vitae suscipit tellus mauris a diam. Ante metus dictum at tempor. Neque sodales ut etiam sit amet. Arcu non odio euismod lacinia at quis risus. Leo vel orci porta non pulvinar. Ligula ullamcorper malesuada proin libero.</p><p>Maecenas pharetra convallis posuere morbi leo. Lobortis mattis aliquam faucibus purus. Euismod in pellentesque massa placerat duis ultricies lacus. Rutrum quisque non tellus orci ac auctor augue. Est sit amet facilisis magna etiam tempor orci eu. Sed adipiscing diam donec adipiscing tristique. Purus faucibus ornare suspendisse sed nisi lacus sed viverra. Sodales ut eu sem integer. Ac orci phasellus egestas tellus rutrum tellus. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Eu feugiat pretium nibh ipsum consequat. Nec feugiat in fermentum posuere urna nec tincidunt praesent.</p>',
            'created_at' => '2022-11-28 16:29:05'
        ]);


        Comment::create([
            'post_id' => 1,
            'user_id' => $user2->id,
            'content' => 'Lorem ipsum dolor sit amet sunt in culpa qui officia deserunt mollit.',
            'created_at' => '2020-11-28 16:29:05'
        ]);

        Comment::create([
            'post_id' => 1,
            'user_id' => $user1->id,
            'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'created_at' => '2023-11-28 16:29:05'
        ]);

        Comment::create([
            'post_id' => 1,
            'user_id' => $user2->id,
            'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.',
            'created_at' => '2021-11-28 16:29:05'
        ]);


        Comment::create([
            'post_id' => 3,
            'user_id' => $user2->id,
            'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.',
            'created_at' => '2021-11-28 16:29:05'
        ]);
    }
}
