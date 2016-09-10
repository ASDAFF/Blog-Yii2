<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <h3>Блог</h3>
        <ul class="nav nav-pills">
            <li><a href="<?= Url::toRoute('post/index'); ?>"><?=Yii::t('app', 'Posts');?></a></li>
            <li><a href="<?= Url::toRoute('category/index'); ?>"><?=Yii::t('app', 'Categories');?></a></li>
            <li><a href="<?= Url::toRoute('tags/index'); ?>"><?=Yii::t('app', 'Tags');?></a></li>
            <li><a href="<?= Url::toRoute('comment/index'); ?>"><?=Yii::t('app', 'Comments');?></a></li>
            <li><a href="<?= Url::toRoute('user/index'); ?>"><?=Yii::t('app', 'Users');?></a></li>
        </ul>

    </div>
</div>
