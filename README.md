## what is this?

A Drupal site managed by DDEV. It's got DKAN + frontend.

This repository holds all the stuff we use to run the site. It includes code
for DKAN and the frontend, but development on those doesn't happen in this
repository. In other repositories (git submodules TODO add detail), we hold
the actual DKAN and frontend code. **If you want to modify our DKAN fork or
the frontend, do it in their delegated repository.**

## requirements

* [Docker provider for DDEV](https://ddev.readthedocs.io/en/stable/users/install/docker-installation/#docker-installation-windows)
* [DDEV](https://ddev.readthedocs.io/en/stable/)

## how do i run the site?

1. install requirements
1. clone this repository with the `--recurse-submodules` flag (ymmv, try next step)
1. `git submodule update --init` seems necessary for me
1. `ddev composer install` to install php dependencies in the backend container
1. `ddev dkan-frontend-install` to install node dependencies in the frontend container
1. `ddev dkan-frontend-build` to build the frontend in the container
1. `ddev launch` to see if everything works!

## TODO

* check if there are a bunch of unneeded files in this repo, Drupal includes a
  lot

## what's where?

* ddev scripts: `.ddev/commands`
* frontend: `docroot/frontend`
* DKAN: `dkan/`
