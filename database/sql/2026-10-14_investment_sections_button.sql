-- Sekcje opisu inwestycji: przycisk (nazwa + adres) pod treścią sekcji
-- Uruchomić raz na bazie serwera (i lokalnie).

ALTER TABLE `investment_sections`
    ADD COLUMN `button_name` VARCHAR(190) NULL DEFAULT NULL AFTER `code`,
    ADD COLUMN `button_url` VARCHAR(255) NULL DEFAULT NULL AFTER `button_name`;
