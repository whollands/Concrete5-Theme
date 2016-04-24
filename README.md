# Concrete5-Theme
<img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Concrete5_logo.jpg" width="150" height="150" align="right"/>

A simple customizable theme for concrete5! By [Will Hollands](http://hollands123.com)

It features the ability to change almost all styles, and also add a header background image. See the theme in use on [GDoc Ltd.](http://gdoc.org.uk) or [Underwood Surgery](http://underwoodsurgery.co.uk).

This theme also includes a feature to only display a tracking code to guests. Place your HTML tracking code in `/includes/TRACKING_CODE.php` and it will be hidden when users are signed in to your website.

### Templates
* ***Blank*** - A plain HTML page with the bootstrap and font-awesome stylesheet applied
* ***Full*** - A fullwidth page
* ***Left Sidebar*** - Large content area on right with a small left hand side bar
* ***Right Sidebar*** - Large content area on left with a small right hand side bar
* ***Three Columns*** - A full width page area, followed by three columns
* ***Two Columns*** - A full width page area, followed by two columns

### Installation
1. Download and install [Concrete5](http://concrete5.org)
2. Open the `/application/themes/` directory
3. Create a directory called `Clean Concrete5 Theme`
4. Download the [master branch](https://github.com/whollands/Concrete5-Theme/archive/master.zip) and put it in this directory
5. Sign in to your concrete5 website
6. Open ***Dashboard >> Pages & Themes*** and find the "Awaiting Installation" section
7. Install the theme and click ***Activate*** to apply it to your site

### Set-up

1. Add a ***Content block*** or image to the `Sitewide Logo Area`
2. Add an ***Auto-nav*** block to the `Sitewide Navbar`
3. Add your content to the `Main` and `Footer1` Areas

***Important:*** in order for the auto-nav block to display styles and be responsive on mobile devices:

1. Click on the ***Auto-nav block*** and select ***Design & Custom Template***
2. Click the ***"gear" icon***
3. Add the ***Custom Class*** `navigation` and press enter
4. Save block

Currently we do not support multi-level navigation menus in the ***auto-nav*** block

You will need to disable this option by editing the ***auto-nav*** block and changing the ***Child Pages*** dropdown to ***none***.

### Problems
Use the github [issue reporter](https://github.com/whollands/Acorn/issues) to send bugs and issues found with the theme, alternatively [contact me](http://hollands123.com/contact) directly
