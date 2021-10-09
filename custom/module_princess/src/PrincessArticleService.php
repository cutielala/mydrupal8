<?php

namespace Drupal\module_princess;

/***
 * our pricess article service class
 */

 class PrincessArticleService{
    /**
     * method for getting articles, regarding princess
     */
     public function getPrincessArticles(){
         $articles = [ '"Snow White" is a 19th-century German fairy tale that is today known widely across the Western world.'  , '“Beauty and the Beast” is the fantastic journey of Belle, a bright, beautiful and independent young woman who is taken prisoner by a beast in his castle.' ];

         return $articles;
     }
      
 }
