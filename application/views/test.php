<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style/lkp.css" type="text/css"> 
    </head>
    <style>
        .wrapper-block {
            display: inline-block;
            position: relative;
        }

        .hover {
            position: absolute;
            top: 80%;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 188, 212, .2);
        }


        img {
            vertical-align: bottom;
        }

    </style>
    <body>
        <div class="container">
            <div class="wrapper-block">
                <div class="hover text-center p-2">
                    <p>It just another title</p>
                </div>
                <img src="http://placehold.it/450x250" class="img-fluid"/>
            </div>
        </div>
    </body>
</html>
