<?php

use App\Helpers\PropertyAreaTypes;

if (! function_exists('propertyStatus')) {
    /**
     * Status lokalu odmieniony zgodnie z rodzajem gramatycznym typu lokalu
     * (mieszkanie: dostępne, komórka lokatorska: dostępna, lokal usługowy: dostępny).
     */
    function propertyStatus(int $status, ?int $type = null): string
    {
        switch ($type) {
            case PropertyAreaTypes::STORAGE:
                $forms = [1 => 'Dostępna', 3 => 'Sprzedana', 4 => 'Wynajęta'];
                break;
            case PropertyAreaTypes::GARDEN:
            case PropertyAreaTypes::SHOP:
                $forms = [1 => 'Dostępny', 3 => 'Sprzedany', 4 => 'Wynajęty'];
                break;
            default:
                $forms = [1 => 'Dostępne', 3 => 'Sprzedane', 4 => 'Wynajęte'];
        }
        $forms[2] = 'Rezerwacja';

        return $forms[$status] ?? '';
    }
}
