<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Guest'), ['action' => 'edit', $guest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Guest'), ['action' => 'delete', $guest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Guests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guest'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blacklist Homes'), ['controller' => 'BlacklistHomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blacklist Home'), ['controller' => 'BlacklistHomes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Guest Profiles'), ['controller' => 'GuestProfiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guest Profile'), ['controller' => 'GuestProfiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Ratings'), ['controller' => 'HomeRatings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Rating'), ['controller' => 'HomeRatings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Reviews'), ['controller' => 'HomeReviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Review'), ['controller' => 'HomeReviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Login Logs'), ['controller' => 'LoginLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Login Log'), ['controller' => 'LoginLogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="guests view large-9 medium-8 columns content">
    <h3><?= h($guest->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($guest->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fname') ?></th>
            <td><?= h($guest->fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Passoword') ?></th>
            <td><?= h($guest->passoword) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($guest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mname') ?></th>
            <td><?= $this->Number->format($guest->mname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lname') ?></th>
            <td><?= $this->Number->format($guest->lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= $this->Number->format($guest->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= $this->Number->format($guest->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($guest->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($guest->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Blacklist Homes') ?></h4>
        <?php if (!empty($guest->blacklist_homes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Home Id') ?></th>
                <th scope="col"><?= __('Guest Id') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($guest->blacklist_homes as $blacklistHomes): ?>
            <tr>
                <td><?= h($blacklistHomes->id) ?></td>
                <td><?= h($blacklistHomes->home_id) ?></td>
                <td><?= h($blacklistHomes->guest_id) ?></td>
                <td><?= h($blacklistHomes->comment) ?></td>
                <td><?= h($blacklistHomes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BlacklistHomes', 'action' => 'view', $blacklistHomes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BlacklistHomes', 'action' => 'edit', $blacklistHomes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BlacklistHomes', 'action' => 'delete', $blacklistHomes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blacklistHomes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Guest Profiles') ?></h4>
        <?php if (!empty($guest->guest_profiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Guest Id') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Marital Status') ?></th>
                <th scope="col"><?= __('Profile Picture') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($guest->guest_profiles as $guestProfiles): ?>
            <tr>
                <td><?= h($guestProfiles->id) ?></td>
                <td><?= h($guestProfiles->guest_id) ?></td>
                <td><?= h($guestProfiles->phone) ?></td>
                <td><?= h($guestProfiles->gender) ?></td>
                <td><?= h($guestProfiles->marital_status) ?></td>
                <td><?= h($guestProfiles->profile_picture) ?></td>
                <td><?= h($guestProfiles->dob) ?></td>
                <td><?= h($guestProfiles->created) ?></td>
                <td><?= h($guestProfiles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GuestProfiles', 'action' => 'view', $guestProfiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GuestProfiles', 'action' => 'edit', $guestProfiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GuestProfiles', 'action' => 'delete', $guestProfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guestProfiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Home Ratings') ?></h4>
        <?php if (!empty($guest->home_ratings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Home Id') ?></th>
                <th scope="col"><?= __('Guest Id') ?></th>
                <th scope="col"><?= __('Rating') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($guest->home_ratings as $homeRatings): ?>
            <tr>
                <td><?= h($homeRatings->id) ?></td>
                <td><?= h($homeRatings->home_id) ?></td>
                <td><?= h($homeRatings->guest_id) ?></td>
                <td><?= h($homeRatings->rating) ?></td>
                <td><?= h($homeRatings->comments) ?></td>
                <td><?= h($homeRatings->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HomeRatings', 'action' => 'view', $homeRatings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeRatings', 'action' => 'edit', $homeRatings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeRatings', 'action' => 'delete', $homeRatings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeRatings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Home Reviews') ?></h4>
        <?php if (!empty($guest->home_reviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Home Id') ?></th>
                <th scope="col"><?= __('Guest Id') ?></th>
                <th scope="col"><?= __('Review') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($guest->home_reviews as $homeReviews): ?>
            <tr>
                <td><?= h($homeReviews->id) ?></td>
                <td><?= h($homeReviews->home_id) ?></td>
                <td><?= h($homeReviews->guest_id) ?></td>
                <td><?= h($homeReviews->review) ?></td>
                <td><?= h($homeReviews->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HomeReviews', 'action' => 'view', $homeReviews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeReviews', 'action' => 'edit', $homeReviews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeReviews', 'action' => 'delete', $homeReviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeReviews->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Login Logs') ?></h4>
        <?php if (!empty($guest->login_logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Guest Id') ?></th>
                <th scope="col"><?= __('Home Owner Id') ?></th>
                <th scope="col"><?= __('Ip Address') ?></th>
                <th scope="col"><?= __('Last Login') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($guest->login_logs as $loginLogs): ?>
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
