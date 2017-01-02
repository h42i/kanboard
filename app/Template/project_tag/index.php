<div class="page-header">
    <h2><?= t('Project tags') ?></h2>
    <ul>
        <li>
            <?= $this->modal->medium('plus', t('Add new tag'), 'ProjectTagController', 'create', array('project_id' => $project['id'])) ?>
        </li>
    </ul>
</div>

<?php if (empty($tags)): ?>
    <p class="alert"><?= t('There is no specific tag for this project at the moment.') ?></p>
<?php else: ?>
    <table class="table-striped table-scrolling">
        <tr>
            <th class="column-80"><?= t('Tag') ?></th>
            <th><?= t('Action') ?></th>
        </tr>
        <?php foreach ($tags as $tag): ?>
            <tr>
                <td><?= $this->text->e($tag['name']) ?></td>
                <td>
                    <?= $this->modal->medium('edit', t('Edit'), 'ProjectTagController', 'edit', array('tag_id' => $tag['id'], 'project_id' => $project['id'])) ?>
                    <?= $this->modal->confirm('trash-o', t('Remove'), 'ProjectTagController', 'confirm', array('tag_id' => $tag['id'], 'project_id' => $project['id'])) ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
<?php endif ?>
