<?php $tabs = $this->getTabs(); ?>
<?php foreach ($tabs as $key => $tab) : ?>
<a href="<?php echo $this->getUrl()->getUrl(null,null,['tab' => "{$key}"],false);?>" class="btn btn-outline-primary btn-block">
<?php echo $tab['label'];?>
</a>
<?php endforeach; ?>