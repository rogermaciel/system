<?php

declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\ArticlesTag;
use Authorization\IdentityInterface;

/**
 * ArticlesTag policy
 */
class ArticlesTagPolicy {

    /**
     * Check if $user can add ArticlesTag
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ArticlesTag $articlesTag
     * @return bool
     */
    public function canAdd(IdentityInterface $user, ArticlesTag $articlesTag) {
        return true;
    }

    /**
     * Check if $user can edit ArticlesTag
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ArticlesTag $articlesTag
     * @return bool
     */
    public function canEdit(IdentityInterface $user, ArticlesTag $articlesTag) {
        return $this->isAuthor($user, $articlesTag);
    }

    /**
     * Check if $user can delete ArticlesTag
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ArticlesTag $articlesTag
     * @return bool
     */
    public function canDelete(IdentityInterface $user, ArticlesTag $articlesTag) {
        return $this->isAuthor($user, $articlesTag);
    }

    /**
     * Check if $user can view ArticlesTag
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ArticlesTag $articlesTag
     * @return bool
     */
    public function canView(IdentityInterface $user, ArticlesTag $articlesTag) {
        return true;
    }

    /**
     * Check if $user is author of ArticlesTag
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\ArticlesTag $articlesTag
     * @return bool
     */
    protected function isAuthor(IdentityInterface $user, Article $articlesTag) {
        return $articlesTag->user_id === $user->getIdentifier();
    }
}
