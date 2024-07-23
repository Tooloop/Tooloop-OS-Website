---
Title: System
---

# Get system information

```http
GET /tooloop/api/v1.0/system
```

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
