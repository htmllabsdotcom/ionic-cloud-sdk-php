<?php

namespace Ionic\Users\Models;

class GithubUserDetails extends UserDetails {
    var $github_id;

    function __construct(array $array) {
        $this->github_id = $array['github_id'];
        parent::__construct($array);
    }

    static function isType($array) {
        return isset($array['github_id']);
    }
}