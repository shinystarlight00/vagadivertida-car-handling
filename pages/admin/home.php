<?php require 'header.php'; ?>

    <div class="content">
        <div class="preview">
            <iframe src="/" style="width: 200%; height: 180%; border: none;" class="scaled-iframe"></iframe>
        </div>
        <div class="admin-control">        
            <div class="tabs">
                <button class="tab active" data-tab="pictures">Pictures</button>
                <button class="tab" data-tab="contents">Contents</button>
            </div>
            <div class="grid" id="grid"></div>
            
            <?php require "modal.php"; ?>

        </div>
    </div>

<?php require 'footer.php'; ?>