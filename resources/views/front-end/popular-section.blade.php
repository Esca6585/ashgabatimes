<div class="flownews-vc-element-posts-carousel-title-box title-box-1">
    <h2>{{ __('Popular') }} {{ __('News') }}</h2>
</div>
<div
    class="flownews-vc-element-posts-carousel flownews-posts-carousel-type1 flownews-vc-element-posts-carousel-1 flownews-vc-element-posts-carousel-item-show-2 element-no-padding">

    @foreach($contents as $key => $content)
    <article class="item-posts first-element-posts">
        <div class="article-image"><a href="{{ route('single-page', [$content->id, Str::slug($content->title)] ) }}">
            <img class="flownews-vc-thumbs"
                    src="{{ asset($content->image) }}" alt="{{ asset($content->image) }}"></a>
            <div class="article-category"><a href="{{ route('category-page', [ $content->category->id, $content->category->name ]) }}"
                    title="{{ $content->category->name }}">{{ $content->category->name }}</a>
                <a href="{{ route('category-page', [ $content->category->id, $content->category->name ]) }}"><i class="fa fa-mail-forward"></i></a>
            </div>
        </div>
        <div class="article-info">
            <div class="article-info-top">
                <div class="article-data">
                    <i class="fa fa-calendar-o"></i>
                    {{ $now->diffForHumans($content->updated_at) }}
                </div>
                <div class="article-separator">|</div>
                <div class="article-comments"><i class="fa fa-eye"></i>{{ $content->view }}</div>
                <div class="article-comments favorite-red
                            @if(Session::get('favorite'))
                                @foreach(Session::get('favorite') as $favorite)
                                    @if($favorite == $content->id)
                                        text-danger
                                    @endif
                                @endforeach
                            @endif
                            "
                    onclick="addToFavorite({{ $content->id }})">
                    <button class="favorite fa fa-heart"></button>
                    <span class="favorite-txt">Избранный</span>
                </div>
                <div class="flownews-clear"></div>
            </div>
            <div class="article-info-bottom">
                <h3 class="article-title"><a href="{{ route('single-page', [$content->id, Str::slug($content->title)] ) }}">{{ $content->title }}</a>
                </h3>
                <div class="flownews-clear"></div>
            </div>
        </div>
    </article>
    @endforeach

</div>
