---
Title: Touch Input Mapping
---

Xorg has very logical but cumbersome way of configuring your touch input: [xinput](https://wiki.ubuntu.com/X/Config/Input).


# Get your touch screens ID

First we need to find the name that identifies out touch screen. You can get a list of all attached xinput devices like this:

```bash
xinput list --name-only
```
Output:

```
Virtual core pointer
Virtual core XTEST pointer
ILITEK       ILITEK-TOUCH                                                    
Microsoft Microsoft® Nano Transceiver v2.0 Mouse
Microsoft Microsoft® Nano Transceiver v2.0 Consumer Control
Microsoft Microsoft® Nano Transceiver v2.0 Consumer Control
Virtual core keyboard
Virtual core XTEST keyboard
Power Button
Power Button
Sleep Button
Microsoft Microsoft® Nano Transceiver v2.0
Microsoft Microsoft® Nano Transceiver v2.0 System Control
Microsoft Microsoft® Nano Transceiver v2.0 Consumer Control
Microsoft Microsoft® Nano Transceiver v2.0 Consumer Control
```
<article class="message is-info">
  <div class="message-header">
    <p>Tipp</p>
  </div>
  <div class="message-body">
    You need to copy the <em>exact</em> name of your device which in the above example includes a weird amount of white space.
  </div>
</article>

Test your ID like this:

```bash
xinput list-props "ILITEK       ILITEK-TOUCH                                                    "
```

# Input Mapping

`xinput` expects a transformation matrix to map the input to the screen area.
Here is what the [X.org documentation](https://www.x.org/archive/current/doc/man/man5/xorg.conf.5.xhtml#heading8) sais about it:

> Specifies the 3x3 transformation matrix for absolute input devices. The input device will be bound to the area given in the matrix. In most configurations, "a" and "e" specify the width and height of the area the device is bound to, and "c" and "f" specify the x and y offset of the area. The value range is 0 to 1, where 1 represents the width or height of all root windows together, 0.5 represents half the area, etc. The values represent a 3x3 matrix, with the first, second and third group of three values representing the first, second and third row of the matrix, respectively. The identity matrix is "1 0 0 0 1 0 0 0 1".

What the matrix actually describes is an [Affine Transformation](https://en.wikipedia.org/wiki/Affine_transformation), e. g. a series of transformations (rotation, scaling, etc.) combined.

Here is, how we can calculate ours:

## Rotation

All rotations are clockwise.

| Orientation  | Angle |
| ------------ | ----- |
| Normal       | 0     |
| Bottem left  | 90    |
| Bottom up    | 180   |
| Bottom right | 270   |
|              |       |

The 3×3 matrix for a rotation:
```
    ⎡ cos(⍺) -sin(⍺) 0 ⎤
r = ⎜ sin(⍺)  cos(⍺) 1 ⎥ 
    ⎣   0       0    1 ⎦
```

For a display oriented bottom right (⍺ = 270°), that results in

```
    ⎡  0 1 0 ⎤
r = ⎜ -1 0 1 ⎥ 
    ⎣  0 0 1 ⎦
```

If all we want is to rotate touch input, we’re done and can use that matrix (see [Applying the matrix](#applying-the-matrix)).

# Scale

The 3×3 matrix for scaling:
```
    ⎡ w 0 0 ⎤
s = ⎜ 0 h 0 ⎥
    ⎣ 0 0 1 ⎦
```

`w` and `h` are precentages of the total screen area. 

```
w = touchscreen width / total screen width  
h = touchscreen height / total screen height
```

**Example**

```
┌────────────┬─────────────────────────────┐
│            │                             │
│            │                             │
│ 768 × 1024 │                             │
│ Touchscreen│        1920 × 1080          │
│            │                             │
└────────────┤                             │
             │                             │
             └─────────────────────────────┘

```

```
w = 768 / (768+1920) = 0.286  
h = 1024 / 1080 = 0.948
```

```
    ⎡ 0.286 0     0 ⎤
s = ⎜ 0     0.948 0 ⎥
    ⎣ 0     0     1 ⎦
```


# Combining scale and rotation

<article class="message is-info">
  <div class="message-header">
    <p>Tipp</p>
  </div>
  <div class="message-body">
    Careful, order matters in affine transformation
  </div>
</article>

```
m = s · r
```

You can use an [online calculator](https://matrixcalc.org).

In the example above the resulting matrix would look like this:

```
    ⎡ 0.286 0     0 ⎤   ⎡  0 1 0 ⎤   ⎡  0     0.286 0     ⎤
m = ⎜ 0     0.948 0 ⎥ · ⎜ -1 0 1 ⎥ = ⎜ -0.948 0     0.948 ⎥
    ⎣ 0     0     1 ⎦   ⎣  0 0 1 ⎦   ⎣  0     0     1     ⎦
```


# Applying the matrix {#applying-the-matrix}

Now we can use the ID and the matrix and apply them to xinput device.

```bash
xinput set-prop <DEVICE_ID> 'Coordinate Transformation Matrix' <MATRIX>

# example from above (including weird ID)

xinput set-prop "ILITEK     ILITEK-TOUCH                                                    " 'Coordinate Transformation Matrix' 0 0.286 0 -0.948 0 0.948 0 0 1 &
```

To make this mapping permanent, copy that line to  
`/home/tooloop/.config/openbox/autostart/`