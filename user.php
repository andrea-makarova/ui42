<tr id="<?= $jUser->id ?>">
    <td>
        <span>
            <img class="profile-picture" src="assets/images/profiles/<?= $jUser->image ?>" alt="profile picture">
        </span>
    </td>
    <td class="">
        <span>
            <a href="" class="underline"><?= $jUser->full_name ?></a>
        </span>
    </td>
    <td class="">
        <span>
            <a href="mailto:<?= $jUser->email ?>" class="underline"><?= $jUser->email ?></a>
        </span>
    </td>
    <td class="">
        <span>
            <a href="tel:+4219<?= $jUser->phone_number ?>" class="underline">+4219<?= $jUser->phone_number ?></a>
        </span>
    </td>
    <td class="position">
        <span>
            <?= $jUser->position ?>
        </span>
    </td>
</tr>