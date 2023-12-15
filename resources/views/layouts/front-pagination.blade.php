@if ($paginator->hasPages())
        <div class="post-pagination">
            <ul class="page-numbers">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <li>
                    <a class="page-numbers">
                        <i class="flaticon2-left-arrow"></i>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="page-numbers">
                        <i class="flaticon2-left-arrow"></i>
                    </a>
                </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <li>
                    <a class="page-numbers active" aria-current="page">{{ $element }}</a>
                </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li>
                    <a class="page-numbers active">{{ $page }}</a>
                </li>
                @else
                <li>
                    <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                </li>
                @endif
                @endforeach
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-numbers">
                        <i class="flaticon2-right-arrow"></i>
                    </a>
                </li>
                @else
                <li>
                    <a class="page-numbers">
                        <i class="flaticon2-right-arrow"></i>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        @endif