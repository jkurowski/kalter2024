<?php

if (!function_exists('getWindowDirections')) {
    function getWindowDirections($windowField)
    {
        $directions = [
            '1' => 'Północ',
            '2' => 'Południe',
            '3' => 'Wschód',
            '4' => 'Zachód',
            '5' => 'Północny wschód',
            '6' => 'Północny zachód',
            '7' => 'Południowy wschód',
            '8' => 'Południowy zachód',
        ];

        if (empty($windowField)) {
            return null;
        }

        // Convert to array if comma-separated string
        $selected = is_array($windowField) ? $windowField : explode(',', $windowField);

        return collect($selected)
            ->map(fn($item) => $directions[trim($item)] ?? null)
            ->filter()
            ->implode(', ');
    }
}
