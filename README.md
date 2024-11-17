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

1. clone this repository
2. TODO ddev stuff

## TODO

* check if there are a bunch of unneeded files in this repo, Drupal includes a
  lot

## what's where?

* frontend: `docroot/frontend`
* DKAN: `dkan/`
