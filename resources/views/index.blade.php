<x-layouts.main title="Create Message">
    <form action="{{ route('create') }}" method="POST" class="m-16 max-w-lg">
        @csrf

        <div class="space-y-4">
            <div class="space-y-1">
                <label for="name" style="display:block;">Name</label>
                <input type="text" name="name" id="name" class="w-full">
            </div>
            <div class="space-y-1">
                <label for="expires_at" style="display:block;">Expires at</label>
                <input type="datetime-local" name="expires_at" id="expires_at">
            </div>
            <div class="space-y-1">
                <label for="message" style="display:block;">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="w-full"></textarea>
            </div>
        </div>

        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 focus:outline-black font-medium text-white mt-4">
            Create
        </button>
    </form>
</x-layouts.main>
