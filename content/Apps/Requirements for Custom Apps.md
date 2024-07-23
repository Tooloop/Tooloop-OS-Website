---
Index: 2.3
Title: Requirements for Custom Apps
---

A presentation on Tooloop OS needs to adhere to some simple standards so it can be started and stopped automatically.

## Location

It makes sense to follow the [recommended folder structure](/Getting%20started/File%20management).  

- Your application should live in `/assets/presentation/`
- Data files like images or videos should go to `/assets/data/`
- Log files should go to `/assets/logs/`

## Start and Stop Scripts

You need to provide two scripts that are called by Tooloop OS to start, stop or restart the app
    - `/assets/presentation/start-presentation.sh`  
    - `/assets/presentation/stop-presentation.sh`

Whatever command is needed to start or stop your app, put it in there.  
These scripts are called from

- the [autostart script](https://github.com/Tooloop/Tooloop-OS/blob/master/files/openbox-config/autostart)
- the [desktop menu](/Getting%20started/The%20desktop)
- the [terminal aliases](/Getting%20started/Terminal%20access)
- the [control center](/Getting%20started/Control%20Center)

Here are two simple examples for start and stop scripts.

`start-presentation.sh`

```bash
#!/bin/bash

/assets/presentation/example-presentation &

exit 0
```

`stop-presentation.sh`

```bash
#!/bin/bash

killall example-presentation &

exit 0
```
