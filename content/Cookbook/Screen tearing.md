---
Title: Screen tearing
---

If you are having trouble with [screen tearing](https://en.wikipedia.org/wiki/Screen_tearing), try installing [compton](https://github.com/chjj/compton).

<pre class="command-line" data-prompt="~$"><code class="language-bash">sudo apt install compton hsetroot</code></pre>


## Autostart

Add this line to the beginning of `/home/tooloop/.config/openbox/autostart`

For Intel and NVidia graphics:

<pre><code class="language-bash">compton --vsync opengl --backend glx &</code></pre>

For ODROID:

<pre><code class="language-bash">compton --vsync drm &</code></pre>


## Making the desktop black again

Replace `xsetroot` with `hsetroot` as xsetroot doesn’t work with compton.

<pre><code class="language-bash"># xsetroot -solid "#000000" &
hsetroot -solid "#000000" &</code></pre>