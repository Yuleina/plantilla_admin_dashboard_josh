
    <!-- global js -->
    <script src="<?php echo base_url("lib/js/app.js") ?>" type="text/javascript"></script>
    <!-- end of global js -->
    <?php if (isset($javascripts)): ?>
        <?php foreach ($javascripts as $javascript):?>
            <script src="<?php echo base_url("lib/$javascript"); ?>.js" type="text/javascript"></script>
        <?php endforeach; ?>
    <?php endif ?>
    <!-- begining of page level js -->
</body>

</html>
