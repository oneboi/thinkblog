<?php
return [
    //--------------------------------------------------------------------------
    // UI

    // Common
    'EXCLAMATION_MARK'          => '!',
    'COLON'                     => ':',
    'VERION'                    => 'Version',
    'NO_DATA_FOUND'             => 'No data found',
    'SERIAL_NO'                 => 'S/N',
    'ACTION'                    => 'Action',
    'CHANGE'                    => 'Change',
    'DELETE'                    => 'Delete',
    'CONFIRM_TITLE'             => 'Confirmation',
    'CONFIRM_TO_DELETE'         => 'Are you sure you wan to delete this {$model}?',
    'SUBMIT'                    => 'Submit',
    'SAVE'                      => 'Save',
    'CANCEL'                    => 'Cancel',

    // Application
    'APPLICATION_NAME'          => 'ThinkPHP Blog',
    'APPLICATION_SHORT_DESC'    => 'ThinkPHP Development Demo Application',

    // Menu
    'MENU_POSTS'        => 'Posts',
    'SWITCH_LANGUAGE'   => 'Language',
    'CHINESE'           => 'Chinese',
    'ENGLISH'           => 'English',

    // Footer
    'WELCOME_TO_USE'    => 'Welcome to developing with',

    // Home page
    'TECH_DESC'                 => 'Demonstrates the following techniques:',
    'REMOVE_ENTRY_IN_URL'       => 'Remove entry file {$entry_file} from URL',
    'DEV_USING_DOCKER'          => 'Dockerize local development environment',
    'CONFIG_IN_ENV'             => 'Externalize configuration in environment',
    'BASIC_CRUD'                => 'Basic CRUD',
    'BUILD_WITH_LARAVEL_MIX'    => 'Build frontend assets with Laravel Mix',
    'USER_AUTHENTICATION'       => 'User Authentication/Authorization',
    'USER_AUTHORIZATION'        => 'User Authentication: whether the user is legal user of the system, including registration, login, logout and forget password, etc.',
    'USER_AUTH'                 => 'User Authorization：whether the user has the permission to make an operation, for example, whether accessible to a page/function, whether can read/write/delete a piece of data, etc.',
    'MULTI_LANGUAGES'           => 'Internationalization/Localization (I18n/L10n)',
    'MODEL_ASSOCIATION'         => 'Model Assoication: Associations between models (one to one, one to many, belongs to, and many to many)',
    'WEB_API'                   => 'Web API',
    'ANGULARJS_1_CLIENT'        => 'AngularJS 1 Client',
    'USING_HTTPS'               => 'Using HTTPS',
    'SOURCE_DESC'               => 'You can access the <a href="https://github.com/blackpuppy/thinkblog">source code</a> of this demo.',
    'WELCOME_FEEDBACK'          => 'Any <a href="https://github.com/blackpuppy/thinkblog/issues/new">feedback or suggestions</a> are welcome!',

    // User
    'SIGN_UP'           => 'Sign Up',
    'SIGNUP'            => 'Sign Up',
    'LOGIN'             => 'Log In',
    'LOGOUT'            => 'Log Out',
    'USER_NAME'         => 'User Name',
    'PASSWORD'          => 'Password',
    'CONFIRM_PASSWORD'  => 'Confirm Password',
    'EMAIL'             => 'Email',
    'FULL_NAME'         => 'Full Name',
    'FIRST_NAME'        => 'First Name',
    'LAST_NAME'         => 'Last Name',
    'RECAPTCHA'         => 'reCAPTCHA',
    'REMEMBER_ME'       => 'Remember Me',
    'FORGET_PASSWORD'   => 'Forget Password',

    // Post
    'POST'              => 'Post',
    'POST_LISTING'      => 'Posts',
    'CREATE_POST'       => 'New Post',
    'CHANGE_POST'       => 'Cange Post',
    'TITLE'             => 'Title',
    'CONTENT'           => 'Content',

    //--------------------------------------------------------------------------
    // Validation

    // Validation Rules
    // 'REQUIRED'                  => '{$field}必须填写！',

    // Validation - Post
    'TITLE_REQUIRED'            => 'Title is required!',
    'CONTENT_REQUIRED'          => 'Content is required!',

    // validation - User
    'NAME_REQUIRED'             => 'User name is required!',
    'NAME_DUPLICATE'            => 'The user name is already used!  Please change the user name.',
    'PASSWORD_REQUIRED'         => 'Password is required!',
    'PASSWORD_LENGTH'           => 'First name must be 5-72 characters long!',
    'CONFIRM_PASSWORD_DISMATCH' => 'Confirm password does not match!',
    'FIRST_NAME_LENGTH'         => 'First name must be 1-255 characters long!',
    'EMAIL_INVALID'             => 'Invalid email!',
    'EMAIL_DUPLICATE'           => 'The email is already used!  Please change the email.',

    //--------------------------------------------------------------------------
    // Controller

    // Post
    'SAVE_POST_SUCCESS'     => 'Post saved successfully!',
    'SAVE_POST_FAILURE'     => 'Post failed to save!',
    'POST_NOT_FOUND'        => 'Post not found!',
    'DELETE_POST_SUCCESS'   => 'Post deleted successfully!',
    'DELETE_POST_FAILURE'   => 'Post failed to delete!',

    // User
    'SIGNUP_USER_SUCCESS'   => 'User saved successfully!',
    'SIGNUP_USER_FAILURE'   => 'User failed to save!',
    'LOGIN_USER_SUCCESS'    => 'User logged in successfully!',
    'LOGIN_USER_FAILURE'    => 'Incorrect user name or password!',
    'USER_NOT_FOUND'        => 'User not found!',
    'DELETE_USER_SUCCESS'   => 'User deleted successfully!',
    'DELETE_USER_FAILURE'   => 'User failed to delete!',

    //--------------------------------------------------------------------------
    // Authentication & Authorization
    'UNAUTHORIZED'  => 'Unauthorized!',
];
