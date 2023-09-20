<?php

namespace Database\Seeders;

use App\Models\SubSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subSubCategories = [
            ["Brand Style Design", "Fonts & Typography", "Business Cards & Stationery"],
            [ "App Design", "UX Design", "Landing Page Design"],
            ["Illustration", "Artists", "NFT Art"],
            [ "Resume Design", "Presentation Design"],
            ["3D Architecture", "3D Fashion & Garment", "3D Landscape"],
            ["Wordpress", "Shopify", "Wix", "Custom Websites"],
            ["Software Development", "Mobile App Development", "Website Application", "Desktop Application", "Game Application", "Chatbot Application"],
            ["Blockchain & Cryptocurrency", "Electronics Engineering", "NFT Development"],
            ["Search Engine Optimization (SEO)", "Search Engine Marketing (SEM)", "Local SEO", "E-Commerce SEO"],
            ["Social Media Marketing", "Paid Social Media", "Influencer Marketing"],
            ["Video Marketing", "E-Commerce Marketing", "Email Marketing", "Affiliate Marketing"],
            ["Music Promotion", "Podcast Marketing", "Mobile App Marketing"],
            ['Video Editing','Visual Effects','Video Art','Intro & Outro Videos'],
            [ 'Character Animation', 'Logo Animation', 'NFT Animation','Animation for Kids'],
            ['Video Ads & Commercials', 'Social Media Videos', 'Music Videos', 'Corporate Videos'],
            ['Article to Video', 'Videographers','Other' ],
            ['Creative Writing', 'Article & Blog Posts', 'Website Content', 'Podcast Writing', 'Book & eBook Writing'],
            ['Content Editing', 'Book Editing', 'Writing Advice'],
            ['Translation', 'Localization', 'Transcription'],
            ['Brand Voice & Tone', 'Business Names & Slogans', 'Case Studies','Sales Copy','Email Copy','UX Writing'],
            ['Resume Writing', 'Cover Letters', 'LinkedIn Profiles'],
            ['Technical Writing', 'Grant Writing'],
            ['Producers & Composers', 'Songwriters', 'Singers & Vocalists','Jingle & Intros'],
            ['Mixing & Mastering', 'Audio Editing', 'Vocal Tuning'],
            ['Voice Over', 'Podcast Production', 'Audio Ads Production'],
            ['Online Music Lessons', 'Music Transcription', 'Music & Audio Advice'],
            ['Sound Design', 'Synth Presets', 'Meditation Music'],
            ['Business Registration', 'Business Plans', 'Startup Consulting','Market Research'],
            ['Virtual Assistant', 'E-Commerce Management', 'HR Consulting','Business Consulting','Supply Chain Management'],
            ['Applications & Registration', 'Legal Documents & Contracts', 'Legal Consulting'],
            ['Tax Consulting', 'Accounting & Bookkeeping', 'Financial Consulting','ERP Management'],
            ['Sales', 'Leads Generation', 'Call Center & Calling','Customer Care','CRM Management'],
            ['Fact Checking', 'Event Management', 'Game Concept Design','Other Service'],
            ['Machine Learning', 'NLP', 'Deep Learning','Generative Models','Computer Vision'],
            ['Data Entry', 'Data Mining & Scraping', 'Data Typing','Data Formatting & Cleaning'],
            ['Data Visualization', 'Data Annotation', 'Data Analytics','Dashboards'],
            ['Data Management', 'Data Engineering', 'Databases','Data Governance & Protection','Others Data'],
            ['Product Photographers', 'Food Photographers'],
            ['Portrait Photographers', 'Event Photographers','Lifestyle & Fashion Photographers'],
            ['Real Estate Photographers', 'Scenic Photographers'],
            ['Photography Advice', 'Photography Others'],
            ['AI Applications', 'AI Websites','ChatGPT Applications','AI Chatbots','AI Agents'],
            ['Data Science & AI', 'Data Model Training','Data Lebeling & Annotation','Data Analyticss'],
            ['Fact Checkingg', 'AI Content Editing','Custom Writing Promts','Photo Manipulation'],
            ['AI Artists', 'AI Music Videos','AI Video Art'],
        ];

        SubSubCategory::create([
            'name' => "Logo Design",
            'key'  => Str::slug("Logo Design"),
            'caption' => 'Stand out from the crowd with a logo that fits your brand personality.',
            'sub_category_id' => 1,
        ]);
        SubSubCategory::create([
            'name' =>"Website Design",
            'key'  => Str::slug("Website Design"),
            'caption' => 'Get a professional website that fits your brand.',
            'sub_category_id' => 2,
        ]);
        SubSubCategory::create([
            'name' => "Image Editing",
            'key'  => Str::slug("Image Editing"),
            'caption' => 'Get a professional image that fits your brand.',
            'sub_category_id' => 4,
        ]);

        $subCategoryId = 1;
        
        foreach ($subSubCategories as $subSubCategory) {
            foreach ($subSubCategory as $value) {
               SubSubCategory::create([
                    'name' => $value,
                    'key'  => Str::slug($value),
                    'sub_category_id' => $subCategoryId,
                ]);
                
            }
            $subCategoryId++;
        }
        
    }
}
