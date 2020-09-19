<?php

use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many films do you need ?', 10);

        $this->command->info("Creating {$count} films.");

        // Create the Genre
        $genres = factory(App\Film::class, $count)->create();

        $this->command->info('Film Created!');
    }
    // public function run()
    // {
    //     DB::table('films')->insertOrIgnore([
    //         'title' => "Flash",
    //         'desc' => 'Setelah akselerator partikel menyebabkan badai aneh, Penyelidik CSI Barry Allen disambar petir dan jatuh koma. Beberapa bulan kemudian dia terbangun dengan kekuatan kecepatan super, memberinya kemampuan untuk bergerak melalui Central City seperti malaikat penjaga yang tak terlihat. Meskipun awalnya senang dengan kekuatan barunya, Barry terkejut menemukan bahwa dia bukan satu-satunya "manusia meta" yang diciptakan setelah ledakan akselerator - dan tidak semua orang menggunakan kekuatan baru mereka untuk kebaikan. Barry bermitra dengan S.T.A.R. Lab dan mendedikasikan hidupnya untuk melindungi yang tidak bersalah. Untuk saat ini, hanya beberapa teman dekat dan rekan yang tahu bahwa Barry secara harfiah adalah manusia tercepat, tetapi tidak lama sebelum dunia mengetahui apa yang menjadi Barry Allen ... The Flash',
    //         'rating' => 75,
    //         'genre' => 'Fiksi',
    //         'cover' => 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/wHa6KOJAoNTFLFtp7wguUJKSnju.jpg',
    //         'released_date' => "2019-04-17",
    //         'slug' => "flash-the-movie",
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    //     DB::table('films')->insertOrIgnore([
    //         'title' => "Supernatural",
    //         'desc' => 'Dua bersaudara mencari ayah mereka yang hilang, pria yang melatih mereka untuk menjadi prajurit melawan kejahatan supernatural',
    //         'rating' => 80,
    //         'genre' => 'Drama',
    //         'cover' => 'https://image.tmdb.org/t/p/w220_and_h330_face/KoYWXbnYuS3b0GyQPkbuexlVK9.jpg',
    //         'released_date' => "2019-04-17",
    //         'slug' => "Supernatural-the-movie",
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    //     DB::table('films')->insertOrIgnore([
    //         'title' => "Jumanji",
    //         'desc' => 'Dua Dalam Jumanji: The Next Level, keempat sahabat kembali lagi, tetapi permainannya telah berubah. Saat memutuskan masuk lagi ke Jumanji untuk menyelamatkan salah satu dari mereka, mereka menemukan segalanya tak seperti yang ',
    //         'rating' => 80,
    //         'genre' => 'Fantasy',
    //         'cover' => 'https://image.tmdb.org/t/p/w220_and_h330_face/jyw8VKYEiM1UDzPB7NsisUgBeJ8.jpg',
    //         'released_date' => "2019-04-17",
    //         'slug' => "Jumanji-the-movie",
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    //     DB::table('films')->insertOrIgnore([
    //         'title' => "Bloodshot",
    //         'desc' => 'Ray Garrison/Bloodshot adalah seorang prajurit yang dihidupkan kembali oleh sebuah nanoteknologi. Karena teknologi ini ia memiliki kemampuan baru yang luar biasa. Namun masa lalu Ray tiba-tiba muncul dan membuatnya penasaran ',
    //         'rating' => 70,
    //         'genre' => 'Action',
    //         'cover' => 'https://image.tmdb.org/t/p/w220_and_h330_face/8WUVHemHFH2ZIP6NWkwlHWsyrEL.jpg',
    //         'released_date' => "2019-04-17",
    //         'slug' => "Bloodshot-the-movie",
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    //     DB::table('films')->insertOrIgnore([
    //         'title' => "Avengers: Endgame",
    //         'desc' => 'Terdampar di luar angkasa tanpa persediaan makanan dan minuman, Tony Stark berusaha mengirim pesan untuk Pepper Potts dimana persediaan oksigen mulai menipis. Sementara itu para Avengers yang tersisa harus menemukan',
    //         'rating' => 90,
    //         'genre' => 'Action',
    //         'cover' => 'https://image.tmdb.org/t/p/w440_and_h660_face/or06FN3Dka5tukK1e9sl16pB3iy.jpg',
    //         'released_date' => "2019-04-17",
    //         'slug' => "Avengers-the-movie",
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    //     DB::table('films')->insertOrIgnore([
    //         'title' => "Train to Busan",
    //         'desc' => 'Martial law is declared when a mysterious viral outbreak pushes Korea into a state of emergency. Those on an express train to Busan, a city that has successfully fended off the viral outbreak, must fight for their own survival…',
    //         'rating' => 80,
    //         'genre' => 'Drama',
    //         'cover' => 'https://image.tmdb.org/t/p/w220_and_h330_face/2oRRTPNtozgPhOa9CYZiVl4GRQ5.jpg',
    //         'released_date' => "2019-04-17",
    //         'slug' => "train-to-busan-the-movie",
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    //     DB::table('films')->insertOrIgnore([
    //         'title' => "Parasite",
    //         'desc' => 'Semua menganggur, keluarga Ki-taek memiliki minat khusus pada Taman kaya dan glamor untuk mata pencaharian mereka sampai mereka terjerat dalam insiden tak terduga.',
    //         'rating' => 80,
    //         'genre' => 'Drama',
    //         'cover' => 'https://image.tmdb.org/t/p/w220_and_h330_face/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
    //         'released_date' => "2019-04-17",
    //         'slug' => "Parasite-the-movie",
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    // }
}
