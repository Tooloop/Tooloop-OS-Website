---
Title: App bundles
Template: docs
Index: 99
---

You can bundle your app so it can be installed in the App Center section in the <a href="%base_url%/Manual/Management/System settings">System Settings</a>.  
Just put your bundle in the `/assets/apps/` folder.

Have a look at the [examples on GitHub](https://github.com/vollstock/Tooloop-Examples) if you want to see how those are done.

# Bundle structure

<pre><code class="language-bash">- [APP_NAME]/
   |
   |- README.md (optional)
   |- LICENSE.md (optional)
   |
   +- bundle/
   |   |- app.json
   |   |- preview_image.jpg (320 × 180 px)
   |   |- install.sh (optional)
   |   |- uninstall.sh (optional)
   |   |- controller.py (optional)
   |   |- settings.html (optional)
   |
   +- presentation/
   |   |- start-presentation.sh
   |   |- stop-presentation.sh
   |   |- ...
   |
   +- data/ (optional)
   |   |- ...
</code></pre>

# App definition

In the bundle there’s a json file that the settings server uses to display information about the app.

It’s contents have to have this structure:

<pre><code class="language-json">{
  "name": "Awesome Super Trooper",
  "description": "256 characters short description",
  "media": [
    {
      "type": "video",
      "url": "https://youtu.be/GynFoGzOWds",
      "description": "Description of video 1"
    }, {
      "type": "image",
      "url": "https://www.cool-dude.com/awesome-super-trooper/img/app-preview-1.jpg",
      "description": "Description of image 1"
    }, {
      "type": "image",
      "url": "https://www.cool-dude.com/awesome-super-trooper/img/app-preview-2.jpg",
      "description": "Description of image 2"
    }, {
      "type": "video",
      "url": "https://vimeo.com/6912147",
      "description": "Description of video 2"
    }
  ],
  "version": "1.0",
  "last_updated": "2017-01-22",
  "license": "Commercial",
  "category": "Tools",
  "tags": ["examples"],
  "developer": "Cool dude",
  "homepage": "http://www.cool-dude.com/awesome-super-trooper/",
  "compatibility": {
    "s": "False",
    "m": "True",
    "l": "True",
    "xl": "True"
  }
}
</code></pre>