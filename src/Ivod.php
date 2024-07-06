<?php

namespace Openfun\ChewingCow;

class Ivod {

    public static function getReason($meet_name)
    {
        $meet_name = trim($meet_name);
        $start_idx = mb_strpos($meet_name, "（事由：");
        $end_idx = mb_strrpos($meet_name, "）");
        $reason = mb_substr($meet_name, $start_idx + 4, $end_idx - ($start_idx + 4));
        $reason = preg_replace('/【.*?】/', '', $reason);
        $reason = trim($reason);
        return $reason;
    }
}
