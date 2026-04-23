# 🎓 Toddler Kindergarten - School Management System

A professional, dynamic website for a kindergarten school with an integrated admin dashboard for managing students, classes, attendance, and reports.

## 📋 Features

### Public Website
- **Responsive Design** - Works on all devices (mobile, tablet, desktop)
- **Modern UI** - Beautiful gradient design with smooth animations
- **About Section** - Information about the school and its approach
- **Programs Overview** - Details about different age groups and programs
- **Contact Form** - Easy way for parents to get in touch
- **Navigation** - Smooth scrolling between sections

### Admin Dashboard
- **Dashboard Overview** - Quick stats and recent activity
- **Student Management** - Add, edit, and manage student records
- **Class Management** - Organize classes and assignments
- **Attendance Tracking** - Mark and track daily attendance
- **Teacher Management** - Manage teacher information and assignments
- **Reporting** - Generate attendance, performance, and enrollment reports
- **Professional Interface** - Clean, organized sidebar navigation

## 🚀 Getting Started

### Prerequisites
- A modern web browser (Chrome, Firefox, Safari, Edge)
- No server-side setup required for basic functionality

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/shaficmugisha433/toddler-kindergarten.git
   cd toddler-kindergarten
   ```

2. **Open in browser**
   - Open `index.html` in your browser
   - Or use a local server:
   ```bash
   # Using Python 3
   python -m http.server 8000
   
   # Using Node.js (with http-server)
   npx http-server
   ```

3. **Access the site**
   - Visit `http://localhost:8000` in your browser
   - Navigate to `admin.html` for the admin dashboard

## 📁 Project Structure

```
toddler-kindergarten/
├── index.html              # Main website
├── admin.html              # Admin dashboard
├── css/
│   ├── styles.css          # Main website styles
│   └── admin-styles.css    # Admin dashboard styles
├── js/
│   ├── main.js             # Website functionality
│   └── admin.js            # Admin dashboard functionality
├── .gitignore              # Git ignore file
└── README.md               # This file
```

## 🎨 Design Features

- **Color Scheme**: Professional and child-friendly colors
  - Primary: Red (#FF6B6B) - Energetic
  - Secondary: Teal (#4ECDC4) - Calm
  - Accent: Yellow (#FFE66D) - Friendly

- **Animations**: Smooth transitions and animations throughout
- **Responsive Grid Layouts**: Adapts to all screen sizes
- **Interactive Elements**: Buttons, forms, and navigation with hover effects

## 📱 Responsive Breakpoints

- **Desktop**: Full layout (1200px+)
- **Tablet**: Adjusted grid and spacing (768px - 1199px)
- **Mobile**: Single column layout (<768px)

## 🔧 Customization

### Colors
Edit the CSS variables in `css/styles.css` and `css/admin-styles.css`:
```css
:root {
    --primary-color: #FF6B6B;
    --secondary-color: #4ECDC4;
    /* ... etc */
}
```

### Content
- Update school name in `index.html` navbar
- Modify program descriptions in the Programs section
- Add real contact information in the Contact section
- Customize admin dashboard data tables

### Images
Add a `images/` folder and reference images in HTML:
```html
<img src="images/school-photo.jpg" alt="School">
```

## 📊 Admin Dashboard Usage

### Login
Currently, the admin dashboard is open for demonstration. In production, implement:
- User authentication
- Session management
- Role-based access control

### Sections

1. **Dashboard** - Overview of key metrics
2. **Students** - Manage student enrollments
3. **Classes** - Create and manage class schedules
4. **Attendance** - Record daily attendance
5. **Teachers** - Manage teacher profiles
6. **Reports** - Generate various reports

## 🚀 Deployment

### GitHub Pages

1. **Enable GitHub Pages**
   - Go to repository Settings → Pages
   - Set source to `main` branch
   - Save

2. **Access your site**
   - Visit: `https://shaficmugisha433.github.io/toddler-kindergarten/`

### Other Hosting Options
- Netlify
- Vercel
- Firebase Hosting
- Any static file hosting service

## 🔄 GitHub Actions (CI/CD)

The `.github/workflows/deploy.yml` file enables automatic deployment to GitHub Pages on every push to the main branch.

## 🛡️ Security Notes

- This is a frontend-only application
- For production use:
  - Implement backend authentication
  - Use HTTPS
  - Add data validation and sanitization
  - Implement database for data persistence
  - Add user authorization checks

## 📝 Future Enhancements

- [ ] Backend API integration
- [ ] User authentication system
- [ ] Database integration (attendance, students, teachers)
- [ ] Email notifications
- [ ] SMS alerts
- [ ] Parent portal
- [ ] Real-time reporting
- [ ] Mobile app
- [ ] Payment integration for fees

## 🤝 Contributing

Feel free to fork this project and submit pull requests for any improvements.

## 📄 License

This project is open source and available under the MIT License.

## 📞 Support

For questions or issues, please open an issue on GitHub or contact the repository maintainer.

---

**Created with ❤️ for educational institutions**