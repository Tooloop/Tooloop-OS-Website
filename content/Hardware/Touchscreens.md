---
Title: Touchscreens
---

Nowadays most touchscreens just work. The following table lists compatible manufacturers, that are proven to work with Tooloop OS.

| Vendor                                                             | Status                                                                  |
| ------------------------------------------------------------------ | ----------------------------------------------------------------------- |
| [Iiyama](https://iiyama.com/gl_en/products/touchscreens/openframe) | <span class="icon has-text-success"><i class="fas fa-check"></i></span> |
| [Elo Touch](https://www.elotouch.com/)                             | <span class="icon has-text-success"><i class="fas fa-check"></i></span> |


# Input mapping

When using a configurations with a rotated monitor (i. e. portrait) or multi display configuration you need to map the input coordinates to the screens pixels.

There are some presets for all [screen orientations](https://wiki.ubuntu.com/X/InputCoordinateTransformation) in the [autostart script](https://github.com/Tooloop/Tooloop-OS/blob/master/files/openbox-config/autostart).

First, get your device name:

```bash
xinput list
```
Now uncomment the line, that matches your setup and add your device name:

`~/.config/openbox/autostart`

```bash
[…]
# normal
# xinput set-prop '<DEVICE>' 'Coordinate Transformation Matrix' 'Coordinate Transformation Matrix' 1 0 0 0 1 0 0 0 1 &
# left
xinput set-prop 'Pixart Imaging, Inc. Optical Touch' 'Coordinate Transformation Matrix' 0 -1 1 1 0 0 0 0 1 &
# right
# xinput set-prop '<DEVICE>' 'Coordinate Transformation Matrix' 0 1 0 -1 0 1 0 0 1 &
# inverted
# xinput set-prop <DEVICE> 'Coordinate Transformation Matrix' -1 0 1 0 -1 1 0 0 1 &

[…]
```

To map the touch coordinates in a multi display configuration follow this recipe:

<a class="button is-primary my-3" href="/Cookbook/Touch Input Mapping">
    <span class="icon"><i class="fa fa-book"></i></span>
    <span>Recipe on Touch Input Mapping</span>
</a>
