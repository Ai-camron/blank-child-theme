# -BLANK- Global Style System for Astra & Elementor

## Overview
This global style system provides a complete design framework for the -BLANK- fashion brand, optimized for Astra theme and Elementor page builder integration.

## Design Philosophy
- **Dark Theme**: Black background with white text for premium feel
- **Glass Morphism**: Translucent cards with backdrop blur effects
- **Minimalism**: Clean, uncluttered design focusing on content
- **Floating Elements**: Subtle animations for modern appeal

## Color Palette

### Primary Colors
- **Primary Black**: `#000000` - Main background
- **Pure White**: `#ffffff` - Text and accents
- **Text Secondary**: `rgba(255, 255, 255, 0.8)` - Body text
- **Glass Effect**: `rgba(255, 255, 255, 0.05)` - Card backgrounds
- **Borders**: `rgba(255, 255, 255, 0.1)` - Subtle dividers

### Usage Guidelines
- Use pure white for headings and primary text
- Use secondary white for body text and descriptions
- Glass effect for card backgrounds and overlays
- Border color for subtle separations

## Typography

### Font Family
- **Primary**: Inter (Google Fonts)
- **Fallback**: system-ui, -apple-system, sans-serif

### Font Weights
- **Light**: 300 - Special emphasis
- **Regular**: 400 - Body text
- **Medium**: 500 - Subheadings
- **Semibold**: 600 - Card titles
- **Bold**: 700 - Section headings
- **Black**: 900 - Hero titles

### Font Sizes
```css
/* Headings */
h1: 3rem (48px)
h2: 2.5rem (40px)
h3: 2rem (32px)
h4: 1.5rem (24px)
h5: 1.25rem (20px)
h6: 1.125rem (18px)

/* Body */
body: 1rem (16px)
small: 0.875rem (14px)
```

## Components

### Glass Cards
```css
.glass-card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 1rem;
    padding: 2rem;
    transition: transform 0.3s ease;
}
```

### Buttons
#### Primary Button
```css
.btn-primary {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 1rem 2rem;
    border-radius: 0.5rem;
    font-weight: 500;
    transition: all 0.3s ease;
}
```

#### Secondary Button
```css
.btn-secondary {
    background: transparent;
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 1rem 2rem;
    border-radius: 0.5rem;
    font-weight: 500;
}
```

### Form Elements
```css
input, textarea, select {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border-radius: 0.5rem;
    padding: 1rem;
    backdrop-filter: blur(10px);
}
```

## Layout System

### Container Widths
- **Desktop**: 1200px max-width
- **Tablet**: 768px max-width
- **Mobile**: 100% width with 1rem padding

### Grid System
```css
/* Feature Grid */
.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

/* Product Grid */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}
```

### Spacing Scale
- **xs**: 0.5rem (8px)
- **sm**: 1rem (16px)
- **md**: 1.5rem (24px)
- **lg**: 2rem (32px)
- **xl**: 3rem (48px)
- **2xl**: 4rem (64px)
- **3xl**: 5rem (80px)

## Animations

### Keyframes
```css
@keyframes floating {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
```

### Hover Effects
- **Cards**: `transform: translateY(-5px)`
- **Buttons**: `transform: translateY(-2px)` + shadow
- **Images**: `transform: scale(1.05)`

## Astra Theme Integration

### Customizer Settings
1. **Colors**:
   - Primary: #000000
   - Background: #000000
   - Text: #ffffff
   - Link: #ffffff
   - Link Hover: rgba(255,255,255,0.8)

2. **Typography**:
   - Base Font: Inter
   - Headings Font: Inter
   - Font Weight: 400 (body), 700 (headings)

3. **Layout**:
   - Container Width: 1200px
   - Content Padding: 40px (mobile), 80px (desktop)

4. **Header**:
   - Transparent Header: Enabled
   - Sticky Header: Enabled
   - Background: rgba(0,0,0,0.8)
   - Backdrop Filter: blur(10px)

5. **Footer**:
   - Background: rgba(0,0,0,0.95)
   - Border Top: 1px solid rgba(255,255,255,0.1)

### Custom CSS for Astra
Add to Appearance > Customize > Additional CSS:

```css
/* Import the component styles */
@import url('/wp-content/themes/astra-child/component-styles.css');

/* Override Astra defaults */
body {
    background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
}

.site-header {
    background: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(10px);
}
```

## Elementor Integration

### Global Colors
Set in Elementor > Site Settings > Global Colors:
1. **Primary**: #000000
2. **Secondary**: #ffffff
3. **Text**: #ffffff
4. **Accent**: rgba(255,255,255,0.8)

### Global Fonts
Set in Elementor > Site Settings > Global Fonts:
1. **Primary**: Inter
2. **Secondary**: Inter
3. **Text**: Inter
4. **Accent**: Inter

### Widget Styling
Use the included `elementor-custom.css` for consistent widget styling across all Elementor elements.

### Custom Classes
Add these classes to Elementor widgets:
- `.glass-card` - For glass morphism effect
- `.fade-in-up` - For entrance animations
- `.floating` - For floating animations

## Page Templates

### Available Templates
1. **Header Template** (`header-template.html`) - Site navigation
2. **Footer Template** (`footer-template.html`) - Site footer
3. **Hero Section** (`patterns/hero-section.html`) - Landing hero
4. **Features Section** (`patterns/features-section.html`) - Feature showcase
5. **About Section** (`patterns/about-section.html`) - About content
6. **Contact Section** (`patterns/contact-section.html`) - Contact form
7. **Product Grid** (`patterns/product-grid-pattern.html`) - Product display

### Template Usage
Each template can be:
- Copied into Astra's template builder
- Imported into Elementor as saved templates
- Used as reference for custom designs

## Responsive Design

### Breakpoints
- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

### Mobile Optimizations
- Reduce padding and margins
- Stack grid layouts
- Adjust font sizes
- Simplify navigation

## Performance Considerations

### CSS Loading
1. Load critical CSS inline
2. Defer non-critical styles
3. Use CSS custom properties for theme switching

### Images
1. Use WebP format when possible
2. Implement lazy loading
3. Optimize for retina displays

### Animations
1. Use transform and opacity for smooth animations
2. Limit simultaneous animations
3. Provide reduced motion alternatives

## Maintenance

### File Structure
```
/templates/
├── astra-customizer-settings.json
├── astra-elementor-guide.md
├── component-styles.css
├── elementor-custom.css
├── footer-template.html
└── header-template.html

/patterns/
├── about-section.html
├── contact-section.html
├── features-section.html
├── hero-section.html
└── product-grid-pattern.html
```

### Updates
1. Test all components after WordPress/theme updates
2. Validate CSS against new browser versions
3. Monitor Core Web Vitals for performance

## Implementation Checklist

### Astra Setup
- [ ] Install Astra theme
- [ ] Import customizer settings
- [ ] Add custom CSS
- [ ] Configure header/footer
- [ ] Set up typography

### Elementor Setup
- [ ] Install Elementor Pro
- [ ] Import global colors
- [ ] Import global fonts
- [ ] Add custom CSS
- [ ] Create template library

### Content Creation
- [ ] Create page templates
- [ ] Set up navigation
- [ ] Add placeholder content
- [ ] Configure forms
- [ ] Test responsiveness

This global style system ensures consistent branding and user experience across all pages while maintaining flexibility for future customizations.
