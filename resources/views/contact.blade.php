<!-- resources/views/contact.blade.php -->

<form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <div>
        <label for="name">الاسم:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="message">رسالة الاتصال:</label>
        <textarea id="message" name="message" required></textarea>
    </div>

    <div>
        <button type="submit">إرسال</button>
    </div>
</form>
