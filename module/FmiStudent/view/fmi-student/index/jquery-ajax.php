<?php $this->doctype('HTML5'); ?>
<?php
$this->headMeta()->appendHttpEquiv('Content-Type','text/html; charset=UTF-8')
    ->appendHttpEquiv('Content-Language', 'en-US');
$this->headMeta()->appendName('keywords', 'framework, PHP, productivity');
$this->headMeta()->appendName('description', 'framework, PHP, productivity');
?>
<?php $this->headLink()->appendStylesheet('http://fonts.googleapis.com/css?family=Bitter');?>
<?php $this->headLink()->appendStylesheet($this->basePath('FmiStudent/css/style.css'));?>
<?php $this->headScript()->appendFile($this->basePath('FmiStudent/js/jqueryAjax.js')); ?>
<?php
 $styles = ".h1 {color: red;}";
 $this->headStyle()->appendStyle($styles);
?>
<?php $this->headTitle('Faux Mocha'); ?>
<?php // $this->inlineScript()->appendFile('/js/prototype.js'); ?>
<?php $this->headScript()->captureStart() ?>
var BASE_URL = '<?php echo $this->basePath(); ?>';
<?php $this->headScript()->captureEnd() ?>