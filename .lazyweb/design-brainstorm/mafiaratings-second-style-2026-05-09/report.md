# Design Brainstorm: MafiaRatings Second Style

## TL;DR
Make the second concept feel like a modern tournament media desk: light, editorial, photo-led, and focused on where to play next and who is currently strongest.

## Which Ideas to Prototype

| Idea | Novelty | Feasibility | Verdict |
|------|---------|-------------|---------|
| Tournament photo carousel as primary discovery | Medium | High | Prototype |
| Player leaderboard with portrait-based rank rows | Medium | High | Prototype |
| Club venue carousel for organizer identity | High | Medium | Prototype |
| Short player story cards tied to rating movement | Medium | High | Prototype |

## The Obvious Approach
Most ratings sites lean on dense tables, muted admin UI, and small status badges. That works for repeat users, but it makes tournaments and clubs feel abstract.

## Cross-Pollination Ideas

### From Sports Media: Event Cards
**The Pattern:** Put upcoming events in large media cards with date, venue, and club identity immediately visible.
**Applied Here:** Upcoming tournaments become a horizontal rail with real event imagery, club names, and dates.
**Why It's a Zag:** The user can browse by atmosphere and urgency, not only by a database row.

### From Creator Platforms: Player Stories
**The Pattern:** Highlight people with portraits, short context, and a clear reason they are interesting now.
**Applied Here:** Top players and rising players get small editorial cards tied to rating movement.
**Why It's a Zag:** Ratings become more human without removing the numbers.

### From Travel Discovery: Club Spotlight
**The Pattern:** Treat places as destinations, using venue photos and organizer identity.
**Applied Here:** Clubs become a discovery carousel with city, venue mood, and upcoming tournament hooks.
**Why It's a Zag:** It helps players choose where to participate, not only what to watch.

## Implementation Notes
The prototype is implemented at `second/index.html` with a light palette, photo carousels, leader cards, club cards, and responsive behavior.

Lazyweb MCP screenshot tools were not available in this session, so this report records the applied direction rather than downloaded Lazyweb references.
