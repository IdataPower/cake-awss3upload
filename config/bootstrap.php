<?php
use Cake\Core\Configure;

Configure::load('PowerSystem/S3UploadSDK.awss3');
collection((array)Configure::read('S3UploadSDK.config'))->each(function ($file) {
    Configure::load($file);
});
