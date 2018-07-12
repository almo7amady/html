<nav class="nav has-shadow">
    <div class="container">
        <a href="/" class="backend-logo">
            <img src="/imgs/cr-logo.png" alt="Case Root">
        </a>

        <div class="nav-right">
            <a class="nav-item is-tab {{ url()->current() == url('backend') ? ' is-active' : '' }}" href="/backend">
                Dashboard
            </a>

            <a class="nav-item is-tab {{ activeClass('backend/announcements') }}" href="/backend/announcements">
                Announcements
            </a>

            <a class="nav-item is-tab {{ activeClass('backend/emails') }}" href="/backend/emails">
                Emails
            </a>

            <a class="nav-item is-tab {{ activeClass('backend/firewall') }}" href="/backend/firewall">
                Firewall
            </a>

            <a class="nav-item is-tab {{ activeClass('backend/appointed-users') }}" href="/backend/appointed-users">
                Appointed Users
            </a>

            <a class="nav-item is-tab {{ activeClass('backend/server-control') }}" href="/backend/server-control">
                Server
            </a>

            <a class="nav-item is-tab {{ activeClass('backend/channels') }}" href="/backend/channels">
                Roots
            </a>

            <a class="nav-item is-tab {{ activeClass('backend/users') }}" href="/backend/users">
                Users
            </a>

            <a class="nav-item is-tab {{ activeClass('backend/spams') }}" href="/backend/spams/submissions">
                Reports
            </a>

            <a class="nav-item is-tab "
               href="/horizon">
                Horizon
            </a>
        </div>
    </div>
</nav>