---
Title: File management
---

# From a Mac (AFP)

On a Mac you can access the `home` folder and the `assets` folder via AFP.  
In Finder find the machine in the network view or connect to it via *Goto/Connect to server*

```
afp://<IP-ADDRESS>
afp://<HOSTNAME>.local
```

# From Windows (SFTP)

On Windows, the easiest way to copy files on the machine is using an SFTP browser like [Cyberduck](https://cyberduck.io/) or [FileZilla](https://filezilla-project.org/).

# Folder structure

You will find a volume mounted at `/assets`. That’s the space to put all your files. It contains five folders:

| Path                    | Description                                                                  |
| ----------------------- | ---------------------------------------------------------------------------- |
| `/assets/data/`         | put your images, videos, etc. here                                           |
| `/assets/logs/`         | for log files                                                                |
| `/assets/packages/`     | app bundles that are locally available to install through the control server |
| `/assets/presentation/` | put your application runtime here                                            |
| `/assets/screenshots/`  | if the screenshot service is enabled, screenshots will go here               |