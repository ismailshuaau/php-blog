<?php

interface shareableInterface
{
    public function twitter($entity);
    public function facebook($entity);
    public function email($entity);
}