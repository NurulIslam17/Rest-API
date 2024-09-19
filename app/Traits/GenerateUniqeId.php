<?php

namespace App\Traits;

use App\Models\Post;
use Carbon\Carbon;

use function PHPUnit\Framework\isEmpty;

trait GenerateUniqeId
{

    public function generateUniqueId($prefix = "PI", $modelName = "")
    {
        $currentMonth = Carbon::now()->format('m');
        $currentYear = Carbon::now()->format('Y');
        $currentMonthYear = $currentMonth . $currentYear;
        $firstRecord = "1";

        $latestId = Post::whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $currentMonth)
            ->orderBy('id', 'desc')
            ->first();

        if ($latestId == null) {;
            return $prefix . $firstRecord . $currentMonth . $currentYear;
        }
        $paddedId = str_pad($latestId->po_id, 6, '0', STR_PAD_RIGHT);
        $lastSixDigits = substr($paddedId, -6);

        if ($currentMonthYear == $lastSixDigits) {
            $data = substr($latestId->po_id, 2, -6);
            $firstRecord = $data + 1;
        } else {
            $firstRecord = "1";
        }
        return $prefix . $firstRecord . $currentMonth . $currentYear;
    }
}
