---
Title: Add a new display resolution
---
Check available modes

<pre class="command-line" data-prompt="~$"><code class="language-bash">xrandr</code></pre>

Set a mode

<pre class="command-line" data-prompt="~$"><code class="language-bash">xrandr --output DisplayPort-0 --mode 1920x1080  --rate 30</code></pre>

If you need to add a mode you know, your hardware is capable of but isn't listed, you can add it manually.
In a terminal generate a modeline

<pre class="command-line" data-prompt="~$"><code class="language-bash">cvt 3840 2160 30</code></pre>

The output should look something like this

<pre class="command-line" data-prompt="~$"><code class="language-bash">Modeline "3840x2160_30.00"  338.75  3840 4080 4488 5136  2160 2163 2168 2200 -hsync +vsync</code></pre>

Add the new mode

<pre class="command-line" data-prompt="~$"><code class="language-bash">sudo xrandr --addmode DisplayPort-0 3840x2160_30.00</code></pre>

And set it the same way as above

<pre class="command-line" data-prompt="~$"><code class="language-bash">xrandr --output DisplayPort-0 --mode 3840x2160_30.00</code></pre>

Note that setting the resolution is not permanent. You will probably want to add the line to `~/.config/openbox/autostart`.