---
Title: System
---

# Get system information

```http
GET /tooloop/api/v1.0/system
```

Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

**Returns**

```json
{
  "hostname": "tooloop-box-hostname",
  "needs_reboot": false
}
```


# Get hostname

```http
GET /tooloop/api/v1.0/system/hostname
```

# Set hostname

```http
PUT /tooloop/api/v1.0/system/hostname
```

# Get system usage

```http
GET /tooloop/api/v1.0/system/usage
```

# Get uptime

```http
GET /tooloop/api/v1.0/system/uptime
```

# Get timezone

```http
GET /tooloop/api/v1.0/system/timezone
```

# Set timezone

```http
PUT /tooloop/api/v1.0/system/timezone
```

# GET HD usage

```http
GET /tooloop/api/v1.0/system/hd
```

# GET CPU usage

```http
GET /tooloop/api/v1.0/system/cpu
```
# GET GPU usage

```http
GET /tooloop/api/v1.0/system/gpu
```

# Get memory usage

```http
GET /tooloop/api/v1.0/system/memory
```


# Reboot system

```http
GET /tooloop/api/v1.0/system/reboot
```

# Power off system

```http
GET /tooloop/api/v1.0/system/poweroff
```

# Set password

```http
PUT  /tooloop/api/v1.0/system/password
```

# Get audio volume

```http
GET /tooloop/api/v1.0/system/audiovolume
```

# Set audio volume

```http
PUT /tooloop/api/v1.0/system/audiovolume
```

# Mute/unmute audio

```http
PUT /tooloop/api/v1.0/system/audiomute
```

# Get display state

```http
GET /tooloop/api/v1.0/system/displaystate
```
**Returns**

```json
{ "Display" : "on"}
```


# Turn display on and off

```http
PUT /tooloop/api/v1.0/system/displaystate
```

# Get runtime schedule

```http
GET /tooloop/api/v1.0/system/runtimeschedule
```

# Set runtime schedule

```http
PUT /tooloop/api/v1.0/system/runtimeschedule```