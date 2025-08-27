<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        $posts = [
            [
                'title' => '5 Tips Meningkatkan Brand Awareness Bisnis',
                'slug' => '5-tips-meningkatkan-brand-awareness-bisnis',
                'excerpt' => 'Membangun brand awareness adalah langkah penting dalam mengembangkan bisnis Anda...',
                'body' => 'Isi lengkap artikel tentang brand awareness...',
                'category' => 'Marketing',
                'image_url' => 'https://images.unsplash.com/photo-1497366216548-37526070297c',
                'author' => 'Dwi Putri',
                'published_at' => '2023-12-01',
            ],
            [
                'title' => '5 Alasan Mengapa Pebisnis Harus Menggunakan Virtual Office',
                'slug' => '5-alasan-pebisnis-harus-virtual-office',
                'excerpt' => 'Virtual office menjadi solusi praktis bagi pebisnis modern yang menginginkan fleksibilitas...',
                'body' => 'Isi lengkap artikel tentang virtual office...',
                'category' => 'Business',
                'image_url' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40',
                'author' => 'Dwi Putri',
                'published_at' => '2023-11-30',
            ],
            [
                'title' => 'Keep Happy! 5 Kunci Bahagia Bagi Anak Muda',
                'slug' => 'keep-happy-5-kunci-bahagia-anak-muda',
                'excerpt' => 'Menemukan kebahagiaan di tengah kesibukan dan tantangan kehidupan modern...',
                'body' => 'Isi lengkap artikel tentang kebahagiaan anak muda...',
                'category' => 'Lifestyle',
                'image_url' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f',
                'author' => 'Dwi Putri',
                'published_at' => '2023-11-21',
            ],
            [
                'title' => 'Teknologi AI: Masa Depan Bisnis Modern',
                'slug' => 'teknologi-ai-masa-depan-bisnis-modern',
                'excerpt' => 'Artificial Intelligence semakin menjadi bagian penting dalam dunia bisnis...',
                'body' => 'Isi lengkap artikel tentang AI dan bisnis...',
                'category' => 'Teknologi',
                'image_url' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6',
                'author' => 'Dwi Putri',
                'published_at' => '2023-10-15',
            ],
            [
                'title' => 'Strategi Digital Marketing di Tahun 2025',
                'slug' => 'strategi-digital-marketing-2025',
                'excerpt' => 'Digital marketing terus berkembang, simak strategi terbaru tahun ini...',
                'body' => 'Isi lengkap artikel tentang digital marketing...',
                'category' => 'Marketing',
                'image_url' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb',
                'author' => 'Dwi Putri',
                'published_at' => '2023-09-10',
            ],
            [
                'title' => 'Remote Working: Tantangan dan Solusi',
                'slug' => 'remote-working-tantangan-solusi',
                'excerpt' => 'Kerja remote semakin populer, namun ada tantangan yang harus dihadapi...',
                'body' => 'Isi lengkap artikel tentang remote working...',
                'category' => 'Business',
                'image_url' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2',
                'author' => 'Dwi Putri',
                'published_at' => '2023-08-05',
            ],
            [
                'title' => 'Membangun Tim yang Solid di Era Digital',
                'slug' => 'membangun-tim-solid-era-digital',
                'excerpt' => 'Tim yang solid adalah kunci sukses bisnis di era digital...',
                'body' => 'Isi lengkap artikel tentang membangun tim...',
                'category' => 'Lifestyle',
                'image_url' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308',
                'author' => 'Dwi Putri',
                'published_at' => '2023-07-20',
            ],
        ];
        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
