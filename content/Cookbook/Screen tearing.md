---
Title: Screen tearing
---

If you are having trouble with [screen tearing](https://en.wikipedia.org/wiki/Screen_tearing), try installing [picom](https://github.com/yshui/picom):

```bash
sudo apt install picom
```

Add a config file for pico:

`/etc/xdg/picom.conf`

```yaml
vsync = true;
```

Add this line to your autostart file:

`/home/tooloop/.config/openbox/autostart`

```bash
picom &
```