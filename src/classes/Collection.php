<?php 

class Collection implements Iterator, Countable
{
    protected $repo;
    public $collection;
    
    public function __construct(RepositoryInterface $repo, $id = null, $field = 'id') {

        $this->repo = $repo;

        if (!empty($id)) {
             $this->collection = $this->repo->find('friends', $id, $field);
        } else {
            $this->collection = $this->repo->all('friends');
        }

    }

}