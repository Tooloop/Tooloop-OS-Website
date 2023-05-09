---
Title: Configure Time and Date
---

Per default Ubuntu Server will use [universal time](https://en.wikipedia.org/wiki/Coordinated_Universal_Time) (UTC).

This might confuse you when setting startup and shutdown times.

## Check your cureent settings

```bash
timedatectl
```

## Find your timezone

```bash
timedatectl list-timezones | grep Berlin
```

or

```bash
timedatectl list-timezones | grep Europe | less
```

## Set the timezone

```bash
sudo timedatectl set-timezone Europe/Berlin
```