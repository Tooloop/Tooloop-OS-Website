---
Title: System
Template: docs
Index: 34.2
---

# Get system information

    GET /tooloop/api/v1.0/system

Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

**Returns**
<pre><code class="language-json">{
  "hostname": "tooloop-box-hostname",
  "needs_reboot": false
}</code></pre>


# Get hostname

    GET /tooloop/api/v1.0/system/hostname


# Set hostname

    PUT /tooloop/api/v1.0/system/hostname


# Get system usage

    GET /tooloop/api/v1.0/system/usage


# Get uptime

    GET /tooloop/api/v1.0/system/uptime


# GET HD usage

    GET /tooloop/api/v1.0/system/hd


# GET CPU usage

    GET /tooloop/api/v1.0/system/cpu

# GET GPU usage

    GET /tooloop/api/v1.0/system/gpu


# Get memory usage

    GET /tooloop/api/v1.0/system/memory



# Reboot system

    GET /tooloop/api/v1.0/system/reboot


# Power off system

    GET /tooloop/api/v1.0/system/poweroff


# Set password

    PUT  /tooloop/api/v1.0/system/password


# Get audio volume

    GET /tooloop/api/v1.0/system/audiovolume


# Set audio volume

    PUT /tooloop/api/v1.0/system/audiovolume


# Mute/unmute audio

    PUT /tooloop/api/v1.0/system/audiomute


# Get display state

    GET /tooloop/api/v1.0/system/displaystate

**Returns**
<pre><code class="language-json">{ 'Display' : 'on' }</code></pre>


# Turn display on and off

    PUT /tooloop/api/v1.0/system/displaystate


# Get runtime schedule

    GET /tooloop/api/v1.0/system/runtimeschedule


# Set runtime schedule

    PUT /tooloop/api/v1.0/system/runtimeschedule