<nav class="navbar navbar-expand-lg" 
     style="
        background: linear-gradient(135deg, #6fb8ff 0%, #a4dbff 100%);
        box-shadow: 0 4px 12px rgba(0, 90, 160, 0.25);
     ">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="/" style="font-size: 1.5rem;">
            🍮 Katalog TropiSweet 🍮
        </a>

        @if (Request::is('/'))
        @else
            <div>
                <a href="/dashboard?username={{ request('username') }}" class="btn me-2"
                   style="border: 2px solid #ffffff; color:#ffffff; border-radius: 10px; font-weight:500;">
                   Dashboard
                </a>

                <a href="/pengelolaan?username={{ request('username') }}" class="btn me-2"
                   style="border: 2px solid #ffffff; color:#ffffff; border-radius: 10px; font-weight:500;">
                   Product
                </a>

                <a href="/profile?username={{ request('username') }}" class="btn me-2"
                   style="border: 2px solid #ffffff; color:#ffffff; border-radius: 10px; font-weight:500;">
                   Profile
                </a>
            </div>
        @endif
    </div>
</nav>
