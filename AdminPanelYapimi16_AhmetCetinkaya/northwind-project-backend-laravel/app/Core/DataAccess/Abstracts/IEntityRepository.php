<?php

namespace App\Core\DataAccess\Abstracts;

use App\Core\Entities\Abstracts\IEntity;

interface IEntityRepository
{
    /**
     * @param null $filter
     * @return array
     */
    public function GetAll($filter = null): array;

    /**
     * @param $id
     * @return IEntity
     */
    public function GetById($id): IEntity;

    /**
     * @param $filter
     * @return IEntity
     */
    public function Get($filter): IEntity;

    /**
     * @param IEntity $entity
     */
    public function Add(IEntity $entity): void;

    /**
     * @param $id
     * @param IEntity $updatedEntity
     */
    public function Update($id, IEntity $updatedEntity): void;

    /**
     * @param $id
     */
    public function Delete($id): void;
}
