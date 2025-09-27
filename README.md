# SMS3 Responsive Sidebar with Dark/Light Mode

A modern, responsive sidebar navigation system for the SMS3 Learning Management System with dark/light mode toggle functionality.

## Features

### 🎨 Theme System
- **Light Mode**: Clean, professional appearance with blue accent colors
- **Dark Mode**: Modern dark theme with excellent contrast
- **Persistent**: Theme preference is saved in localStorage
- **Smooth Transitions**: Beautiful animations between theme changes

### 📱 Responsive Design
- **Desktop**: Full sidebar with 250px width
- **Tablet**: Collapsible sidebar (768px and below)
- **Mobile**: Full-width overlay sidebar (480px and below)
- **Touch Friendly**: Optimized for mobile devices

### ⌨️ Keyboard Shortcuts
- `Ctrl + T`: Toggle between light/dark mode
- `Ctrl + B`: Toggle sidebar (mobile)
- `Escape`: Close sidebar (mobile)

### 🎭 Interactive Elements
- **Hover Effects**: Smooth animations on navigation items
- **Theme Toggle**: Sun/moon icons with color changes
- **Mobile Toggle**: Hamburger menu for mobile devices
- **Overlay**: Dark overlay when sidebar is open on mobile

## File Structure

```
sms3/
├── style.css          # Main stylesheet with CSS variables
├── style.js           # JavaScript functionality
├── Admin/
│   ├── sidenav.php    # Updated sidebar HTML
│   └── demo.html      # Demo page showcasing features
└── README.md          # This documentation
```

## Usage

### Basic Implementation

1. **Include the CSS and JavaScript files:**
```html
<link rel="stylesheet" href="style.css">
<script src="style.js"></script>
```

2. **Add Bootstrap Icons:**
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
```

3. **Use the sidebar structure:**
```html
<div class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="nav-link navbar-brand">
      <span class="icon"><i class="bi bi-grid"></i></span>
      <span class="description">SMS 3</span> 
    </a>
    <button class="theme-toggle" id="themeToggle" title="Toggle theme">
      <i class="bi bi-sun-fill" id="themeIcon"></i>
    </button>
  </div>
  
  <button class="sidebar-toggle" id="sidebarToggle" title="Toggle sidebar">
    <i class="bi bi-list"></i>
  </button>
  
  <nav class="nav flex-column">
    <!-- Your navigation links here -->
  </nav>
</div>

<!-- Mobile overlay -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>
```

### CSS Variables

The system uses CSS custom properties for easy customization:

```css
:root {
  /* Light mode */
  --sidebar-bg-light: #203B6B;
  --sidebar-hover-light: #E6EEF8;
  --sidebar-text-light: #fff;
  
  /* Dark mode */
  --sidebar-bg-dark: #1a1a1a;
  --sidebar-hover-dark: #2d2d2d;
  --sidebar-text-dark: #e0e0e0;
}
```

### JavaScript API

The JavaScript provides several functions and event listeners:

- **Theme Management**: Automatic theme persistence and toggle
- **Responsive Behavior**: Mobile sidebar handling
- **Keyboard Navigation**: Shortcut key support
- **Touch Support**: Mobile-friendly interactions

## Browser Support

- ✅ Chrome 60+
- ✅ Firefox 55+
- ✅ Safari 12+
- ✅ Edge 79+
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## Customization

### Changing Colors

Modify the CSS variables in `style.css`:

```css
:root {
  --sidebar-bg-light: #your-color;
  --sidebar-hover-light: #your-hover-color;
  /* ... other variables */
}
```

### Adding New Navigation Items

Simply add new `<a>` elements to the nav section:

```html
<a href="your-link" class="nav-link text-center">
  <i class="bi bi-your-icon"></i>
  <span class="description">Your Label</span>
</a>
```

### Modifying Breakpoints

Adjust the responsive breakpoints in `style.css`:

```css
@media (max-width: 768px) {
  /* Tablet styles */
}

@media (max-width: 480px) {
  /* Mobile styles */
}
```

## Demo

Open `Admin/demo.html` in your browser to see all features in action. The demo includes:

- Full navigation menu
- Theme toggle functionality
- Responsive behavior
- Sample content sections
- Interactive elements

## Troubleshooting

### Sidebar Not Showing
- Check if `style.css` and `style.js` are properly linked
- Ensure Bootstrap Icons are loaded
- Verify all required HTML elements have correct IDs

### Theme Not Persisting
- Check browser localStorage support
- Ensure JavaScript is enabled
- Verify no console errors

### Mobile Issues
- Check viewport meta tag is present
- Ensure touch events are working
- Test on actual mobile devices

## Contributing

To contribute to this project:

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## License

This project is part of the SMS3 Learning Management System.

---

**Note**: This sidebar system is designed to work with the existing SMS3 structure. Make sure to test thoroughly in your specific environment before deploying to production.
