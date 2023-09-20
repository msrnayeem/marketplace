@if ($paginator->lastPage() > 1)
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item {{ ($paginator->currentPage() == 1) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $paginator->url(1) }}" tabindex="-1">Prev</a>
            </li>
            @if ($paginator->currentPage() > 3)
                <li class="page-item"><a class="page-link" href="{{ $paginator->url(1) }}">1</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif
            @for ($i = max(1, $paginator->currentPage() - 1); $i <= min($paginator->lastPage(), $paginator->currentPage() + 1); $i++)
                <li class="page-item {{ ($paginator->currentPage() == $i) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            @if ($paginator->currentPage() < $paginator->lastPage() - 2)
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
            @endif
            <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $paginator->url($paginator->currentPage() + 1) }}">Next</a>
            </li>
        </ul>
    </nav>
@endif
