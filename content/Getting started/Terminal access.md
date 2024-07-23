---
Title: Terminal access
---

By default the SSH server is running so you can log into your box remotely from your terminal.

```bash
ssh tooloop@<IP-ADDRESS-OF-YOUR-BOX>
```

Windows users might want to install [PuTTY](http://www.putty.org/).


# Commands

There's a bunch of terminal commands for your convenience. Use them on the local machine or remotely via SSH.

| Shortcut                     | Description                                                                                                                   |
| :--------------------------- | :---------------------------------------------------------------------------------------------------------------------------- |
| `tooloop-presentation-start` | Calls `/assets/presentation/start-presentation.sh`                                                                            |
| `tooloop-presentation-stop`  | Calls `/assets/presentation/stop-presentation.sh`                                                                             |
| `tooloop-presentation-reset` | Calls stop and start script                                                                                                   |
| `tooloop-display-off`        | Turns the display off                                                                                                         |
| `tooloop-display-standby`    | Turns the display to standby                                                                                                  |
| `tooloop-display-on`         | Turns the display on                                                                                                          |
| `tooloop-display-blink`      | Makes the desktop background flash. Got more then one box and want to know which one you're on?                               |
| `tooloop-vnc-on`             | Starts the VNC server                                                                                                         |
| `tooloop-vnc-off`            | Stops the VNC server                                                                                                          |
| `tooloop-settings`           | Opens a local browser with the settings UI                                                                                    |
| `tooloop-screenshot`         | Takes a screenshot immediately, no matter whether the screenshot service is running                                           |
| `tooloop-screenshots-clean`  | Will delete old screenshots and organize the rest in folders. This is also done automatically once a day and on every reboot. |