<?php

    /**
     * User class for sessions and profiles
     * @author Dan Foad
     * @version 0.0.1
     */

     class User {

         // Properties
         public $id = null;             // User Id
         public $username = null;       // User's username
         public $password = null;       // User's encrypted password
         public $email = null;          // User's email address
         public $lastactive = null;     // Last active state
         public $visible = null;        // Whether set to visible or not
         public $avatarref = null;      // Img ref of user's avatar

     }
