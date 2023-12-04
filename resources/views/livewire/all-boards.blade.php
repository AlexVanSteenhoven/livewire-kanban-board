<div x-data="{
    @if(config('kanban-board.ui.theme') === 'auto')
        darkMode: window.matchMedia('(prefers-color-scheme: dark)').matches,
    @elseif(config('kanban-board.ui.theme') === 'dark')
        darkMode: true,
    @elseif(config('kanban-board.ui.theme') === 'light')
        darkMode: false,
    @endif
}">
    <div :class="{ 'dark': darkMode }">
        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
            <table class="min-w-full">
                <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                    <!-- Add more table headers here -->
                </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-900">
                @forelse ($boards as $board)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ $board->name }}</td>
                        <!-- Add more table data cells here -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="px-6 py-4 text-center text-sm text-gray-500">No boards available.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
