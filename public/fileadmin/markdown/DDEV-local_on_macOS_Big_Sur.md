# DDEV-Local on macOS Big Sur

You will need Xcode 12 - Apple Developer Tools.



## Step 1 - Install Homebrew

`efrank ~ $ /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"`

```
Password:
==> This script will install:
/usr/local/bin/brew
/usr/local/share/doc/homebrew
/usr/local/share/man/man1/brew.1
/usr/local/share/zsh/site-functions/_brew
/usr/local/etc/bash_completion.d/brew
/usr/local/Homebrew

Press RETURN to continue or any other key to abort
==> Downloading and installing Homebrew...
remote: Enumerating objects: 59, done.
remote: Counting objects: 100% (59/59), done.
remote: Compressing objects: 100% (5/5), done.
remote: Total 73 (delta 55), reused 57 (delta 54), pack-reused 14
Unpacking objects: 100% (73/73), done.
From https://github.com/Homebrew/brew
   e6e76a403..5818b2847  master     -> origin/master
HEAD is now at 5818b2847 Merge pull request #10132 from fxcoudert/arm-warning
==> Tapping homebrew/core
Cloning into '/usr/local/Homebrew/Library/Taps/homebrew/homebrew-core'...
remote: Enumerating objects: 500, done.
remote: Counting objects: 100% (500/500), done.
remote: Compressing objects: 100% (412/412), done.
remote: Total 869047 (delta 248), reused 215 (delta 88), pack-reused 868547
Receiving objects: 100% (869047/869047), 345.36 MiB | 160.00 KiB/s, done.
Resolving deltas: 100% (587320/587320), done.
Updating files: 100% (5692/5692), done.
Tapped 2 commands and 5410 formulae (5,717 files, 379.0MB).
Already up-to-date.
==> Installation successful!

==> Homebrew has enabled anonymous aggregate formulae and cask analytics.
Read the analytics documentation (and how to opt-out) here:
  https://docs.brew.sh/Analytics
No analytics data has been sent yet (or will be during this install run).

==> Homebrew is run entirely by unpaid volunteers. Please consider donating:
  https://github.com/Homebrew/brew#donations

==> Next steps:

- Run brew help to get started
- Further documentation: 
  https://docs.brew.sh


```



## Step 2 - Install Docker Desktop

`efrank ~ $ brew install --cask docker`

```
Updating Homebrew...
==> Auto-updated Homebrew!
Updated 2 taps (homebrew/core and homebrew/cask).
==> Updated Formulae
Updated 33 formulae.
==> Updated Casks
Updated 2 casks.

==> Downloading https://desktop.docker.com/mac/stable/51017/Docker.dmg
######################################################################## 100.0%
==> Installing Cask docker
==> Moving App 'Docker.app' to '/Applications/Docker.app'.
🍺  docker was successfully installed!
```



`efrank ~ $ docker ps`

```
CONTAINER ID   IMAGE     COMMAND   CREATED   STATUS    PORTS     NAMES
```



## Step 3 - Install DDEV-Local

`efrank ~ $ brew tap drud/ddev`

`efrank ~ $ brew install ddev bash-completion`

```
Bash completion has been installed to:
 /usr/local/etc/bash_completion.d
==> bash-completion
Add the following line to your ~/.bash_profile: [[ -r "/usr/local/etc/profile.d/bash_completion.sh" ]] && . "/usr/local/etc/profile.d/bash_completion.sh"
```

`efrank ~ $ vi .bash_profile`

``efrank ~ $ source .bash_profile`

`efrank ~ $ mkcert -install`

```
Created a new local CA 💥
Sudo password:
The local CA is now installed in the system trust store! ⚡️
The local CA is now installed in the Firefox trust store (requires browser restart)! 🦊
```

Download, inspect, make executable, and run the macos_ddev_nfs_setup.sh script. https://ddev.readthedocs.io/en/stable/users/performance/#macos-nfs-setup

`efrank ~ $ curl -O https://raw.githubusercontent.com/drud/ddev/master/scripts/macos_ddev_nfs_setup.sh && chmod +x macos_ddev_nfs_setup.sh && ./macos_ddev_nfs_setup.sh`

`efrank ~ $ ps -ef|grep [n]fs`

```
0 58042     1   0  9:01PM ??         0:00.02 /sbin/nfsd
```

`efrank ~ $ ddev config global --nfs-mount-enabled`

We are ready to install the first container.



## Step 4 - Install a TYPO3 container

If this is a first install, several required packages will still be pulled.

Make a directory outside the Documents folder, but inside your user directory. In my case it is `ddevspace/`.

`efrank ~ $ cd ddevspace/`

`efrank ddevspace $ mkdir typo3`

`efrank ddevspace $ cd typo3/`

`efrank typo3 $ ddev config --project-type=typo3 --docroot=public --create-docroot`

`efrank typo3 $ ddev start`

`efrank typo3 $ ddev composer create "typo3/cms-base-distribution:^10" --prefer-dist`

`efrank typo3 $ ddev exec touch public-html/FIRST_INSTALL`

`efrank typo3 $ ddev launch`