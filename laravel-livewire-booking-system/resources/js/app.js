import './bootstrap';

import picker from './picker';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

Alpine.plugin(picker);


Livewire.start();
