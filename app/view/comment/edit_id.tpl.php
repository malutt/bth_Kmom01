
<h3><?=$output?></h3>
<div class='comment-form edit-form'>
    <form method=post>
        <input type=hidden name="redirect" value=""<?= $redirect ?>">
        <input type=hidden name="pageId" value='<?=$pageId?>'>
        <fieldset>
            <!--legend>Kommentera</legend -->
            <p><label>Din kommentar:<br/><textarea name='content'><?=$content?></textarea></label></p>
            <p><label>Namn:<br/><input type='text' name='name' value='<?=$name?>'/></label></p>
            <p><label>Webbsida:<br/><input type='text' name='web' value='<?=$web?>'/></label></p>
            <p><label>Email:<br/><input type='text' name='mail' value='<?=$mail?>'/></label></p>
            <p class=buttons>
                <input type='submit' name='doSave' value='Spara' onClick="this.form.action = '<?=$this->url->create('comment/saveComment') . '/' . $id?>'"/>
                <input type='reset' value='Töm'/>
            </p>

        </fieldset>
    </form>
</div>
