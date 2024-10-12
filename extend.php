<?php

/*
 * This file is part of gerardwalace/flarum-react-zoom-pan-pitch.
 *
 * Copyright (c) 2024 Gerard Walace.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace GerardWalace\FlarumReactZoomPanPitch;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js'),
        
    
    
];
