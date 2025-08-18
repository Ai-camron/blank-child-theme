# Astra Theme + Elementor Integration Guide

## File Structure
```
templates/
├── header-template.html      # Global header
├── footer-template.html      # Global footer
├── component-styles.css      # Essential CSS
└── elementor-integration.md  # This guide

patterns/
├── hero-section.html         # Hero pattern
├── features-section.html     # Features pattern
├── about-section.html        # About pattern
├── contact-section.html      # Contact pattern
└── product-grid-pattern.html # Product grid pattern
```

## Setup Instructions

### 1. Astra Theme Setup
1. Install Astra theme
2. Go to Appearance > Customize > Additional CSS
3. Copy and paste the content from `component-styles.css`

### 2. Header & Footer Templates
1. Go to Appearance > Theme Builder (Astra Pro)
2. Create new Header template
3. Copy HTML from `header-template.html`
4. Create new Footer template  
5. Copy HTML from `footer-template.html`

### 3. Elementor Page Patterns
1. Create new page with Elementor
2. Add HTML widget
3. Copy content from any pattern file (hero-section.html, etc.)
4. Save as Elementor template for reuse

## Usage Benefits
- **Modular**: Each section is independent
- **Reusable**: Copy patterns across pages
- **Consistent**: Unified design system
- **Maintainable**: Update one file, affects all instances
- **Responsive**: Built with responsive design

## File Purposes
- `templates/` = Global elements (header, footer, CSS)
- `patterns/` = Page sections that can be mixed and matched

## Elementor Integration
1. Use HTML widgets for custom patterns
2. Save patterns as Elementor templates
3. Use Elementor's global widgets for repeated elements
4. Combine with Elementor's native widgets as needed
