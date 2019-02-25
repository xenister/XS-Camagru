




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/editor.css">

<h1 class="title has-text-centered">Editor</h1>

<div class="top_content column has-text-centered">
    <video id="video">Stream not available.</video>
    <canvas id="canvas"></canvas>
    <br>
    <div class="container0">
        <a id="photo_button" class="button is-danger">Take Photo</a>
        <a id="clear_button" class="button is-primary">Clear</a>
    </div>
    <div id="share" class="mid_content has-text-centered is-hidden">
        <div class="field has-addons centerall">
            <div class="control">
                <input class="input" type="text" placeholder="Add a Title">
            </div>
            <div class="control">
                <a id="share_button" class="button is-info">
                    Share
                </a>
            </div>
        </div>
    </div>

    </div>
    <br>
    <div class="container">
        <div class="tabs is-centered is-boxed is-medium">
            <ul>
                <li id="tab_1" class="tab_menu is-active"><a class="effect" onclick="switchTab('tab_1', 'content_1')">Effect Filter</a></li>
                <li id="tab_2" class="tab_menu"><a class="image" onclick="switchTab('tab_2', 'content_2')">Image Filter</a></li>
            </ul>
        </div>
        <div id="content_1" class="tab_content has-text-centered">
            <select id="color_filter">
                <option value="none">None</option>
                <option value="grayscale(100%)">Grayscale</option>
                <option value="sepia(100%)">Sepia</option>
                <option value="invert(100%)">Invert</option>
                <option value="hue-rotate(90deg)">Hue</option>
                <option value="blur(10px)">Blur</option>
                <option value="contrast(200%)">Contrast</option>
            </select>
        </div>
        <div id="content_2" class="tab_content img_filter" style="display: none">
                <img src="/filter/original/dalma.png">
                <img src="/filter/original/cedric.png">
                <img src="/filter/original/flower.png">
                <img src="/filter/original/licorne.png">
                <img src="/filter/original/likeaboss.png">
                <img src="/filter/original/noel.png">
                <img src="/filter/original/pipe.png">

        </div>
    </div>
</div>
<!--<div class="bottom-content">-->
<!--    <div class="columns is-multiline">-->
<!--        <div class="column is-one-quarter-desktop is-half-tablet">-->
<!--            <div class="card">-->
<!--                <div class="card-image">-->
<!--                    <figure class="image">-->
<!--                        <div id="photos"></div>-->
<!--                    </figure>-->
<!--                    <div class="card-content is-overlay is-clipped">-->
<!--              <span class="tag is-info">-->
<!--                Photo Title That is really long to show the clipping-->
<!--              </span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->

<!--    <div class="columns">-->
<!---->
<!--        <div class="column is-three-quarters has-text-centered">-->
<!--            <div class="container container_video is-widescreen has-text-centered">-->
<!---->
<!--                <div id="camera-zone" class="notification is-hidden">-->
<!---->
<!--                    <video id="camera" class="video"></video>-->
<!--                    <canvas class="filter_canvas" id="filter"></canvas>-->
<!--                    <p id="alert"></p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="column control_button has-text-centered">-->
<!---->
<!--                <h2 id="info_camera">Click the camera button to give the permission to use your camera.</h2>-->
<!--                <br>-->
<!--                <div class="button_group">-->
<!--                    <a onclick="startCamera();" class="button is-info is-outlined">Camera</a>-->
<!--                    <a onclick="snapShot(this);" class="button is-success is-outlined">Shot</a>-->
<!--                    <a onclick="save();" class="button is-success">-->
<!--                                <span class="icon is-small">-->
<!--                                  <i class="fas fa-check"></i>-->
<!--                                </span>-->
<!--                        <span>Save</span>-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="container has-text-centered">-->
<!---->
<!--                <div id="snap-zone" class="notification is-hidden">-->
<!--                    <canvas id="canvas"></canvas>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="column select_filter notification">-->
<!--            <h1>Filter</h1>-->
<!---->
<!--        </div>-->
<!---->
<!---->
<!---->
<!--    </div>-->



        <script src="/js/editor2.js"></script>
    </body>
</html>

