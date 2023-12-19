<div class="flownews-element-top-content flownews-top-content-layout1 element-no-padding">

    @foreach($itemHeaders as $key => $itemHeader)
    <article class="item-header

        @if($key == 0)
            col-xs-7
        @elseif($key == 1)
            col-xs-5
        @else
            col-xs-2
        @endif
    "
    >
        <a href="{{ route('single-page', $itemHeader->id ) }}">
            <img src="{{ asset($itemHeader->image) }}" alt="{{ asset($itemHeader->image) }}">
        </a>

                <div class="article-info">
            <div class="article-info-top">
                <h2 class="article-title">
                    <a href="{{ route('single-page', $itemHeader->id ) }}">{{ $itemHeader->title }}</a>
                </h2>
                <div class="article-category"><a href="{{ route('category-page', [ $itemHeader->category_id, $itemHeader->category->name ]) }}"
                            title="{{ $itemHeader->category->name }}">{{ $itemHeader->category->name }}</a></div>
                <div class="flownews-clear"></div>
            </div>
            <div class="article-info-bottom">
                <div class="article-data"><i class="fa fa-calendar-o"></i>{{ $now->diffForHumans($itemHeader->updated_at) }}</div>
                <div class="article-separator">|</div>
                <div class="article-comments"><i class="fa fa-eye"></i>{{ $itemHeader->view }}</div>
                <div class="article-comments favorite-red
                            @if(Session::get('favorite'))
                                @foreach(Session::get('favorite') as $favorite)
                                    @if($favorite == $itemHeader->id)
                                        text-danger
                                    @endif
                                @endforeach
                            @endif
                            "
                    onclick="addToFavorite({{ $itemHeader->id }})">
                    <button class="favorite fa fa-heart"></button>
                    <span class="favorite-txt">{{ __('Favorite') }}</span>
                </div>
                <div class="flownews-clear"></div>
            </div>
        </div>
        <a href="{{ route('single-page', $itemHeader->id ) }}" class="header-pattern"></a>
    </article>
    @endforeach

</div>
