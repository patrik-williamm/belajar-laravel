<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\Post;
use App\Models\User;
use App\Models\About;
use App\Models\Categories;
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
        User::factory(3)->create();
        Post::factory(20)->create();

        User::create([
            'name' => 'patrik william',
            'email' => 'patrikwilliam001@gmail.com',
            'password' => bcrypt('password')   
        ]);

        Categories::create([
            'name_categories' => 'web programing',
            'slug' => 'web-programing',
        ]);
        Categories::create([
            'name_categories' => 'Personal',
            'slug' => 'Personal',
        ]);
        Categories::create([
            'name_categories' => 'Diary',
            'slug' => 'Diary',
        ]);
        Categories::create([
            'name_categories' => 'Fashion',
            'slug' => 'Fashion',
        ]);

        About::create([
            'name' => 'Patrik William',
            'age' => 20,
            'address' => 'Btn Sao Sarana Indah Blok A19/6',
            'aboutMe' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quas fugiat unde obcaecati, quo doloremque aliquam praesentium dignissimos eaque rerum numquam quibusdam? Numquam repellendus ex maiores tempora earum voluptates doloremque distinctio omnis. Numquam officiis sint, reprehenderit accusantium exercitationem fugiat delectus esse. Facilis, possimus, veritatis recusandae voluptate fuga et explicabo repudiandae delectus excepturi earum incidunt illum officia? Voluptatibus sequi deserunt aperiam, sed sit beatae. Adipisci enim dolore fugit deserunt inventore facere quae, perspiciatis atque consequatur. Deserunt cumque sapiente magni iusto molestias eveniet eos quae mollitia ducimus blanditiis totam consequuntur incidunt nihil consequatur temporibus numquam, doloribus aperiam hic libero accusantium veritatis repellat quasi! Ipsam tenetur adipisci, vitae illum a debitis excepturi rerum eos sunt voluptatem necessitatibus tempore dicta deleniti asperiores alias facilis eum maxime? Minus dolorum obcaecati rem facere sapiente magnam labore a nostrum cum illum quisquam, molestiae, iste veritatis earum expedita numquam voluptatum sint inventore quae, laborum atque incidunt sed quidem! Temporibus rem perspiciatis, quasi impedit molestiae, asperiores debitis vero cupiditate exercitationem facilis illo fugiat et. Reprehenderit veritatis iure quibusdam, eum perferendis perspiciatis sequi esse magni minima aliquam pariatur saepe, et quidem numquam, quod voluptatem dolores. Cum, odio tempore, nostrum, error similique et voluptate aliquam laudantium impedit illum ipsam nihil consequatur.',
        ]);

        Home::create([
            'title' => 'Welcome My Website Blogs',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quas fugiat unde obcaecati, quo doloremque aliquam praesentium dignissimos eaque rerum numquam quibusdam? Numquam repellendus ex maiores tempora earum voluptates doloremque distinctio omnis. Numquam officiis sint, reprehenderit accusantium exercitationem fugiat delectus esse. Facilis, possimus, veritatis recusandae voluptate fuga et explicabo repudiandae delectus excepturi earum incidunt illum officia? Voluptatibus sequi deserunt aperiam, sed sit beatae. Adipisci enim dolore fugit deserunt inventore facere quae, perspiciatis atque consequatur. Deserunt cumque sapiente magni iusto molestias eveniet eos quae mollitia ducimus blanditiis totam consequuntur incidunt nihil consequatur temporibus numquam, doloribus aperiam hic libero accusantium veritatis repellat quasi! Ipsam tenetur adipisci, vitae illum a debitis excepturi rerum eos sunt voluptatem necessitatibus tempore dicta deleniti asperiores alias facilis eum maxime? Minus dolorum obcaecati rem facere sapiente magnam labore a nostrum cum illum quisquam, molestiae, iste veritatis earum expedita numquam voluptatum sint inventore quae, laborum atque incidunt sed quidem! Temporibus rem perspiciatis, quasi impedit molestiae, asperiores debitis vero cupiditate exercitationem facilis illo fugiat et. Reprehenderit veritatis iure quibusdam, eum perferendis perspiciatis sequi esse magni minima aliquam pariatur saepe, et quidem numquam, quod voluptatem dolores. Cum, odio tempore, nostrum, error similique et voluptate aliquam laudantium impedit illum ipsam nihil consequatur.',
        ]);
    }
}