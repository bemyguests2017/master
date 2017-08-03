<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Home Owner'), ['action' => 'edit', $homeOwner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Home Owner'), ['action' => 'delete', $homeOwner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeOwner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Home Owners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Owner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Owner Profiles'), ['controller' => 'HomeOwnerProfiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Owner Profile'), ['controller' => 'HomeOwnerProfiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Login Logs'), ['controller' => 'LoginLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Login Log'), ['controller' => 'LoginLogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="homeOwners view large-9 medium-8 columns content">
    <h3><?= h($homeOwner->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($homeOwner->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fname') ?></th>
            <td><?= h($homeOwner->fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mname') ?></th>
            <td><?= h($homeOwner->mname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lname') ?></th>
            <td><?= h($homeOwner->lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($homeOwner->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($homeOwner->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($homeOwner->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($homeOwner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($homeOwner->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Home Owner Profiles') ?></h4>
        <?php if (!empty($homeOwner->home_owner_profiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Home Owner Id') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Marital Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($homeOwner->home_owner_profiles as $homeOwnerProfiles): ?>
            <tr>
                <td><?= h($homeOwnerProfiles->id) ?></td>
                <td><?= h($homeOwnerProfiles->home_owner_id) ?></td>
                <td><?= h($homeOwnerProfiles->phone) ?></td>
                <td><?= h($homeOwnerProfiles->country_id) ?></td>
                <td><?= h($homeOwnerProfiles->state_id) ?></td>
                <td><?= h($homeOwnerProfiles->city_id) ?></td>
                <td><?= h($homeOwnerProfiles->dob) ?></td>
                <td><?= h($homeOwnerProfiles->gender) ?></td>
                <td><?= h($homeOwnerProfiles->marital_status) ?></td>
                <td><?= h($homeOwnerProfiles->created) ?></td>
                <td><?= h($homeOwnerProfiles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HomeOwnerProfiles', 'action' => 'view', $homeOwnerProfiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeOwnerProfiles', 'action' => 'edit', $homeOwnerProfiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeOwnerProfiles', 'action' => 'delete', $homeOwnerProfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeOwnerProfiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Homes') ?></h4>
        <?php if (!empty($homeOwner->homes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Max Guests') ?></th>
                <th scope="col"><?= __('Home Owner Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('Pincode') ?></th>
                <th scope="col"><?= __('Landline') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($homeOwner->homes as $homes): ?>
            <tr>
                <td><?= h($homes->id) ?></td>
                <td><?= h($homes->name) ?></td>
                <td><?= h($homes->max_guests) ?></td>
                <td><?= h($homes->home_owner_id) ?></td>
                <td><?= h($homes->country_id) ?></td>
                <td><?= h($homes->state_id) ?></td>
                <td><?= h($homes->city_id) ?></td>
                <td><?= h($homes->pincode) ?></td>
                <td><?= h($homes->landline) ?></td>
                <td><?= h($homes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Homes', 'action' => 'view', $homes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Homes', 'action' => 'edit', $homes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Homes', 'action' => 'delete', $homes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Login Logs') ?></h4>
        <?php if (!empty($homeOwner->login_logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Guest Id') ?></th>
                <th scope="col"><?= __('Home Owner Id') ?></th>
                <th scope="col"><?= __('Ip Address') ?></th>
                <th scope="col"><?= __('Last Login') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($homeOwner->login_logs as $loginLogs): ?>
            <tr>
                <td><?= h($loginLogs->id) ?></td>
                <td><?= h($loginLogs->guest_id) ?></td>
                <td><?= h($loginLogs->home_owner_id) ?></td>
                <td><?= h($loginLogs->ip_address) ?></td>
                <td><?= h($loginLogs->last_login) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LoginLogs', 'action' => 'view', $loginLogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LoginLogs', 'action' => 'edit', $loginLogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LoginLogs', 'action' => 'delete', $loginLogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loginLogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
