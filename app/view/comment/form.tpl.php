<div class='comment-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$this->url->create($this->di->request->extractRoute())?>">
        <input type=hidden name="pageId" value='<?=$pageId?>'>
        <fieldset>
        <p><label class="hide headerComment">Din kommentar:</label><br/><span class="balloon"></span><textarea id="textareaContent" name='content'>Kommentera...</textarea></label></p>
        <div id="commentFormInputs">
            <p><label>Namn:<br/><input type='text' name='name' value='<?=$name?>'/></label></p>
            <p><label>Webbsida:<br/><input type='text' name='web' value='<?=$web?>'/></label></p>
            <p><label>Email:<br/><input type='text' name='mail' value='<?=$mail?>'/></label></p>
            <p class=buttons>
                <input type='submit' name='doCreate' value='Skicka' onClick="this.form.action = '<?=$this->url->create('comment/add')?>'"/>
                <input type='reset' value='Töm'/>
                <input type='submit' name='doRemoveAll' value='Radera alla' onClick="this.form.action = '<?=$this->url->create('comment/remove-all')?>'"/>
            </p>
        </div>
        <!--output><?=$output?></output -->
        </fieldset>
    </form>
</div>
