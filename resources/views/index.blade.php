<form action="{{ route('create') }}" method="POST">
    @csrf

    <div style="margin-bottom: 10px;">
        <label for="name" style="display:block;">Name</label>
        <input type="text" name="name" id="name">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="expires_at" style="display:block;">Expires at</label>
        <input type="datetime-local" name="expires_at" id="expires_at">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="message" style="display:block;">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <button>Create</button>
</form>
