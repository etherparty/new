# **Etherparty Wordpress Theme**

## **Setting up a local dev environment using docker**

### ***Getting started***
1) clone this repository somewhere, and switch to the Wordpress branch:
```bash
$ git clone git@github.com:Etherparty/new
$ cd new
$ git checkout wordpress
```
2) run `runme.sh` to create symbolic links to the Wordpress themes folder.

The runme script will make sure that you have docker and
docker-compose installed, then it will compose the docker
configuration and launch a local wordpress server and mariadb backend.

The local installation of Wordpress is in `run/wp-www` and the local
installation of the MariaDB database is in `run/wp-db`.

The server is on [localhost:8080](http://localhost:8080).

You can start it with `xdg-open http://localhost:8080`


### ***cleaning extraneous un-tracked files created by Wordpress***

The wordpress application creates extra files, that are mostly constrained
to the www directory. You can clean these untracked files at anytime
using `git clean -fdx`. Be aware that running `git clean -fdx` after
initial setup of the database might result in a non-working system,
requiring you to remove and clone the repository once again.

```bash
git clean -fdx
```

### ***Stopping the local servers***
```bash
docker stop etherparty-wp-wordpress
docker stop etherparty-wp-mariadb
```

### ***Editing the files for development***

You can edit the files directly in the etherparty theme.  It is
recommended not to edit any files in the `run/wp-www` directory, as
these are from the Wordpress release and should generally not be
edited nor checked-in. Themes and other plugins should be developed
outside the Wordpress directory and mounted into the volume by the
`docker-compose` command.

### ***The MariaDB docker container***

This container is linked to the etherparty wordpress container.
During software development, all the data for the database is in the
`run/wp-db` directory. The initial root password for the MariaDB
container is `1234567890`. This can be changed
