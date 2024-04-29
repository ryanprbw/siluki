@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center pt-4">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600 dark:hover:text-gray-200 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring ring-gray-500 dark:ring-gray-500 dark:focus:ring-opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="{{ __('pagination.previous') }}" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-300 leading-5 rounded-md dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600 dark:hover:text-gray-200 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring ring-gray-500 dark:ring-gray-500 dark:focus:ring-opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="{{ __('pagination.next') }}" class="relative inline-flex items-center px-2 py-2 ml-3 text-sm font-medium text-gray-800 bg-white border border-gray-300 leading-5 rounded-md dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600 dark:hover:text-gray-200 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring ring-gray-500 dark:ring-gray-500 dark:focus:ring-opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}" class="relative inline-flex items-center px-2 py-2 ml-3 text-sm font-medium text-gray-800 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600 dark:hover:text-gray-200 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring ring-gray-500 dark:ring-gray-500 dark:focus:ring-opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                {!! __('pagination.next') !!}
            </span>
        @endif

        <div>
            <p class="pl-4 text-sm text-gray-800 dark:text-gray-400">
                Halaman {{ $paginator->currentPage() }} dari {{ $paginator->lastPage() }}, menampilkan {{ $paginator->perPage() }} Laporan dari {{ $paginator->total() }} total.
            </p>
        </div>
    </nav>
@endif
