---
Title: Application watchdog
---

# CRON

Create a script, that will check how many instances of your presentation application are running.  
The following example script will start the presentation if it isn't there. It will also kill one instance of it if there’s more than one running.

E.g. `/assets/scripts/presentation-watchdog.sh`

<pre><code class="language-bash">#!/bin/bash

case $(pidof APPLICATION_NAME | wc -w) in

1)      echo "$(date) - Restarting presentation" >> /assets/logs/presentation.log
    /assets/presentation/start-presentation.sh &
    ;;
2)      # all good
    ;;
*)      echo "$(date) - Too many dicks on the dancefloor, killing presentation" >> /assets/logs/presentation.log
    kill $(pidof APPLICATION_NAME | awk '{print $1}')
    ;;
esac
</code></pre>

Now you only have to set up a [cron](https://en.wikipedia.org/wiki/Cron) job so the script is automatically called periodically.

Edit your crontab:
<pre class="command-line" data-prompt="~$"><code class="language-bash">crontab -e</code></pre>

This config will call your script once every minute:

<pre><code class="language-yaml"># min hou dom mon dow   command
  *   *   *   *   *     env DISPLAY=:0.0 sh /assets/scripts/presentation-watchdog.sh
</code></pre>

<article class="message is-info">
  <div class="message-header">
    <p>Hint</p>
  </div>
  <div class="message-body">
    You have to tell cron on which display if should start GUI applications. This is done by adding `env DISPLAY=:0.0` before the actual command.
  </div>
</article>

# Systemd service

You can create a [systemd](https://freedesktop.org/wiki/Software/systemd/) service for your application and let it care about restarting in case of an error.
[Read all about creating service units files here](https://www.freedesktop.org/software/systemd/man/systemd.service.html).

Create a new file for your app

<pre class="command-line" data-prompt="~$"><code class="language-bash">sudo nano /usr/lib/systemd/system/[YOUR-APP].service</code></pre>

Now copy these lines in there

<pre><code class="language-bash">[Unit]
Description=YOUR APP DESCRIPTION
After=getty@tty1.service

[Service]
Environment=DISPLAY=:0
Environment=XAUTHORITY=/home/tooloop/.Xauthority
#ExecStartPre=[OPTIONAL_COMMAND_BEFORE]
ExecStart=[YOUR_APPLICATION]
#ExecStopPost=[OPTIONAL_COMMAND_AFTER]
Restart=on-failure
TimeoutStopSec=1

[Install]
WantedBy=graphical.target
</code></pre>

Enable and start the service

<pre class="command-line" data-prompt="~$"><code class="language-bash">sudo systemctl enable [YOUR-APP]
sudo systemctl start [YOUR-APP]</code></pre>

Now change the start and stop scripts accordingly

`/assets/presentation/start-presentation.sh`  
<pre><code class="language-bash">sudo systemctl start [YOUR-APP]</code></pre>

`/assets/presentation/stop-presentation.sh`  
<pre><code class="language-bash">sudo systemctl stop [YOUR-APP]</code></pre>

Now that systemd is taking care of starting your application service, you should remove or comment the call to the start script in `~/.config/openbox/autostart`:
<pre><code class="language-bash">[…]
# sh /assets/presentation/start-presentation.sh &
[…]</code></pre>