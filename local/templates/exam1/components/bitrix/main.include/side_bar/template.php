<?
    if (file_exists($arResult['FILE']) && ($str = trim(file_get_contents($arResult['FILE'])))):

?>
<div class="side-block side-anonse">
    <div class="title-block"><span class="i i-title01"></span><?=GetMessage('SIDE_BAR') ?>></div>
    <div class="item">
        <p><?=$str ?></p>
    </div>
</div>
<? endif;?>
