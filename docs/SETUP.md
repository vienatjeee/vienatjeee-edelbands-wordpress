# Installation and Configuration Guide for Edelbands.com WordPress Site

## Prerequisites
- A hosting environment that supports WordPress (e.g., Apache, Nginx)
- PHP (version 7.4 or greater)
- MySQL (version 5.7 or greater) or MariaDB
- A registered domain name

## Step 1: Download WordPress
1. Go to the [WordPress website](https://wordpress.org/download/).
2. Download the latest version of WordPress.
3. Unzip the downloaded file.

## Step 2: Upload WordPress to Your Hosting Server
1. Use an FTP client or your hosting provider's file manager.
2. Upload the unzipped WordPress files to your desired directory for the domain (e.g., public_html for main domain).

## Step 3: Create a Database and User
1. Access your hosting control panel.
2. Navigate to the MySQL databases section.
3. Create a new database (e.g., `edelbands_db`).
4. Create a new MySQL user and assign it a strong password.
5. Add the user to the database with all privileges.

## Step 4: Configure `wp-config.php`
1. Rename the file `wp-config-sample.php` to `wp-config.php` in the WordPress directory.
2. Open `wp-config.php` and provide the database details:
   - `DB_NAME`: Name of the database created.
   - `DB_USER`: MySQL username.
   - `DB_PASSWORD`: Password for the MySQL user.
   - `DB_HOST`: Usually `localhost`.

## Step 5: Install WordPress
1. Open your browser and navigate to your domain name (e.g., http://edelbands.com).
2. Follow the on-screen instructions to complete the installation.
3. Choose your site title, create an admin username, and set a strong password.
4. Select your preferred language.

## Step 6: Configure WordPress Settings
1. Log in to your WordPress admin dashboard.
2. Go to Settings and configure:
   - General Settings (site title, tagline, etc.)
   - Reading Settings (homepage settings)
   - Permalink Settings (recommended to use "Post name")

## Step 7: Install and Configure Themes and Plugins
1. Navigate to Appearance > Themes to install a new theme.
2. Go to Plugins > Add New to install any necessary plugins (e.g., SEO, caching).

## Conclusion
Your WordPress site is now set up at edelbands.com!