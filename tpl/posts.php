
<? foreach ($this->posts as $key => $value): ?>
<h3><a href="/?post/<?=$value['id']?>"><?=$value['title']?></a></h3>
<div><?=nl2br($value['post'])?></div>
<? if ($this->user): ?>
<div class="btn-group" role="group" aria-label="Basic">
    <a href="/?edit/<?=$value['id']?>" class="btn btn-mini btn-info"><i class="icon-pencil"></i> изменить</a>
    <a href="/?del/<?=$value['id']?>" class="btn btn-mini btn-danger" onclick="return confirm('Точно удалить?');"><i class="icon-trash"></i> удалить</a>
</div>
<? endif ?>
<p>&nbsp;</p>
<? endforeach ?>