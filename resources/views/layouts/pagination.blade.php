@if ($paginator->hasPages())
<div class="example-preview">
    <!--begin::Pagination-->
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex flex-wrap py-2 mr-3">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-icon btn-sm btn-light mr-2 my-1 page-link disabled">
                <i class="fa fa-arrow-left icon-xs"></i>
            </a>
            @else
            <a href="{{ $paginator->previousPageUrl() }}"
                class="btn btn-icon btn-sm btn-light mr-2 my-1 page-link">
                <i class="fa fa-arrow-left icon-xs"></i>
            </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
            @if (is_string($element))
            <a class="btn btn-icon btn-sm border-0 btn-light btn-hover-primary page-link-active mr-2 my-1 page-link">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <a class="btn btn-icon btn-sm border-0 btn-light page-link-active mr-2 my-1 page-link">{{ $page }}</a>
            @else
            <a href="{{ $url }}" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1 page-link">{{ $page }}</a>

            @endif
            @endforeach
            @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-icon btn-sm btn-light mr-2 my-1 page-link">
                <i class="fa fa-arrow-right icon-xs"></i>
            </a>
            @else
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-icon btn-sm btn-light mr-2 my-1 page-link disabled">
                <i class="fa fa-arrow-right icon-xs"></i>
            </a>
            @endif
        </div>
    </div>
    <!--end:: Pagination-->
</div>
@endif
