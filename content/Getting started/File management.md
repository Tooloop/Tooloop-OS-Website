---
Title: File management
---

# AFP

On a Mac you can access the `home` folder and the `assets` folder via AFP.
In Finder you can find the machine network view or connect to it vie *Goto/Connect to server*

```
afp://<IP-ADDRESS>
afp://<HOSTNAME>.local
```

# SFTP

On Windows, the easiest way to copy files on the machine is using an SFTP browser like [Cyberduck](https://cyberduck.io/) or [FileZilla](https://filezilla-project.org/).



# Folder structure

You will find a volume mounted at `/assets`. That’s the space to put all your files. It contains five folders:

| Path                    | Description                                                                   |
| ----------------------- | ----------------------------------------------------------------------------- |
| `/assets/data/`         | put your images, videos, etc. here                                            |
| `/assets/logs/`         | for log files                                                                 |
| `/assets/packages/`     | app bundles that are locally available to install through the settings server |
| `/assets/presentation/` | put your app here                                                             |
| `/assets/screenshots/`  | screenshots will be saved here                                                |