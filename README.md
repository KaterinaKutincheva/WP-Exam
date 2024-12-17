# WordPress Custom Theme Project

## Project Overview
This repository contains the custom theme and related files for a WordPress project. The focus of this project is on a custom theme development that integrates modern styles and optimized functionality, tailored to the project's needs.

## Structure
The repository tracks the `wp-content/themes/` directory and includes the custom theme files. Other parts of the WordPress installation, such as core files, uploads, and plugins, are ignored for clarity and size management.

### Repository Contents:
- `wp-content/themes/a-world-1.0.0`: Custom theme files, including templates, stylesheets, JavaScript, and PHP functions.

## Features of the Custom Theme
- **Responsive Design**: The theme is built to look great on all devices.
- **Custom Styles**: Includes a `style.css` file and additional CSS for layout and design tweaks.
- **Bootstrap Integration**: The theme leverages Bootstrap for grid-based layout and components.
- **Dynamic Assets**: Assets like CSS and JS are dynamically loaded using WordPress functions (e.g., `get_stylesheet_directory_uri()`).

## Installation
1. Clone the repository to your WordPress installation directory, specifically under the `wp-content/themes/` folder:
   ```bash
   git clone https://github.com/KaterinaKutincheva/softuni-wp.git wp-content/themes/a-world-1.0.0
