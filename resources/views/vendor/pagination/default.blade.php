@if ($paginator->hasPages())

  <div class="card">
      <div class="card-content">
        <ul class="pagination is-centered" role="navigation" aria-label="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span class="pagination-previous" disabled>&laquo;</span></li>
        @else

            <li><a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" class="pagination-next" rel="next">&raquo;</a></li>
        @else
            <li class="disabled"><span class="pagination-next" disabled>&raquo;</span></li>
        @endif
    </ul></div></div>
@endif
