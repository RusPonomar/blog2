

<h3><?=$this->post['title']?></h3>
<div>
    <?=$this->post['post'];?>
    <? if ($this->user): ?>
    <div class="btn-group" role="group" aria-label="Basic">
        <a href="/?edit/<?=$this->post['id']?>" class="btn btn-mini btn-info"><i class="icon-pencil"></i> изменить</a>
        <a href="/?del/<?=$this->post['id']?>" class="btn btn-mini btn-danger" onclick="return confirm('Точно удалить?');"><i class="icon-trash"></i> удалить</a>
    </div>
    <? endif ?>
</div>

<hr>

<div class="comments">
    <h4>Комментарии:</h4>
    <? foreach ($this->comments as $c): ?>
    <p class="comment">
        <? if ($this->user) : ?>
            <a href="/?delComment/<?=$c['id']?>/<?=$this->post['id']?>" class="btn btn-mini btn-danger" onclick="return confirm('Точно удалить?');"><i class="icon-trash"></i> удалить</a>
        <? endif ?>
        <b><?=$c['name']?></b>: <?=$c['post']?>
    </p>
    <? endforeach; ?>
</div>

<p>&nbsp;</p>

<h4>Добавить комментарий</h4>
<form action="/?addComment/<?=$this->post['id']?>" method="post" class="form-inline well">
    <label>Имя: </label> <input type="text" name="a-name" value="<?=$_COOKIE['name']?>">
    <label>Комментарий: </label> <input type="text" name="comment">
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
