<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<sitemapindex xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">
@foreach($items as $item)
    <sitemap>
        <loc>{{route($item->slug)}}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime(now())) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </sitemap>
@endforeach
    <sitemap>
        <loc>{{route('sitemap.services')}}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime(now())) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </sitemap>
    <sitemap>
        <loc>{{route('sitemap.blogs')}}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime(now())) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </sitemap>

</sitemapindex>