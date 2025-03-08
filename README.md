# CAWD - *Configurable Apache Webserver Dashboard*

This project is a simple PHP-based MVC (Model-View-Controller) dashboard that dynamically generates a dashboard interface based on configuration settings stored in an INI file.

## Features

- Uses a minimalistic MVC structure.
- Loads widgets dynamically from a `config.ini` file.
- Supports SVG icons embedded within the INI file.
- No external dependencies (no Composer required).

## Project Structure

```
/project-root
│── app/
│   ├── Controller/
│   │   ├── DashboardController.php
│   ├── Model/
│   │   ├── Config.php
│   ├── View/
│   │   ├── DashboardView.php
│   │   ├── Template/
│   │   │   ├── dashboard.phtml
│── public/
│   ├── css/
│   │   ├── style.css
│── config.ini
│── index.php
│── autoload.php
```

## Installation & Setup

1. Clone or download the project.
2. Ensure you have a local PHP server (e.g., Apache Webserver, NGINX, XAMPP, WAMP, or built-in PHP server).
3. Place the project in your server's root directory.
4. Configure the `config.ini` file (see below for details).
5. Start your local server and access the project through your browser.

## Configuration (config.ini)

The `config.ini` file is structured into sections, defining general dashboard settings and individual widgets.

### Structure:

- `[dashboard]`: Defines the dashboard title.
- `[widgets]`: Lists the widgets to be displayed on the dashboard.
- Each widget has its own section defining:
  - `icon`: The SVG icon code (encoded as HTML entities).
  - `url`: The link the widget should navigate to.
  - `name`: The display name of the widget.

### Example config.ini:

```ini
[dashboard]
title = "My Dashboard"

[widgets]
items[] = "Weather"
items[] = "Clock"
items[] = "News"

[Weather]
icon = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='32' height='32'><path d='M12 2A6 6 0 0 1 18 8a5 5 0 1 1 0 10H6A6 6 0 1 1 12 2z'/></svg>"
url = "https://weather.com"
name = "Weather"

[Clock]
icon = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='32' height='32'><path d='M12 4a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 1.5a6.5 6.5 0 1 0 0 13 6.5 6.5 0 0 0 0-13zm-.75 2.75h1.5v5l3.5 2.1-.75 1.3-4-2.4V8.25z'/></svg>"
url = "https://time.is"
name = "Clock"

[News]
icon = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='32' height='32'><path d='M4 4h16v16H4z M6 6v12h12V6z'/></svg>"
url = "https://news.com"
name = "News"
```

## Usage

- Modify `config.ini` to add or remove widgets.
- The dashboard will dynamically update based on the `config.ini` settings.

## License

This project is licensed under the BSD 3-Clause License. You are free to use, modify, and distribute it under the terms of this license.

For more details, see the LICENSE file or visit BSD 3-Clause License.

