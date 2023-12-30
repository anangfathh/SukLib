<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'book_id' => '1212',
            'name' => 'Atomic Habbit',
            'user_id' => '2',
            'desc' => 'Buku ini adalah panduan motivasi yang berisikan cara mengubah hidup melalui kebiasaan-kebiasaan kecil. Clear menunjukkan bahwa perubahan nyata berasal dari efek gabungan ratusan keputusan kecil, seperti bangun lima menit lebih awal atau menahan sebentar hasrat untuk menelepon. Buku ini juga berisikan teori-teori ilmiah serta kumpulan kisah inspiratif dari tokoh-tokoh sukses. Buku ini telah meraih rekor penjualan terbaik versi New York Times dan telah terjual lebih dari 5 juta eksemplar di seluruh dunia',
            'rating' => '5',
            'status' => 'Tersedia',
            'type' => 'Hard Copy',
            'category_id' => '1',
            'book_image' => 'book_images\atomic.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books')->insert([
            'book_id' => '1211',
            'name' => 'The Art Of War',
            'user_id' => '2',
            'desc' => 'Buku ini adalah salah satu buku strategi paling terkenal dan berpengaruh di dunia. Buku ini menjelaskan secara baik tentang tata cara dan juga strategi berperang. Buku ini juga berisi tentang bagaimana menjadi jenderal yang baik dan bisa menjadi pemicu semangat. Buku ini membahas persiapan perang, perbekalan dan peralatan yang berguna di dalam perang jangka pendek dan panjang, jarak yang efektif untuk mengatur pasukan, penggunaan elemen-elemen alam yang dapat membantu kita seperti misalnya api dan air, bahkan tentang bagaimana cara menggunakan dan mencari jasa mata-mata di medan perang demi mencapai kemenangan',
            'rating' => '5',
            'status' => 'Tersedia',
            'type' => 'Hard Copy',
            'category_id' => '2',
            'book_image' => 'book_images\TheArtofWar-by-SunTzu.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books')->insert([
            'book_id' => '1214',
            'name' => 'War Of Art',
            'user_id' => '2',
            'desc' => 'Buku ini berfokus pada konsep "resistance" atau hambatan internal yang sering menghalangi individu dari pencapaian kreatif dan personal. Pressfield menawarkan wawasan dan saran tentang bagaimana mengatasi hambatan ini dan mencapai potensi penuh kita.',
            'rating' => '2',
            'status' => 'Tersedia',
            'type' => 'Hard Copy',
            'category_id' => '2',
            'book_image' => 'book_images\warofart.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books')->insert([
            'book_id' => '1215',
            'name' => 'Someday Is Today',
            'user_id' => '2',
            'desc' => 'Buku ini menawarkan wawasan berharga dan panduan praktis dalam mencapai tujuan dan hidup tanpa penyesalan. Dicks membagikan pengalaman pribadinya dan menekankan pentingnya mengambil kesempatan atau melakukan tindakan positif. Buku ini mengajarkan bahwa waktu yang tampaknya tidak berarti, seperti tujuh menit, bisa digunakan untuk hal-hal yang produktif dan berarti, bukan hanya untuk scrolling media sosial',
            'rating' => '2',
            'status' => 'Tersedia',
            'type' => 'Hard Copy',
            'category_id' => '3',
            'book_image' => 'book_images\someday.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
