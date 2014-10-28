<div id="comments">
    <h2>Kommentarer</h2>
    <?php if(empty($comments)) : ?>
        <p>Det finns inga kommentarer. Bli den första att kommentera nedan:</p>
    <?php endif; ?>

    <?php if (is_array($comments)) : ?>
        <div class="comments">



        <?php foreach ($comments as $id => $comment) : ?>
            <form method=post>
                <input type=hidden name="redirect" value="<?=$this->url->create($this->request->getCurrentUrl())?>">
                <input type=hidden name="pageId" value='<?=$pageId?>'>
                <input type=hidden name="id" value='<?=$id?>'>

                <div class="comment">
                    <div class="avatar"> <?=get_gravatar($comment["mail"]) ?></div>
                    <div class="comment-content">
                        <input type='submit' class="edit" name='doEditPost' value='#<?=$id+1?>' onClick="this.form.action = '<?="comment/editId"?>'"/>
                        <span class="commentName"><a href="mailto:<?=($comment['mail'])?>"><?=($comment['name'])?></a></span><span class="commentDate">Skapad <?=($comment['timestamp'])?></span>

                        <?php if ($comment['mail']) : ?>
                             <a href="mailto:<?=($comment['mail'])?>"><span class ="comment-icon email-icon"></span></a>
                        <?php endif; ?>
                        <?php if ($comment['web']) : ?>
                             <a href="http://<?=($comment['web'])?>" target="_new"><span class ="comment-icon web-icon"></span></a>
                        <?php endif; ?>
                        <br/>
                        <span class="commentContent"><?=($comment['content'])?></span>
                    </div>
                    <div class="comment-bottom">
                        <input type='submit' name='doEditPost' value='Redigera' onClick="this.form.action = '<?="comment/editId"?>'"/>
                        <input type='submit' name='doRemovePost' value='Ta bort' onClick="this.form.action = '<?="comment/remove-id"?>'"/>

                    </div>
                </div>
             </form>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>