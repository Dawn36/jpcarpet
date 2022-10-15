@if ($paginator->hasPages())
    <ul >
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="disabled" href="#" style="display: none" ><i class="fa fa-angle-left"></i></a>
            </li>
        @else
            <li class="page-item"><a class="" href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
        @endif
      
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-right"></i></a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="disabled" style="display: none" href="#"><i class="fa fa-angle-right"></i></a>
            </li>
        @endif
    </ul>
@endif