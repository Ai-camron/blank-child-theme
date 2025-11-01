# -BLANK- Child Theme

A streamlined WordPress child theme for the -BLANK- brand, built on top of the Astra parent theme. The repository now focuses on the files required to activate the theme while keeping extended documentation inside `docs/`.

## Features

- Accessible hero layout with keyboard-friendly skip links and focus states.
- WooCommerce-ready product grid and thumbnail sizing tuned for consistent ratios.
- Animation controls that respect `prefers-reduced-motion` preferences.
- Elementor helpers and brand animation layers separated into dedicated stylesheets.
- Theme supports registered for title tags, navigation menus, thumbnails, and WooCommerce templates.

## File Structure

```
blank-child-theme/
├── assets/
│   ├── css/
│   │   ├── brand-animation.css
│   │   ├── custom.css
│   │   └── elementor-custom.css
│   └── js/
│       └── site.js
├── docs/
│   ├── astra-integration.md
│   ├── hostinger-deployment-guide.md
│   ├── homepage-wireframe.html
│   ├── project-overview.md
│   ├── sitemap.md
│   └── woocommerce-integration-guide.md
├── errors/
├── templates/
├── woocommerce/
├── front-page.php
├── functions.php
├── screenshot.png
├── style.css
└── theme.json
```

Additional design references, templates, and deployment notes live in the `docs/` and `templates/` directories to keep the theme root uncluttered.

## Local Development

1. Install WordPress and the Astra parent theme.
2. Copy this repository into `wp-content/themes/blank-child-theme`.
3. Activate **-BLANK- Child** under **Appearance → Themes**.
4. Assign the "Home" page to use the **Front Page** template or rely on WordPress' front page setting.

## Scripts & Tests

This repository ships with automated linting and accessibility checks that rely only on built-in tooling. Run the suite with:

```bash
npm test
```

### What the test suite covers

- `scripts/lint-php.sh`: static analysis for PHP files using `php -l`.
- `node --check`: syntax validation for JavaScript assets.
- `python -m unittest`: structural and accessibility regression checks against HTML/CSS/JS fixtures.

## Accessibility & UX

The theme enforces focus rings for keyboard users, smooth skip-links, and reduced motion support. CSS utility classes and JavaScript helpers can be extended in `assets/css` and `assets/js` respectively.

## Documentation

More detailed guides are available in `docs/`:

- **project-overview.md** – Brand story, product lines, and positioning.
- **hostinger-deployment-guide.md** – Instructions for deploying to Hostinger or static hosting.
- **sitemap.md** – IA, flowcharts, and sitemap diagrams (Mermaid).
- **astra-integration.md** – Notes on tailoring Astra for the child theme.
- **woocommerce-integration-guide.md** – Product, cart, and checkout integration references.
- **homepage-wireframe.html** – Lightweight wireframe markup for prototyping.

Feel free to tailor or remove documents that are not needed for your project.
