<nav>
    <ul>
        <a href="/home"><li>Home</li></a>
        <a href="/buku"><li>Buku</li></a>
    </ul>
    <form action="{{ route('logout') }}" method="POST" style="margin:0;">
        @csrf
        <button type="submit" style="background:none; border:none; cursor:pointer; color:red;">
            Logout
        </button>
    </form>
</nav>