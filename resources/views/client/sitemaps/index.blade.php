<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<sitemapindex xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">

    <sitemap>
        <loc>{{url('sitemap/static-pages')}}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime(now())) }}</lastmod>
    </sitemap>
    
    <sitemap>
        <loc>{{url('sitemap/locations')}}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime(now())) }}</lastmod>
    </sitemap>
    
    <sitemap>
        <loc>{{url('sitemap/blogs')}}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime(now())) }}</lastmod>
    </sitemap>
    
</sitemapindex>