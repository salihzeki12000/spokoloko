<!-- Modal -->
<div class="ui modal small" data-for="uipicturemodal">

    <i class="icon icon-close close-modal"></i>

    <div class="header center" style="padding-bottom: 10px;">
        <h4>Dodaj zdjęcie</h4>
    </div>

    <div class="content">


        <div class="profile">
            <div class="photo">
                <input type="file" accept="image/*">
                <div class="photo__helper">
                    <div class="photo__frame photo__frame--circle">
                        <canvas class="photo__canvas"></canvas>
                        <div class="message is-empty">
                            <p class="message--desktop">{{ __('Przeciągnij lub wybierz z komputera') }}</p>
                            <p class="message--mobile">Tap here to select your picture.</p>
                        </div>
                        <div class="message is-loading">
                            <i class="fa fa-2x fa-spin fa-spinner"></i>
                        </div>
                        <div class="message is-dragover">
                            <i class="fa fa-2x fa-cloud-upload"></i>
                            <p>{{ __('Przeciągnij zdjęcie') }}Drop your photo</p>
                        </div>
                        <div class="message is-wrong-file-type">
                            <p>Only images allowed.</p>
                            <p class="message--desktop">Drop your photo here or browse your computer.</p>
                            <p class="message--mobile">Tap here to select your picture.</p>
                        </div>
                        <div class="message is-wrong-image-size">
                            <p>Your photo must be larger than 350px.</p>
                        </div>
                    </div>
                </div>

                <div class="photo__options hide">
                    <div class="photo__zoom">
                        <input type="range" class="zoom-handler">
                    </div>
                    <a href="javascript:;" class="remove"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>


    </div><!-- content -->

    <div class="actions">
        <div class="div-c inline-2">
            <div class="divided-column">
                <div class="button-sq cancel-sq fullwidth-sq">Cancel</div>
            </div>

            <div class="divided-column">
                <button type="button" id="uploadImgBtn" class="button-sq fullwidth-sq">{{ __('Zapisz') }}</button>
            </div>
        </div>
    </div>

</div>