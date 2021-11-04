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

- conf (copying config files between Active, Staging, Versioned folders)
- df (displaying differences between config fimes in Active. Staging, Versioned folders)

## Setup instructions

### Step 1: Docksal environment setup

**This is a one time setup - skip this if you already have a working Docksal environment.**  

Follow [Docksal environment setup instructions](https://docs.docksal.io/getting-started/)
   
### Step 2: Project setup

1. Clone this repo into a local folder named for your project

    ```
    git clone https://github.com/Wylbur/docksal-backdrop.git backdrop
    cd backdrop
    ```

- Remove the .git folder
- Create a git project
- Initialize as the new git project

    ```
    git init
    git add .
    git commit -m 'message'
    git remote add origin <gitlab-url>
    git push -u origin main
    ```

2. Initialize the site

    This will initialize local settings and install the site via drush

    ```
    fin init
    ```

3. **On Windows** add `192.168.64.100  backdrop.docksal` to your hosts file

4. Point your browser to

    ```
    http://backdrop.docksal
    ```


## More automation with 'fin init'

Site provisioning can be automated using `fin init`, which calls the shell script in [.docksal/commands/init](.docksal/commands/init).  
This script is meant to be modified per project.

Some common tasks that can be handled in the init script:

- initialize local settings files for Docker Compose, Backdrop, Behat, etc.
- import DB or perform a site install
- compile Sass
- run DB updates, revert features, clear caches, etc.
- enable/disable modules, update variables values
- run Behat tests
