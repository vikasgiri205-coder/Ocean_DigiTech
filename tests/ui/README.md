# UI/UX regression checks

Run with Apache serving this checkout at `http://localhost/Ocean_DigiTech-main/` and Node.js 22 or later:

```powershell
cd tests/ui
npm ci --ignore-scripts
npm test
npm run audit
npm run runtime
```

Set `SITE_URL` to use another local URL. The scripts expect the URL to end with `/`.

## Verified on 7 November 2026

- 35 passing interaction, structure, animation, SVG, and HTTP contract tests.
- 49 public page/valid editorial routes crawled; 206 unique local link and asset targets checked with no outstanding audit findings.
- Local script runtime checked on the homepage, website-design service page, and contact page.
- PHP syntax checked across the root templates and handlers.

Interaction tests cover desktop hover, category switching, mobile menu expansion, outside clicks, Escape, ArrowDown, resizing, scroll dismissal, flyout direction, field labels, service selection, website normalization, duplicate-submit prevention, success, server failure, malformed responses, and retained values on failure.

The tests execute shared controllers in jsdom without loading third-party scripts. Positive submission responses are mocked. Actual HTTP POST checks contain invalid data that fails validation before email delivery. The audit only requests local pages/assets; it does not follow external links or submit forms.

## Changes made

- Fixed dropdowns remaining open while scrolling, multiple categories remaining expanded, arrow-only category controls, and laptop flyout clipping.
- Added accessible inline form feedback, pending state, retry handling, timeout handling, and persistent field labels.
- Removed the nonfunctional footer newsletter and placeholder social links.
- Replaced broken sidebar forms with a direct link to the working contact page; replaced placeholder service links with real destinations.
- Corrected old account-page links and redirected generic legacy service/project templates to current overview pages.
- Replaced the value-proposition carousel with a responsive static grid and disabled remaining carousel autoplay.
- Increased faint text readability, added telephone/email links, and prevented clipping of case-study illustrations.

## Limits

The computer-use runtime could not initialize (`failed to write kernel assets`). These are DOM, source, and HTTP checks, not browser screenshot or layout-engine tests. Visual layout/overflow at 320, 390, 768, 1024, and 1440 pixels remains unverified. Real email delivery also remains unverified. Existing authentication template backends and third-party widgets/integrations are outside these test assertions.

`audit-results.json` contains the most recent crawl result. The audit exits with an error if it finds a regression. Dependencies/cache directories are excluded by the local `.gitignore`.

## Latest visual refinements

Typography uses 18px main text and a 16px desktop menu, with responsive adjustments. Once-only entrance animations and hover effects respect reduced motion and leave content visible without IntersectionObserver.

General interface icons are now local Lucide SVG symbols; brand marks use local Font Awesome brand SVGs. Attribution and license files are in `img/icons/`. Rebuild the sprite from the pinned packages with `node scripts/build-icons.cjs` from the repository root. The SVG markup does not depend on JavaScript or external icon fonts.

The homepage hero caption, secondary CTA, Why Choose Us layout, blog cards, footer, service FAQs, and metric cards have been refined. Service FAQs use native details/summary controls. Action buttons use the logo-inspired purple-to-pink gradient; the sampled gradient stops have white-text contrast ratios from 4.95:1 to 7.11:1. Existing metrics were retained.
