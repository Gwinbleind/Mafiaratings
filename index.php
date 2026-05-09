<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MafiaRatings - Ratings, tournaments, and stats</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="home-page">
    <header class="site-header">
        <div class="container header-inner">
            <a href="index.html" class="logo" aria-label="MafiaRatings home">
                <span class="logo-mark">MR</span>
                <span>MafiaRatings</span>
            </a>
            <div class="header-actions">
                <button class="lang-btn" data-lang="ru">RU</button>
                <button class="lang-btn is-active" data-lang="en">EN</button>
                <a class="profile-link login-link" href="#">
                    <span class="login-icon" aria-hidden="true">#</span>
                    <span data-i18n="btn.profile">Profile</span>
                </a>
            </div>
            <button class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false" aria-controls="mainNav">Menu</button>
        </div>
    </header>

    <nav class="main-nav-overlay" id="mainNav" aria-hidden="true">
        <div class="main-nav-panel">
            <button class="menu-close" id="menuClose" aria-label="Close menu">Close</button>
            <a href="index.html" class="menu-link root-link" data-i18n="nav.home">Home</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.ratings">Ratings</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.clubs">Clubs</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.leagues">Leagues</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.gameDays">Game days</a>
            <a href="tournaments.html" class="menu-link root-link" data-i18n="nav.tournaments">Tournaments</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.series">Series</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.games">Games</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.seating">Seating</a>

            <button class="menu-link has-children" data-submenu-toggle="reports" aria-expanded="false">
                <span data-i18n="nav.reports">Reports</span>
                <span class="submenu-arrow">v</span>
            </button>
            <div class="submenu" data-submenu="reports">
                <a href="#" data-i18n="nav.reports.compChart">Competition chart</a>
                <a href="#" data-i18n="nav.reports.referees">Referees</a>
                <a href="#" data-i18n="nav.reports.nomWinners">Nomination winners</a>
                <a href="#" data-i18n="nav.reports.byNumbers">By numbers</a>
                <a href="#" data-i18n="nav.reports.generalStats">General stats</a>
            </div>

            <button class="menu-link has-children" data-submenu-toggle="resources" aria-expanded="false">
                <span data-i18n="nav.resources">Resources</span>
                <span class="submenu-arrow">v</span>
            </button>
            <div class="submenu" data-submenu="resources">
                <a href="#" data-i18n="nav.resources.videos">Videos</a>
                <a href="#" data-i18n="nav.resources.photos">Photos</a>
                <a href="#" data-i18n="nav.resources.rulebook">Rulebook</a>
            </div>
        </div>
    </nav>

    <main class="page-main">
        <section class="home-hero">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <h1 data-i18n="hero.title">Mafia ratings, tournaments, and stats</h1>
                    <p data-i18n="hero.subtitle">Track competitive events, player form, and rating movement across the Mafia community in one sharp command center.</p>
                    <div class="hero-actions">
                        <a class="primary-action" href="#events" data-i18n="hero.ctaEvents">View events</a>
                        <a class="secondary-action" href="#players" data-i18n="hero.ctaRating">View rating</a>
                    </div>
                </div>

                <div class="hero-board" aria-label="MafiaRatings season snapshot">
                    <div class="board-topline">
                        <span>Season 2025-2026</span>
                        <strong>Live rating pulse</strong>
                    </div>
                    <div class="pulse-chart" aria-hidden="true">
                        <span style="--h: 42%"></span>
                        <span style="--h: 58%"></span>
                        <span style="--h: 36%"></span>
                        <span style="--h: 74%"></span>
                        <span style="--h: 63%"></span>
                        <span style="--h: 86%"></span>
                        <span style="--h: 52%"></span>
                        <span style="--h: 68%"></span>
                    </div>
                    <div class="hero-stats">
                        <div><span>Active events</span><strong>6</strong></div>
                        <div><span>Players</span><strong>2,685</strong></div>
                        <div><span>Updated</span><strong>Apr 29</strong></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container page-layout home-dashboard">
            <div class="mobile-section-tabs" id="mobileSectionTabs">
                <button class="mobile-tab is-active" data-mobile-target="events" data-i18n="mobile.tabs.events">Events</button>
                <button class="mobile-tab" data-mobile-target="players" data-i18n="mobile.tabs.players">Players</button>
                <button class="mobile-tab" data-mobile-target="changes" data-i18n="mobile.tabs.changes">Changes</button>
            </div>

            <div class="left-column">
                <section class="section mobile-section is-active" id="events" data-mobile-section="events">
                    <div class="section-head">
                        <div>
                            <h2 data-i18n="events.title">Tournaments</h2>
                            <p class="section-meta">Upcoming cups, active seasons, and recent finals.</p>
                        </div>
                        <a href="tournaments.html" class="section-action-btn" data-i18n="events.fullList">Detailed list</a>
                    </div>
                    <div class="event-grid">
                        <a href="tournament.html" class="event-card event-card-link event-card-featured">
                            <div class="event-title-row"><span class="mock-icon tournament-icon">01</span><h3>Freedom Cup</h3></div>
                            <span class="badge badge-upcoming" data-status="upcoming">upcoming</span>
                            <p>May 16-17, 2026</p>
                            <small>Maf is...</small>
                        </a>
                        <a href="tournament.html" class="event-card event-card-link">
                            <div class="event-title-row"><span class="mock-icon tournament-icon">02</span><h3>MAF Marathon 2026</h3></div>
                            <span class="badge badge-upcoming" data-status="upcoming">upcoming</span>
                            <p>May 16-17, 2026</p>
                            <small>LA MafClub</small>
                        </a>
                        <a href="tournament.html" class="event-card event-card-link">
                            <div class="event-title-row"><span class="mock-icon tournament-icon">03</span><h3>Cascadia Cup 2026</h3></div>
                            <span class="badge badge-upcoming" data-status="upcoming">upcoming</span>
                            <p>August 28-30, 2026</p>
                            <small>Mafia of Vancouver in Russian</small>
                        </a>
                        <a href="tournament.html" class="event-card event-card-link">
                            <div class="event-title-row"><span class="mock-icon tournament-icon">04</span><h3>Season 2025-2026</h3></div>
                            <span class="badge badge-active" data-status="active">active</span>
                            <p>2025-2026</p>
                            <small>American Mafia League</small>
                        </a>
                        <a href="tournament.html" class="event-card event-card-link">
                            <div class="event-title-row"><span class="mock-icon tournament-icon">05</span><h3>April 2026</h3></div>
                            <span class="badge badge-finished" data-status="finished">finished</span>
                            <p>April 2026</p>
                            <small>Maf is...</small>
                        </a>
                        <a href="tournament.html" class="event-card event-card-link">
                            <div class="event-title-row"><span class="mock-icon tournament-icon">06</span><h3>Birthday Cup</h3></div>
                            <span class="badge badge-upcoming" data-status="upcoming">upcoming</span>
                            <p>September 26-27, 2026</p>
                            <small>Maf is...</small>
                        </a>
                    </div>
                </section>

                <section class="section mobile-section movement-section" id="changes" data-mobile-section="changes">
                    <div class="section-head">
                        <div>
                            <h2 data-i18n="changes.title">Latest rating changes</h2>
                            <p class="section-meta" data-i18n="changes.since">Since last update: Apr 29, 2026</p>
                        </div>
                        <a class="text-link" href="#" data-i18n="changes.report">Detailed report</a>
                    </div>
                    <div class="change-col">
                        <h3 data-i18n="changes.list">All changes</h3>
                        <div class="change-row up"><span><span class="mock-icon player-icon">P</span><a class="player-link" href="player.html">Professor_</a></span><span>#66 -> #65 UP</span></div>
                        <div class="change-row up"><span><span class="mock-icon player-icon">E</span><a class="player-link" href="player.html">Eluha</a></span><span>#3 -> #2 UP</span></div>
                        <div class="change-row down"><span><span class="mock-icon player-icon">T</span><a class="player-link" href="player.html">TumASYAn</a></span><span>#85 -> #87 DOWN</span></div>
                        <div class="change-row down"><span><span class="mock-icon player-icon">S</span><a class="player-link" href="player.html">sher</a></span><span>#1 -> #2 DOWN</span></div>
                        <div class="change-row up"><span><span class="mock-icon player-icon">B</span><a class="player-link" href="player.html">Belarus</a></span><span>#12 -> #11 UP</span></div>
                        <div class="change-row down"><span><span class="mock-icon player-icon">A</span><a class="player-link" href="player.html">America</a></span><span>#7 -> #8 DOWN</span></div>
                    </div>
                </section>
            </div>

            <aside class="right-column">
                <section class="section mobile-section" id="players" data-mobile-section="players">
                    <div class="section-head">
                        <div>
                            <h2 data-i18n="players.title">Best players</h2>
                            <p class="section-meta">Current table leaders.</p>
                        </div>
                        <div class="event-filters">
                            <button class="chip is-active">Top 10</button>
                            <button class="chip">Top 25</button>
                        </div>
                    </div>
                    <div class="players-table-wrap">
                        <table class="players-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th data-i18n="players.player">Player</th>
                                    <th data-i18n="players.city">City</th>
                                    <th data-i18n="players.points">Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>1</td><td><span class="mock-icon player-icon">E</span><a class="player-link" href="player.html">Eluha</a></td><td>Sunnyvale, CA</td><td>2,685</td></tr>
                                <tr><td>2</td><td><span class="mock-icon player-icon">S</span><a class="player-link" href="player.html">sher</a></td><td>Chicago, IL</td><td>2,640</td></tr>
                                <tr><td>3</td><td><span class="mock-icon player-icon">P</span><a class="player-link" href="player.html">Pryanik</a></td><td>New York, NY</td><td>2,617</td></tr>
                                <tr><td>4</td><td><span class="mock-icon player-icon">E</span><a class="player-link" href="player.html">Eva</a></td><td>Sunnyvale, CA</td><td>2,575</td></tr>
                                <tr><td>5</td><td><span class="mock-icon player-icon">S</span><a class="player-link" href="player.html">Shnurok</a></td><td>Seattle, WA</td><td>2,525</td></tr>
                                <tr><td>6</td><td><span class="mock-icon player-icon">B</span><a class="player-link" href="player.html">Bandera</a></td><td>Miami, FL</td><td>2,504</td></tr>
                                <tr><td>7</td><td><span class="mock-icon player-icon">M</span><a class="player-link" href="player.html">Mer Goroda</a></td><td>Nashville, TN</td><td>2,472</td></tr>
                                <tr><td>8</td><td><span class="mock-icon player-icon">A</span><a class="player-link" href="player.html">America</a></td><td>New York, NY</td><td>2,451</td></tr>
                                <tr><td>9</td><td><span class="mock-icon player-icon">S</span><a class="player-link" href="player.html">Sladkiy</a></td><td>Miami, FL</td><td>2,449</td></tr>
                                <tr><td>10</td><td><span class="mock-icon player-icon">Y</span><a class="player-link" href="player.html">Yuvelir</a></td><td>Vancouver, BC</td><td>2,431</td></tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </aside>
        </div>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <p>© MafiaRatings</p>
            <nav>
                <a href="index.html">Home</a>
                <a href="#">Reports</a>
                <a href="#">Resources</a>
            </nav>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
