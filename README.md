# Docksal powered Backdrop Installation

This is a Backdrop CMS installation pre-configured for use with Docksal.  

Features:

- Backdrop CMS
- Bee install
- Brush install
- Drush install

Custom `fin` commands

- b (bee)
- brush (brush)
- drush (drush)

- cert
(installs a local SSL certificate for your project)

- conf 
(copying config files between Active, Staging, Versioned folders)

- df 
(displaying differences between config fimes in Active. Staging, Versioned folders)

- dff
(displaying detaiked diffs)

- drushup
Update all CLI helpers, Bee, Brush, Drush

- sync
Elaborate sync script to transfer LIVE site and content to local

- uli
Log into local site via drush

# Setup instructions

## Docksal environment setup

**This is a one time setup - skip this if you already have a working Docksal environment.**  

Follow [Docksal environment setup instructions](https://docs.docksal.io/getting-started/)
   
## Install this project

### Get a copy of the repo
Pick the latest tag branch.  
https://github.com/Wylbur/docksal-backdrop

Extract the repo to a project folder with a name to represent the project
`~/Project/your-project-name`

### Copy settings files
Make copies of the settings files, and update with the project name:

`docroot/settings.ph_` -> `docroot/settings.php`
`docroot/settings.docksal.ph_` -> `docroot/settings.docksal.php`
`docroot/settings.live.ph_` -> `docroot/settings.live.php`
- trusted_host_patterns
- $base_url

`brush/bd.aliases.brushrc.php`
- change the name of this file, replacing bd with your project name
- within the file add the project name to $projectname

`drush/bd.aliases.brushrc.php`
- change the name of this file, replacing bd with your project name
- within the file add the project name to $projectname

**Optional Files**
Update the sync file to interact with your remote site install:

`.docksal/docksal.env`
- many items

### Initiate website
`fin init`
