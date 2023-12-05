<!-- resources/views/contact.blade.php -->

<form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <div>
        <label for="name">name</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">email</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="subject">subject</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="message">message</label>
        <textarea id="message" name="message" required></textarea>
    </div>

    <div>
        <button type="submit">إرسال</button>
    </div>
</form>
