@if ($paginator->hasPages())
    <ul class="page-numbers__numbers">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-numbers__item page-numbers__item--active">
                                <a class="page-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-numbers__item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
                @if ($paginator->hasMorePages())
                    <li class="page-numbers__item page-numbers__item--arrow">
                        <a class="page-link" style="background-image: url('{{asset('frontend/assets')}}/images/svg-images/arrow-right.svg');" href="{{ $paginator->nextPageUrl() }}" rel="next"></a>
                    </li>
                @endif
    </ul>
@endif
