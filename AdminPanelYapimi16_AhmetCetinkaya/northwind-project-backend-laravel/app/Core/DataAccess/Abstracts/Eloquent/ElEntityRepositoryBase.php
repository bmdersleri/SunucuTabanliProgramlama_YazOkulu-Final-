<?php

namespace App\Core\DataAccess\Abstracts\Eloquent;

use App\Core\DataAccess\Abstracts\IEntityRepository;
use App\Core\Entities\Abstracts\IEntity;
use App\DataAccess\Concrete\Eloquent\Models\IModel;

abstract class ElEntityRepositoryBase implements IEntityRepository
{
    private IModel $_model;

    /**
     * @param IModel $model
     */
    public function __construct(IModel $model)
    {
        $this->_model = $model;
    }

    /**
     * @param array|null $filter
     * @return array
     */
    public function GetAll($filter = null): array
    {
        $models = $this->_model::where($filter)->get();
        $entities = [];
        foreach ($models as $model) {
            $entity = $model->toEntity();
            $entities[] = $entity;
        }
        return $entities;
    }

    /**
     * @param array $filter
     * @return IEntity
     */
    public function Get($filter): IEntity
    {
        $model = $this->_model::where($filter)->first();
        return $model->toEntity();
    }

    /**
     * @param IEntity $entity
     */
    public function Add(IEntity $entity): void
    {
        $this->_model::create((array)$entity);
    }

    /**
     * @param $id
     * @param IEntity $updatedEntity
     */
    public function Update($id, IEntity $updatedEntity): void
    {
        $entity = $this->GetById($id);
        $this->_model::where((array)$entity)->update((array)$updatedEntity);
    }

    /**
     * @param $id
     * @return IEntity
     */
    public function GetById($id): IEntity
    {
        $model = $this->_model::where($this->_model->getKeyName(), $id)->first();
        return $model->toEntity();
    }

    /**
     * @param $id
     */
    public function Delete($id): void
    {
        $this->_model::where($this->_model->getKeyName(), $id)->delete();
    }
}
