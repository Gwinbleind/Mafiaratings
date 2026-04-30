const dictionary = {
  ru: {
    "nav.home": "Главная",
    "nav.ratings": "Рейтинги",
    "nav.clubs": "Клубы",
    "nav.leagues": "Лиги",
    "nav.gameDays": "Игровые дни",
    "nav.tournaments": "Турниры",
    "nav.series": "Серии",
    "nav.games": "Игры",
    "nav.seating": "Рассадки",
    "nav.reports": "Отчеты",
    "nav.resources": "Ресурсы",
    "nav.reports.compChart": "График соревнований",
    "nav.reports.referees": "Судьи",
    "nav.reports.nomWinners": "Победители номинаций",
    "nav.reports.byNumbers": "Цифры",
    "nav.reports.generalStats": "Общая статистика",
    "nav.resources.videos": "Видео",
    "nav.resources.photos": "Фото",
    "nav.resources.rulebook": "Правила",
    "btn.profile": "Профиль",
    "hero.title": "Рейтинги, турниры и статистика мафии",
    "hero.subtitle": "Следите за ближайшими событиями, динамикой рейтинга и топ-игроками в одном месте.",
    "hero.ctaEvents": "Смотреть турниры",
    "hero.ctaRating": "Смотреть рейтинг",
    "metrics.activeEvents": "Активных событий",
    "metrics.players": "Игроков в базе",
    "metrics.updated": "Обновлено",
    "events.title": "Турниры и сезоны",
    "events.filterNearest": "Ближайшие",
    "events.filterSeasons": "Сезоны",
    "events.filterCups": "Кубки",
    "changes.title": "Изменения рейтинга",
    "changes.report": "Подробный отчет",
    "changes.since": "С последнего обновления: 29 Apr 2026",
    "changes.list": "Все изменения",
    "changes.up": "Выросли",
    "changes.down": "Упали",
    "players.title": "Топ игроков",
    "players.player": "Игрок",
    "players.city": "Город",
    "players.points": "Очки",
    "mobile.tabs.events": "Турниры",
    "mobile.tabs.players": "Игроки",
    "mobile.tabs.changes": "Изменения"
  },
  en: {
    "nav.home": "Home",
    "nav.ratings": "Ratings",
    "nav.clubs": "Clubs",
    "nav.leagues": "Leagues",
    "nav.gameDays": "Game days",
    "nav.tournaments": "Tournaments",
    "nav.series": "Series",
    "nav.games": "Games",
    "nav.seating": "Seating",
    "nav.reports": "Reports",
    "nav.resources": "Resources",
    "nav.reports.compChart": "Competition chart",
    "nav.reports.referees": "Referees",
    "nav.reports.nomWinners": "Nomination winners",
    "nav.reports.byNumbers": "By numbers",
    "nav.reports.generalStats": "General stats",
    "nav.resources.videos": "Videos",
    "nav.resources.photos": "Photos",
    "nav.resources.rulebook": "Rulebook",
    "btn.profile": "Profile",
    "hero.title": "Mafia ratings, tournaments, and stats",
    "hero.subtitle": "Track upcoming events, rating movement, and top players in one place.",
    "hero.ctaEvents": "View events",
    "hero.ctaRating": "View rating",
    "metrics.activeEvents": "Active events",
    "metrics.players": "Players in database",
    "metrics.updated": "Updated",
    "events.title": "Events and seasons",
    "events.filterNearest": "Nearest",
    "events.filterSeasons": "Seasons",
    "events.filterCups": "Cups",
    "changes.title": "Latest rating changes",
    "changes.report": "Detailed report",
    "changes.since": "Since last update: Apr 29, 2026",
    "changes.list": "All changes",
    "changes.up": "Moved up",
    "changes.down": "Moved down",
    "players.title": "Best players",
    "players.player": "Player",
    "players.city": "City",
    "players.points": "Points",
    "mobile.tabs.events": "Events",
    "mobile.tabs.players": "Players",
    "mobile.tabs.changes": "Changes"
  }
};

function applyLanguage(lang) {
  document.documentElement.lang = lang;
  const words = dictionary[lang];
  document.querySelectorAll("[data-i18n]").forEach((el) => {
    const key = el.getAttribute("data-i18n");
    if (words[key]) {
      el.textContent = words[key];
    }
  });
  document.querySelectorAll(".lang-btn").forEach((btn) => {
    btn.classList.toggle("is-active", btn.dataset.lang === lang);
  });
}

document.querySelectorAll(".lang-btn").forEach((btn) => {
  btn.addEventListener("click", () => applyLanguage(btn.dataset.lang));
});

const menuToggle = document.getElementById("menuToggle");
const menuClose = document.getElementById("menuClose");
const mainNav = document.getElementById("mainNav");
if (menuToggle && mainNav) {
  menuToggle.addEventListener("click", () => {
    mainNav.classList.add("is-open");
    mainNav.setAttribute("aria-hidden", "false");
    menuToggle.setAttribute("aria-expanded", "true");
  });
}

if (menuClose && mainNav && menuToggle) {
  menuClose.addEventListener("click", () => {
    mainNav.classList.remove("is-open");
    mainNav.setAttribute("aria-hidden", "true");
    menuToggle.setAttribute("aria-expanded", "false");
  });
}

if (mainNav && menuToggle) {
  mainNav.addEventListener("click", (event) => {
    if (event.target === mainNav) {
      mainNav.classList.remove("is-open");
      mainNav.setAttribute("aria-hidden", "true");
      menuToggle.setAttribute("aria-expanded", "false");
    }
  });
}

document.querySelectorAll("[data-submenu-toggle]").forEach((toggle) => {
  toggle.addEventListener("click", () => {
    const key = toggle.dataset.submenuToggle;
    const submenu = document.querySelector(`[data-submenu="${key}"]`);
    const isOpen = toggle.classList.toggle("is-open");
    toggle.setAttribute("aria-expanded", String(isOpen));
    if (submenu) {
      submenu.classList.toggle("is-open", isOpen);
    }
  });
});

const mobileTabs = document.querySelectorAll(".mobile-tab");
const mobileSections = document.querySelectorAll(".mobile-section");

function showMobileSection(target) {
  mobileTabs.forEach((tab) => {
    tab.classList.toggle("is-active", tab.dataset.mobileTarget === target);
  });
  mobileSections.forEach((section) => {
    section.classList.toggle("is-active", section.dataset.mobileSection === target);
  });
}

mobileTabs.forEach((tab) => {
  tab.addEventListener("click", () => showMobileSection(tab.dataset.mobileTarget));
});
