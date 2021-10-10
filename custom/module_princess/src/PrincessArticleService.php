<?php

namespace Drupal\module_princess;

use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Entity\EntityManager;
/***
 * our pricess article service class
 */

 class PrincessArticleService{
    /**
     * method for getting articles, regarding princess
     */
    private $entityQuery;
    private $entityManager;
    public function __construct(QueryFactory $entityQuery,EntityManager $entityManager ){
        $this->entityQuery = $entityQuery;
        $this->entityManager = $entityManager;
    }

     public function getPrincessArticles(){

         $articlesNids = $this->entityQuery->get('node')->condition('type' , 'article')->execute();
           return $this->entityManager->getStorage('node')->loadMultiple($articlesNids);
         
         
     }
      
 }
