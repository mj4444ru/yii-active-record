<?php

declare(strict_types=1);

namespace Yii\ActiveRecord;

//phpcs:disable
enum ActiveRecordState
{
    case New;
    case Loaded;
    case Virtual;
    case Deleted;
}
