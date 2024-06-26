<?php

use function Livewire\Volt\{state, computed, mount};
use function Laravel\Folio\name;
use App\Models\Post;
use App\Models\Category;
use Carbon\Carbon;

name('categories.index');

state([
    'count' => 1,
    'categories' => fn() => Category::with('posts')->get(),
    'trendingPosts' => fn() => Post::orderByDesc('viewer')->where('status', true)->limit(5)->select('title', 'id', 'category_id', 'thumbnail', 'slug')->get(),
    'totalPostCount' => fn() => Post::where('status', true)->count(),
    'categoriesName',
]);

mount(function () {
    $keywords = ['berita utama', 'terkini', 'Sibanyu', 'informasi', 'kategori'];

    foreach ($this->categories as $category) {
        $keywords[] = $category->name;
    }

    $this->categoriesName = implode(', ', $keywords);
});

$increment = function () {
    $this->count++;
    $this->dispatch('side-adverts-updated');
};

$limitPages = computed(function () {
    return $this->count * 6;
});

$posts = computed(function () {
    return Post::with('category')
        ->where('created_at', '>=', Carbon::now()->subWeek(4))
        ->where('status', true)
        ->select('slug', 'title', 'thumbnail', 'content', 'viewer', 'category_id', 'created_at')
        ->limit($this->limitPages)
        ->latest()
        ->get();
});

?>

<x-guest-layout>

    @livewire('adverts.top')

    @volt
    <div>
        <x-seo-tags :title="'Berita Utama - Portal Berita Terkini Sibanyu'"
            :description="'Temukan berita utama terbaru dari berbagai kategori di Portal Berita Terkini Sibanyu.'"
            :keywords="$categoriesName" />

        <div class="container">
            <livewire:partials.trending-tittle>
        </div>

        <div class="container">
            <div id="trendingPosts" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach ($trendingPosts as $index => $item)
                    <button type="button" data-bs-target="#trendingPosts" data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($trendingPosts as $index => $item)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" data-bs-interval="10000">
                        <img src="{{ Storage::url($item->thumbnail) }}" class="d-block w-100 object-fit-cover rounded"
                            height="600" alt="{{ $item->title }}" loading="lazy">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>
                                <span
                                    class="badge bg-primary badge-xl text-uppercase">{{ $item->category->name }}</span>

                            </h3>
                            <h3 class="text-white">
                                <a href="{{ route('news.read', ['post' => $item->slug]) }}">
                                    {{ $item->title }}
                                </a>
                            </h3>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#trendingPosts"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rounded-5" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#trendingPosts"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon rounded-5" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <section class="blog_area section-padding pt-5">
            <div class="container">
                <div class="row">
                    <h4 class="widget_title mb-2 fw-bold text-capitalize">Berita Utama Mingguan </h4>
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">

                            @foreach ($this->posts as $post)
                            <article class="blog_item rounded">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ Storage::url($post->thumbnail) }}"
                                        alt="{{ $post->title }}" loading="lazy"
                                        style="object-fit: cover; width: 100%;height: 450px">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{ $post->created_at->format('d') }}</h3>
                                        <p>{{ $post->created_at->format('M') }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('news.read', ['post' => $post->slug]) }}">
                                        <h2>{{ $post->title }}</h2>
                                    </a>

                                    <p>{!! Str::limit($post->content, 250, '...') !!}</p>

                                    <ul class="blog-info-link">
                                        <li>
                                            <a class="text-capitalize">
                                                <i class="bx bx-category"></i>
                                                {{ $post->category->name }}</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bx bx-happy-heart-eyes"></i> {{ $post->viewer }}
                                                Dilihat</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            @endforeach
                            <div class="container text-center">
                                <button
                                    class="{{ $this->posts->count() >= $totalPostCount ? 'd-none' : 'genric-btn primary rounded mb-5' }}"
                                    wire:click="increment" wire:loading.attr="disabled">
                                    Tampilkan Lagi
                                </button>
                                <i wire:loading class='bx bx-loader bx-spin'></i>

                                <div class="d-none d-lg-block py-5">
                                    @livewire('adverts.bottom')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar sticky-top" style="z-index: 1;">

                            <aside class="single_sidebar_widget post_category_widget bg-body pt-0">
                                <h4 class="widget_title mb-2 fw-bold">Kategori Berita</h4>

                                <ul class="list cat-list border-0">
                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('categories.slug', ['category' => $category->slug]) }}"
                                            class="d-flex justify-content-between">
                                            <p class="text-capitalize">{{ $category->name }} </p>
                                            <p>( {{ $category->posts->count() }} )</p>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>

                            </aside>

                            <aside class="single_sidebar_widget popular_post_widget rounded bg-body">
                                <!-- Related News -->
                                <livewire:partials.related-news>
                                    <!-- New Poster -->
                                    @livewire('adverts.side')
                                    <div class="d-block d-lg-none">
                                        @livewire('adverts.bottom')
                                    </div>
                            </aside>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    @endvolt

</x-guest-layout>
