<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
    <?= $this->Html->script('countries');?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
</head>
<body>
   <!-- <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4">
            <li class="name">
                <h1><a href="">Register your Association</a></h1>
            </li>
        </ul>
        
    </nav>-->
   <div class="row" style="margin-top: 10px">
       <div class="medium-5 columns"><img src="./img/boi.jpg" width="170" height="180" class="img-response"/></div>
       <div class="medium-2 columns"><img src="./img/coat.jpg" width="100" height="50" class="img-response"/> </div>
       <div class="medium-4 columns">
           <p><strong style="color: green">Federal Ministry of Industry, Trade and Investment</strong></p>
       </div>
   </div>
   <div class="row" style="margin-top: 10px">
       <div style="background-color: #15848F;color: white !important; padding: 10px;text-align: center">
           <h4 style="color: #ffffff"><strong>Government Enterprise & Empowerment Program (GEEP)</strong></h4>
       </div>
   </div>
   <div class="row">
       <div style="background-color: white;border: 1px solid green; padding: 5px;text-align: center">
           <h6 style="color: #000000">Intervention through micro enterprise</h6>
       </div>
   </div>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
