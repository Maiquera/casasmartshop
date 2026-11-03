@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp  
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
    </url>

    @foreach($categories as $category)
        <url>
            <loc>{{ route('categories.show', $category->slug) }}</loc>
            @if($category->updated_at)
                <lastmod>{{ $category->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            @endif
        </url>
    @endforeach

    @foreach($posts as $post)
        <url>
            <loc>{{ route('posts.show', $post->slug) }}</loc>
            <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach

</urlset>