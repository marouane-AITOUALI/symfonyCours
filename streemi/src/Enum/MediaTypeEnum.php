<?php

namespace App\Enum;

enum MediaTypeEnum: string
{
    case VIDEO = 'video';
    case AUDIO = 'audio';
    case IMAGE = 'image';
    case DOCUMENT = 'document';
    case OTHER = 'other';
}

?>