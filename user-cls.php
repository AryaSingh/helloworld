<?php
  if( !class_exists( 'User' ) ){
    class User{
      $user_id = null;
      public function __construct( $user_id ){
        $this->user_id = $user_id;
      }
    }
  }
