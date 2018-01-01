@if ($paginator->hasPages())
<nav class="pagination is-centered" role="navigation" aria-label="pagination">
  @if ($paginator->onFirstPage())

      <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous" rel="prev" disabled>Previous</a>

  @else

      <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous" rel="prev">Previous</a>
  @endif



  <ul class="pagination-list">
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li class="pagination-ellipsis">&hellip;<span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li>
                      <a class="pagination-link is-current">{{ $page }}</a>
                    </li>
                @else
                    <li><a href="{{ $url }}" class="pagination-link">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

  </ul>


  @if ($paginator->hasMorePages())
      <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next" rel="next">Next Page</a>
  @else
      <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next" rel="next" disabled>Next Page</a>
  @endif

</nav>
@endif
