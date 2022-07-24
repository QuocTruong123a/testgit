<form action="{{ route('email.post') }}" method="POST">
    @csrf
    <input name="email">
    <input name="content">
    <button type="submit">send</button>
</form>
