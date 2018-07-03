---
Description: Tooloop open media server framework
Template: index
HeroImages: 
    # - {image: rack-boxes.jpg, credits: '' }
    - {image: yatharth-roy-vibhakar-471414-unsplash.jpg, credits: Photo by <a href="https://unsplash.com/photos/vJQCyAOegiI">yatharth roy vibhakar</a> on <a href="https://unsplash.com">Unsplash</a> }
    - {image: efe-kurnaz-315384-unsplash.jpg, credits: Photo by <a href="https://unsplash.com/photos/RnCPiXixooY">Efe Kurnaz</a> on <a href="https://unsplash.com">Unsplash</a> }
---

<section class="section is-medium">
    <div class="container">
        <div class="columns" style="align-items: center;">
            <div class="column is-half">
                <img src="%base_url%/assets/1-2-3-animation.gif" />
            </div>
            <div class="column is-half">
                <!-- <h1 class="title">About</h1> -->
                <h2 class="subtitle">Tooloop is a platform for media artists to safely and easily develop and deploy multimedia installations.</h2>
                <ul class="steps is-vertical">
                    <li class="steps-segment">
                        <span class="steps-marker">1</span>
                        <div class="steps-content">
                            <p class="is-size-4">Get a box</p>
                            <p>Choose from a good range of <a href="Boxes">industrial-grade hardware</a>, provided by professional partners.</p>
                        </div>
                    </li>
                    <li class="steps-segment">
                        <span class="steps-marker">2</span>
                        <div class="steps-content">
                            <p class="is-size-4">Install the OS</p>
                            <p>The <a href="OS">operating system</a> is specifically crafted for live and public installations. It has features to monitor and manage your box remotely.</p>
                        </div>
                    </li>
                    <li class="steps-segment">
                        <span class="steps-marker">3</span>
                        <div class="steps-content">
                            <p class="is-size-4">Run your app</p>
                            <p><a href="Apps">Some standard apps</a> come built-in.<br>However, Tooloop really shines when running your own software.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section hero is-dark is-bold">
    <div class="container content">
        <div class="columns is-centered" style="align-items: center;">
            <div class="column is-3">
                <a href="javascript:loadIntroVideo()" class="is-size-4">
                    <figure class="image is-marginless">
                        <img src="%base_url%/assets/intro-video-preview.jpg">
                    </figure>
                </a>
            </div>
            <div class="column has-text-centered is-narrow">
                <a href="javascript:loadIntroVideo()" class="is-size-4"><i class="fa fa-play-circle has-text-danger"></i> Watch introduction</a>
            </div>
        </div>
    </div>
</section>

<div id="intro-video-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content" style="overflow: inherit;">
            <div class="videoWrapper">
            </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
<script type="text/javascript">
    function loadIntroVideo () {
        var videoWrapper = document.querySelector('#intro-video-modal .videoWrapper');
        /*videoWrapper.innerHTML = '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/NpEaa2P7qZI?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';*/
        videoWrapper.innerHTML = '<video controls autoplay><source src="%base_url%/assets/intro-video.mp4" type="video/mp4"></video>';

        openModal('intro-video-modal');
    }
</script>

<section class="section hero is-medium is-light has-text-centered">
    <div class="container content">

        <h1 class="title has-text-grey">Built for critical missions</h1>  

        <div class="tile is-ancestor">

            <div class="tile is-4 is-parent">
                <div class="tile is-child" style="margin:2rem auto 0 auto !important;">
                    <span class="icon is-medium has-text-danger"><i class="fab fa-2x fa-linux"></i></span>
                    <p><span class="has-text-weight-light is-size-4">Stable</span><br>
                    <span class="has-text-grey">Built on linux.<br/>No crashes, no viruses.</span></p>
                </div>
            </div>

            <div class="tile is-4 is-parent">
                <div class="tile is-child" style="margin:2rem auto 0 auto !important;">
                    <span class="icon is-medium"><img src="%base_url%/assets/icon_feather.svg" class="feature-icon"></span>
                    <p><span class="has-text-weight-light is-size-4">Lightweight</span><br>
                    <span class="has-text-grey">Minimal system, Low memory footprint.<br/> All power to you.</span></p>
                </div>
            </div>

            <div class="tile is-4 is-parent">
                <div class="tile is-child" style="margin:2rem auto 0 auto !important;">
                    <span class="icon is-medium has-text-danger"><i class="fa fa-2x fa-check-circle"></i></span>
                    <p><span class="has-text-weight-light is-size-4">Compatible</span><br>
                    <span class="has-text-grey">No hardware guesswork.<br/>Just works.</span></p>
                </div>
            </div>

        </div>

        <div class="tile is-ancestor">

            <div class="tile is-4 is-parent">
                <div class="tile is-child" style="margin:2rem auto 0 auto !important;">
                    <span class="icon is-medium"><img src="%base_url%/assets/icon_easy.svg" class="feature-icon"></span>
                    <p><span class="has-text-weight-light is-size-4">Easy to manage</span><br>
                    <span class="has-text-grey">Remote-Management and confidence monitoring built-in.</span></p>
                </div>
            </div>

            <div class="tile is-4 is-parent">
                <div class="tile is-child" style="margin:2rem auto 0 auto !important;">
                    <span class="icon is-medium"><img src="%base_url%/assets/icon_quiet.svg" class="feature-icon"></span>
                    <p><span class="has-text-weight-light is-size-4">Distraction free</span><br>
                    <span class="has-text-grey">Quiet&nbsp;boot, no&nbsp;popups, no&nbsp;updates.<br/>No show-stoppers.</span></p>
                </div>
            </div>

            <div class="tile is-4 is-parent">
                <div class="tile is-child" style="margin:2rem auto 0 auto !important;">
                    <span class="icon is-medium"><img src="%base_url%/assets/icon_strong.svg" class="feature-icon"></span>
                    <p><span class="has-text-weight-light is-size-4">Rock solid</span><br>
                    <span class="has-text-grey">Industrial-grade hardware that’s built to last.</span></p>
                </div>
            </div>


        </div>

    </div>
</section>

<section class="section is-medium">
    <div class="container">
        <div class="columns ">
            <div class="column">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-96x96">
                            <i class="fab fa-osi has-text-primary" style="font-size: 96px; margin: 0px;"></i>
                        </p>
                    </figure>
                    <div class="media-content">
                        <h1 class="title">Get involved</h1>
                        <h2 class="subtitle">It’s open source</h2>
                        <div class="content">
                             <p>We are media artists and studios in the media and entertainment industry. Our work demands computer systems that run reliably – live and in public.</p>
                            <p>We want to have fun, be be creative and productive.<br> We don't want the IT to get in our way more than absolute necessary.</p>
                            <p>Let’s build an environment that makes our lives easier and let’s us focus on the things we love – doing art.</p>
                            <a href="Development" class="button is-info">Contribute</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-96x96">
                            <img src="%base_url%/assets/profile-vollstock.jpg" style="border-radius: 100%;">
                        </p>
                    </figure>
                    <div class="media-content">
                        <h1 class="title">Need help?</h1>
                        <h2 class="subtitle has-text-danger">I’m for hire!  </h2>
                        <div class="content">
                            <p>My name is Daniel and I am the maintainer of the Tooloop project.<br>
                            I do designs and technical concepts for multimedia presentations, shows and kinetic installations.</p>
                            <p><strong>I would love to help you with yours.</strong></p>
                            <a href="https://www.vollstock.de/" class="button is-primary">Get in touch</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>