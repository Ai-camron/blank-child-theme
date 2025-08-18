Your Theme Child — starter

Folders/files:
- style.css               (child theme header + small CSS)
- functions.php           (enqueue parent/child CSS + JS, [year] shortcode)
- front-page.php          (custom Home template)
- assets/js/site.js       (console log to verify load)
- templates/              (empty; for block templates if you use theme.json)
- template-parts/         (empty; for partials)
- theme.json              (optional: editor design tokens)
- screenshot.png          (theme thumbnail in Appearance > Themes)

Install:
1) Unzip into: wp-content/themes/your-child/
2) In WP Admin: Appearance > Themes > activate "Your Theme Child"
3) Visit your site; open console to see 'Child theme JS loaded'

Notes:
- The parent template is set to 'astra'. Change 'Template:' in style.css if your parent theme folder is different.
- You can delete front-page.php if you prefer a static page assigned in Settings > Reading.
