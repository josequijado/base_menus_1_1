<?php

namespace App\Services;

class ReadGroupsAndOptions {
    public function options()
    {
        $groupsAndOptions = null;
        if (auth()->user()) {
            $groupsAndOptions = auth()->user()->groupsAndOptions;
            $groupsAndOptions = $groupsAndOptions->hierarchy();
        }

        return $groupsAndOptions;
    }
}
