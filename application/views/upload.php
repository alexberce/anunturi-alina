 
       <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
       <div class="row fileupload-buttonbar">
        <div class="col-md-12" style="margin:15px">
            <span class="btn btn-success fileinput-button">
                <i class="fa fa-plus"></i>
                <span>Add files...</span>
                <input type="file" name="files" multiple>
            </span>
            <button type="submit" name="submit" class="btn btn-primary start">
                <i class="fa fa-upload"></i>
                <span>Start upload</span>
            </button>
<!--
            <button type="reset" class="btn btn-warning cancel">
                <i class="fa fa-ban"></i>
                <span>Cancel upload</span>
            </button>
            <button type="button" class="btn btn-danger delete">
                <i class="glyphicon glyphicon-trash"></i>
                <span>Delete</span>
            </button>
-->
            <!-- The global file processing state -->
            <span class="fileupload-process"></span>
        </div>
        <!-- The global progress state -->
        <div class="col-md-12 fileupload-progress">
            <!-- The global progress bar -->
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
            </div>
            <!-- The extended global progress state -->
<!--            <div class="progress-extended">&nbsp;</div>-->
        </div>
    </div>
    <!-- The table listing the files available for upload/download -->


    <table  role="presentation" class="table"><tbody class="files"></tbody></table>

<!--
<div class="note note-info">
    <h4>Notes</h4>
    <ul>
        <li>The maximum file size for uploads in this demo is <strong>50 MB</strong></li>
        <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed</li>
    </ul>
</div>
-->

    

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                    <input type="hidden" name="file_id" id="file_id" value="{%=file.file_id%}">
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
 <script src="<?=base_url();?>assets/js/js/vendor/jquery.ui.widget.js"></script>
    <script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
   <script src="<?=base_url();?>assets/js/js/jquery.iframe-transport.js"></script>
    <script src="<?=base_url();?>assets/js/js/jquery.fileupload.js"></script>
    <script src="<?=base_url();?>assets/js/js/jquery.fileupload-process.js"></script>
    <script src="<?=base_url();?>assets/js/js/jquery.fileupload-image.js"></script>
    <script src="<?=base_url();?>assets/js/js/jquery.fileupload-jquery-ui.js"></script>
    <script src="<?=base_url();?>assets/js/js/jquery.fileupload-validate.js"></script>
    <script src="<?=base_url();?>assets/js/js/jquery.fileupload-ui.js"></script>
    <script src="<?=base_url();?>assets/js/js/main.js"></script>


