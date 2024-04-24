<?php

namespace Psd\FileStructure\LayerMask\Layer\Info\LayerInfo\SmartObject;

use Psd\FileStructure\LayerMask\Layer\Info\LayerInfo\LayerInfoBase;

class SmartObject extends LayerInfoBase
{
    protected function parseData(int $length): void
    {
        $this->file->ffseek(32, true);
        $this->data = [
            'key' => str_replace('IdntTEXT%', '', $this->file->readString(
                91
            ))
        ];
    }

    public function export(): string
    {
        return $this->getData();
    }

}
