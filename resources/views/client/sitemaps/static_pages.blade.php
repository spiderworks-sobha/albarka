<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

@foreach($items as $item)

    <url>
        <loc>{{route($item->slug)}}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime(now())) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
@endforeach

</urlset>