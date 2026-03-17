<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum TicketStatus: string implements HasLabel, HasColor {
    case Abierto = 'abierto';
    case EnRevision = 'en_revision';
    case Desarrollo = 'desarrollo';
    case Pruebas = 'pruebas';
    case Cerrado = 'cerrado';

    public function getLabel(): ?string {
        return match($this) {
            self::Abierto => 'Abierto',
            self::EnRevision => 'En Revisión',
            self::Desarrollo => 'Desarrollo',
            self::Pruebas => 'Pruebas',
            self::Cerrado => 'Cerrado',
        };
    }

    public function getColor(): string | array | null {
        return match($this) {
            self::Abierto => 'gray',
            self::EnRevision => 'info',
            self::Desarrollo => 'warning',
            self::Pruebas => 'primary',
            self::Cerrado => 'success',
        };
    }
}