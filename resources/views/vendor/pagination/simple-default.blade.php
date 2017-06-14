@if ($paginator->hasPages())
    <ul class="pagination" style="width: 100%">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled pull-left"><span>@lang('pagination.previous')</span></li>
        @else
            <li class="pull-left"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pull-right"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
        @else
            <li class="disabled pull-right"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif
