<?php
$events = [
    ["title" => "Freedom Cup", "status" => "upcoming", "dates" => "May 16-17, 2026", "organizer" => "Maf is..."],
    ["title" => "MAF Marathon 2026", "status" => "upcoming", "dates" => "May 16-17, 2026", "organizer" => "LA MafClub"],
    ["title" => "Cascadia Cup 2026", "status" => "upcoming", "dates" => "August 28-30, 2026", "organizer" => "Mafia of Vancouver in Russian"],
    ["title" => "Season 2025-2026", "status" => "active", "dates" => "2025-2026", "organizer" => "American Mafia League"],
    ["title" => "April 2026", "status" => "finished", "dates" => "April 2026", "organizer" => "Maf is..."],
    ["title" => "Birthday Cup", "status" => "upcoming", "dates" => "September 26-27, 2026", "organizer" => "Maf is..."],
];

$ratingChanges = [
    ["name" => "Professor_", "from" => 66, "to" => 65, "direction" => "up", "symbol" => "▲"],
    ["name" => "Eluha", "from" => 3, "to" => 2, "direction" => "up", "symbol" => "▲"],
    ["name" => "TumASYAn", "from" => 85, "to" => 87, "direction" => "down", "symbol" => "▼"],
    ["name" => "sher", "from" => 1, "to" => 2, "direction" => "down", "symbol" => "▼"],
    ["name" => "Belarus", "from" => 12, "to" => 11, "direction" => "up", "symbol" => "▲"],
    ["name" => "America", "from" => 7, "to" => 8, "direction" => "down", "symbol" => "▼"],
];

$players = [
    ["rank" => 1, "name" => "Eluha", "city" => "Sunnyvale, CA", "points" => 2685],
    ["rank" => 2, "name" => "sher", "city" => "Chicago, IL", "points" => 2640],
    ["rank" => 3, "name" => "Пряник", "city" => "New York, NY", "points" => 2617],
    ["rank" => 4, "name" => "Eva", "city" => "Sunnyvale, CA", "points" => 2575],
    ["rank" => 5, "name" => "Шнурок", "city" => "Seattle, WA", "points" => 2525],
    ["rank" => 6, "name" => "Бандера", "city" => "Miami, FL", "points" => 2504],
    ["rank" => 7, "name" => "Мэр города", "city" => "Nashville, TN", "points" => 2472],
    ["rank" => 8, "name" => "America", "city" => "New York, NY", "points" => 2451],
    ["rank" => 9, "name" => "Sladkiy", "city" => "Miami, FL", "points" => 2449],
    ["rank" => 10, "name" => "Ювелир", "city" => "Vancouver, BC", "points" => 2431],
    ["rank" => 11, "name" => "Belarus", "city" => "Vienna, VA", "points" => 2348],
    ["rank" => 12, "name" => "tokyo", "city" => "Miami, FL", "points" => 2316],
    ["rank" => 13, "name" => "ПК", "city" => "Garland, TX", "points" => 2304],
    ["rank" => 14, "name" => "ART LA", "city" => "Los Angeles, CA", "points" => 2300],
    ["rank" => 15, "name" => "Sasha Sasha", "city" => "Kirkland, WA", "points" => 2300],
    ["rank" => 16, "name" => "Luso", "city" => "Los Angeles, CA", "points" => 2282],
    ["rank" => 17, "name" => "filister", "city" => "Indianapolis, IN", "points" => 2276],
    ["rank" => 18, "name" => "Batman", "city" => "Staten Island, NY", "points" => 2269],
    ["rank" => 19, "name" => "Solaris", "city" => "Montreal, QC", "points" => 2246],
    ["rank" => 20, "name" => "InnaChe", "city" => "San Francisco, CA", "points" => 2215],
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
            <button class="menu-toggle" id="menuToggle" aria-label="Open menu">☰</button>
            <nav class="main-nav" id="mainNav">
                <a href="#" data-i18n="nav.home">Home</a>
                <a href="#" data-i18n="nav.reports">Reports</a>
                <a href="#" data-i18n="nav.resources">Resources</a>
            </nav>
            <div class="header-actions">
                <button class="lang-btn is-active" data-lang="ru">RU</button>
                <button class="lang-btn" data-lang="en">EN</button>
                <a class="profile-link" href="#" data-i18n="btn.profile">Profile</a>
            </div>
        </div>
    </header>

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
                        <h2 data-i18n="events.title">Турниры и сезоны</h2>
                    </div>
                    <div class="event-grid">
                        <?php foreach ($events as $event): ?>
                            <article class="event-card">
                                <div class="event-title-row">
                                    <span class="mock-icon tournament-icon">🏆</span>
                                    <h3><?= htmlspecialchars($event["title"]); ?></h3>
                                </div>
                                <span class="badge badge-<?= htmlspecialchars($event["status"]); ?>" data-status="<?= htmlspecialchars($event["status"]); ?>">
                                    <?= htmlspecialchars($event["status"]); ?>
                                </span>
                                <p><?= htmlspecialchars($event["dates"]); ?></p>
                                <small><?= htmlspecialchars($event["organizer"]); ?></small>
                            </article>
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
                                <span><span class="mock-icon player-icon">👤</span><?= htmlspecialchars($row["name"]); ?></span>
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
                                        <td><span class="mock-icon player-icon">👤</span><?= htmlspecialchars($player["name"]); ?></td>
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
