<?php

declare(strict_types=1);

namespace EduardoFrank\Efrank13\Domain\Repository;

use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\ConnectionPool;

class PersonalNoteRepository
{
    public function __construct(
        private readonly ConnectionPool $connectionPool
    ) {}

    public function findPersonalNotes(?int $category = null): array
    {
        $queryBuilder = $this->connectionPool->getQueryBuilderForTable('sys_note');
        $queryBuilder->getRestrictions()->removeAll();

        $queryBuilder
            ->select('*')
            ->from('sys_note')
            ->where(
                $queryBuilder->expr()->eq('deleted', $queryBuilder->createNamedParameter(0, Connection::PARAM_INT)),
                $queryBuilder->expr()->eq('personal', $queryBuilder->createNamedParameter(1, Connection::PARAM_INT)),
                $queryBuilder->expr()->eq('cruser', $queryBuilder->createNamedParameter(
                    (int)$GLOBALS['BE_USER']->user['uid'],
                    Connection::PARAM_INT
                ))
            )
            ->orderBy('sorting', 'asc')
            ->addOrderBy('crdate', 'desc');

        if ($category !== null) {
            $queryBuilder->andWhere(
                $queryBuilder->expr()->eq('category', $queryBuilder->createNamedParameter($category, Connection::PARAM_INT))
            );
        }

        return $queryBuilder->executeQuery()->fetchAllAssociative();
    }
}
