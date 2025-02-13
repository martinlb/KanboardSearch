<div class="page-header">
    <h2><?= t('Advanced Search Filter') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('AdvancedSearchController', 'save', ['plugin' => 'KanboardSearchPlugin']) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <fieldset>
        <?= $this->form->checkbox('comment_search', t('Enable "Search in Comment"'), 1, isset($values['comment_search']) && $values['comment_search'] == 1) ?>
    </fieldset>
    <fieldset>
        <?= $this->form->checkbox('title_search', t('Enable "Search in Title"'), 1, isset($values['title_search']) && $values['title_search'] == 1) ?>
    </fieldset>

    <fieldset>
        <?= $this->form->checkbox('description_search', t('Enable "Search in Description"'), 1, isset($values['description_search']) && $values['description_search'] == 1) ?>
    </fieldset>

    <fieldset>
        <?= $this->form->checkbox('subtask_search', t('Enable "Search in Subtask Title"'), 1, isset($values['subtask_search']) && $values['subtask_search'] == 1) ?>
    </fieldset>
    <fieldset>
        <?= $this->form->checkbox('attachment_search', t('Enable "Search in Attachments"'), 1, isset($values['attachment_search']) && $values['attachment_search'] == 1) ?>
    </fieldset>
    <fieldset>
        <?= $this->form->checkbox('id_search', t('Enable "Search in Ids"'), 1, isset($values['id_search']) && $values['id_search'] == 1) ?>
    </fieldset>

    <?= $this->hook->render('template:config:advanced-search-filter', array('values' => $values, 'errors' => $errors)) ?>

    <div class="form-actions">
        <button type="submit" class="btn btn-blue"><?= t('Save') ?></button>
    </div>
</form>
