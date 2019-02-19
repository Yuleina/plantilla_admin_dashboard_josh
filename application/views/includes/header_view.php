<!DOCTYPE html>
<html lang="esp">

<head>
    <meta charset="UTF-8">
    <?php if( isset($titulo_pagina) ): ?>
        <title><?=$titulo_pagina ?> | Bonanza 2.0</title>
    <?php else: ?>
        <title>| Bonanza 2.0</title>
    <?php endif ?>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="<?php echo base_url("/lib/css/bootstrap.min.css"); ?>" rel="stylesheet" />
    <link href="<?php echo base_url("/lib/css/app.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <?php if (isset($stylesheets)): ?>
        <?php foreach ($stylesheets as $stylesheet):?>
           <link href="<?php echo base_url('lib/'.$stylesheet); ?>.css" rel="stylesheet" type="text/css" />
        <?php endforeach; ?>
    <?php endif ?>

    <!--end of page level css-->
</head>

<body class="skin-josh">
