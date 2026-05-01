<?php
$events = [
    ["title" => "Freedom Cup", "status" => "upcoming", "dates" => "May 16-17, 2026", "organizer" => "Maf is...", "href" => "tournament.html"],
    ["title" => "MAF Marathon 2026", "status" => "upcoming", "dates" => "May 16-17, 2026", "organizer" => "LA MafClub", "href" => "tournament.html"],
    ["title" => "Cascadia Cup 2026", "status" => "upcoming", "dates" => "August 28-30, 2026", "organizer" => "Mafia of Vancouver in Russian", "href" => "tournament.html"],
    ["title" => "Season 2025-2026", "status" => "active", "dates" => "2025-2026", "organizer" => "American Mafia League", "href" => "tournament.html"],
    ["title" => "April 2026", "status" => "finished", "dates" => "April 2026", "organizer" => "Maf is...", "href" => "tournament.html"],
    ["title" => "Birthday Cup", "status" => "upcoming", "dates" => "September 26-27, 2026", "organizer" => "Maf is...", "href" => "tournament.html"],
];

$ratingChanges = [
    ["name" => "Professor_", "from" => 66, "to" => 65, "direction" => "up", "symbol" => "▲", "href" => "player.html"],
    ["name" => "Eluha", "from" => 3, "to" => 2, "direction" => "up", "symbol" => "▲", "href" => "player.html"],
    ["name" => "TumASYAn", "from" => 85, "to" => 87, "direction" => "down", "symbol" => "▼", "href" => "player.html"],
    ["name" => "sher", "from" => 1, "to" => 2, "direction" => "down", "symbol" => "▼", "href" => "player.html"],
    ["name" => "Belarus", "from" => 12, "to" => 11, "direction" => "up", "symbol" => "▲", "href" => "player.html"],
    ["name" => "America", "from" => 7, "to" => 8, "direction" => "down", "symbol" => "▼", "href" => "player.html"],
];

$players = [
    ["rank" => 1, "name" => "Eluha", "city" => "Sunnyvale, CA", "points" => 2685, "href" => "player.html"],
    ["rank" => 2, "name" => "sher", "city" => "Chicago, IL", "points" => 2640, "href" => "player.html"],
    ["rank" => 3, "name" => "Пряник", "city" => "New York, NY", "points" => 2617, "href" => "player.html"],
    ["rank" => 4, "name" => "Eva", "city" => "Sunnyvale, CA", "points" => 2575, "href" => "player.html"],
    ["rank" => 5, "name" => "Шнурок", "city" => "Seattle, WA", "points" => 2525, "href" => "player.html"],
    ["rank" => 6, "name" => "Бандера", "city" => "Miami, FL", "points" => 2504, "href" => "player.html"],
    ["rank" => 7, "name" => "Мэр города", "city" => "Nashville, TN", "points" => 2472, "href" => "player.html"],
    ["rank" => 8, "name" => "America", "city" => "New York, NY", "points" => 2451, "href" => "player.html"],
    ["rank" => 9, "name" => "Sladkiy", "city" => "Miami, FL", "points" => 2449, "href" => "player.html"],
    ["rank" => 10, "name" => "Ювелир", "city" => "Vancouver, BC", "points" => 2431, "href" => "player.html"],
    ["rank" => 11, "name" => "Belarus", "city" => "Vienna, VA", "points" => 2348, "href" => "player.html"],
    ["rank" => 12, "name" => "tokyo", "city" => "Miami, FL", "points" => 2316, "href" => "player.html"],
    ["rank" => 13, "name" => "ПК", "city" => "Garland, TX", "points" => 2304, "href" => "player.html"],
    ["rank" => 14, "name" => "ART LA", "city" => "Los Angeles, CA", "points" => 2300, "href" => "player.html"],
    ["rank" => 15, "name" => "Sasha Sasha", "city" => "Kirkland, WA", "points" => 2300, "href" => "player.html"],
    ["rank" => 16, "name" => "Luso", "city" => "Los Angeles, CA", "points" => 2282, "href" => "player.html"],
    ["rank" => 17, "name" => "filister", "city" => "Indianapolis, IN", "points" => 2276, "href" => "player.html"],
    ["rank" => 18, "name" => "Batman", "city" => "Staten Island, NY", "points" => 2269, "href" => "player.html"],
    ["rank" => 19, "name" => "Solaris", "city" => "Montreal, QC", "points" => 2246, "href" => "player.html"],
    ["rank" => 20, "name" => "InnaChe", "city" => "San Francisco, CA", "points" => 2215, "href" => "player.html"],
];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MafiaRatings - Homepage Mockup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a href="#" class="logo">MafiaRatings</a>
            <div class="header-actions">
                <button class="lang-btn is-active" data-lang="ru">RU</button>
                <button class="lang-btn" data-lang="en">EN</button>
                <a class="profile-link login-link" href="#"><span class="login-icon">🔑</span><span data-i18n="btn.profile">Profile</span></a>
            </div>
            <button class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false" aria-controls="mainNav">☰</button>
        </div>
    </header>

    <nav class="main-nav-overlay" id="mainNav" aria-hidden="true">
        <div class="main-nav-panel">
            <button class="menu-close" id="menuClose" aria-label="Close menu">✕</button>
            <a href="index.html" class="menu-link root-link" data-i18n="nav.home">Home</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.ratings">Рейтинги</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.clubs">Клубы</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.leagues">Лиги</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.gameDays">Игровые дни</a>
            <a href="tournaments.html" class="menu-link root-link" data-i18n="nav.tournaments">Турниры</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.series">Серии</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.games">Игры</a>
            <a href="#" class="menu-link root-link" data-i18n="nav.seating">Рассадки</a>

            <button class="menu-link has-children" data-submenu-toggle="reports" aria-expanded="false">
                <span data-i18n="nav.reports">Reports</span>
                <span class="submenu-arrow">▾</span>
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
                <span class="submenu-arrow">▾</span>
            </button>
            <div class="submenu" data-submenu="resources">
                <a href="#" data-i18n="nav.resources.videos">Videos</a>
                <a href="#" data-i18n="nav.resources.photos">Photos</a>
                <a href="#" data-i18n="nav.resources.rulebook">Rulebook</a>
            </div>
        </div>
    </nav>

    <main class="page-main">
        <div class="container page-layout">
            <div class="mobile-section-tabs" id="mobileSectionTabs">
                <button class="mobile-tab is-active" data-mobile-target="events" data-i18n="mobile.tabs.events">Турниры</button>
                <button class="mobile-tab" data-mobile-target="players" data-i18n="mobile.tabs.players">Игроки</button>
                <button class="mobile-tab" data-mobile-target="changes" data-i18n="mobile.tabs.changes">Изменения</button>
            </div>
            <div class="left-column">
                <section class="section mobile-section is-active" id="events" data-mobile-section="events">
                    <div class="section-head">
                        <h2 data-i18n="events.title">Турниры</h2>
                        <a href="tournaments.html" class="section-action-btn" data-i18n="events.fullList">Подробный список</a>
                    </div>
                    <div class="event-grid">
                        <?php foreach ($events as $event): ?>
                            <a href="<?= htmlspecialchars($event["href"]); ?>" class="event-card event-card-link">
                                <div class="event-title-row">
                                    <span class="mock-icon tournament-icon">🏆</span>
                                    <h3><?= htmlspecialchars($event["title"]); ?></h3>
                                </div>
                                <span class="badge badge-<?= htmlspecialchars($event["status"]); ?>" data-status="<?= htmlspecialchars($event["status"]); ?>">
                                    <?= htmlspecialchars($event["status"]); ?>
                                </span>
                                <p><?= htmlspecialchars($event["dates"]); ?></p>
                                <small><?= htmlspecialchars($event["organizer"]); ?></small>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section class="section mobile-section" id="changes" data-mobile-section="changes">
                    <div class="section-head">
                        <h2 data-i18n="changes.title">Изменения рейтинга</h2>
                        <a class="text-link" href="#" data-i18n="changes.report">Подробный отчет</a>
                    </div>
                    <p class="section-meta" data-i18n="changes.since">С последнего обновления: 29 Apr 2026</p>
                    <div class="change-col">
                        <h3 data-i18n="changes.list">Все изменения</h3>
                        <?php foreach ($ratingChanges as $row): ?>
                            <div class="change-row <?= htmlspecialchars($row["direction"]); ?>">
                                <span><span class="mock-icon player-icon">👤</span><a class="player-link" href="<?= htmlspecialchars($row["href"]); ?>"><?= htmlspecialchars($row["name"]); ?></a></span>
                                <span>#<?= (int) $row["from"]; ?> -> #<?= (int) $row["to"]; ?> <?= htmlspecialchars($row["symbol"]); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>

            <aside class="right-column">
                <section class="section mobile-section" id="players" data-mobile-section="players">
                    <div class="section-head">
                        <h2 data-i18n="players.title">Топ игроков</h2>
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
                                    <th data-i18n="players.player">Игрок</th>
                                    <th data-i18n="players.city">Город</th>
                                    <th data-i18n="players.points">Очки</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($players as $player): ?>
                                    <tr>
                                        <td><?= (int) $player["rank"]; ?></td>
                                        <td><span class="mock-icon player-icon">👤</span><a class="player-link" href="<?= htmlspecialchars($player["href"]); ?>"><?= htmlspecialchars($player["name"]); ?></a></td>
                                        <td><?= htmlspecialchars($player["city"]); ?></td>
                                        <td><?= number_format((int) $player["points"]); ?></td>
                                    </tr>
                                <?php endforeach; ?>
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
                <a href="#">Home</a>
                <a href="#">Reports</a>
                <a href="#">Resources</a>
            </nav>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
