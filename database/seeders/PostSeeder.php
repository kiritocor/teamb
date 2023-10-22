<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('posts')->insert([
        'title' => 'ハロウィンコスチュームのトレンド',
        'body' => '今年のハロウィンはゾンビ、ウィッチ、そしてスーパーヒーローのコスチュームが大流行。お気に入りのスタイルを見つけよう.',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
    
        DB::table('posts')->insert([
            'title' => 'ハロウィンパーティーのおすすめ料理',
            'body' => 'ハロウィンパーティーにぴったりのスパイシーなチリやかわいらしいゴーストクッキーのレシピを紹介.',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'title' => 'ハロウィンの起源と神秘',
            'body' => 'ハロウィンはケルトの祭りサウィンとキリスト教の諸聖人の日が結びついた神秘的な祭りです。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'title' => '子供向けハロウィンアクティビティ',
            'body' => '子供たちのためのかぼちゃ彫刻やお化け屋敷ツアーなど、楽しいハロウィンアクティビティをご紹介。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'title' => 'ハロウィン装飾のアイデア',
            'body' => '家をお化け屋敷に変身させるためのクリエイティブなアイデア。かぼちゃランタンとスパイダーウェブで演出。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'title' => '怖い映画リスト：ハロウィンナイト',
            'body' => 'ハロウィン夜に楽しむための怖い映画リスト。シャイニング、エクソシスト、ゴシュトバスターズなど。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'title' => 'ハロウィンの由来と意義',
            'body' => 'ハロウィンは死者との交流の日とされ、お化け屋敷やトリックオアトリートが起源に関連しています。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'title' => 'ハロウィンパーティーのプレイリスト',
            'body' => 'ハロウィンパーティーで盛り上がる音楽のプレイリスト。モンスターマッシュやスリラーなどの曲が満載。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'title' => 'お化け屋敷体験記：恐怖の中へ',
            'body' => 'ハロウィンにお化け屋敷で恐怖の体験。驚愕の出来事や仮装のお化けについての興奮の記録。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'title' => 'ハロウィンの楽しみ方：ガイド',
            'body' => 'ハロウィンの楽しみ方を完全ガイド。トリックオアトリート、仮装コンテスト、そして魔法の夜を楽しもう。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

    }
}
