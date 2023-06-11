---
Title: Add a custom display resolution
---

Check available modes

```bash
xrandr
```

If you need to add a mode you know, your hardware is capable of but isn't listed, you can add it manually.

In a terminal generate the modeline

```bash
cvt 3840 2160 30
```

The output should look something like this

```bash
Modeline "3840x2160_30.00"  338.75  3840 4080 4488 5136  2160 2163 2168 2200 -hsync +vsync
```

Now add that mode to the X server

```bash
xrandr --newmode "3840x2160_30.00"  338.75  3840 4080 4488 5136  2160 2163 
```

Add the new mode to an output

```bash
xrandr --addmode DP-1 3840x2160_30.00
```

And set it the same way as above

```bash
xrandr --output DP-1 --mode 3840x2160_30.00
```

Note that setting the resolution is not permanent.  
To make it permanent, add all three lines (`--newmode`, `--addmode` and `--ouput`) to `~/.config/openbox/autostart`.