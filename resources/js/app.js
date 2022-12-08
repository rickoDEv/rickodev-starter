import './bootstrap';
import Alpine from 'alpinejs';
import AlpineFloatingUI from '@awcodes/alpine-floating-ui'
import Focus from '@alpinejs/focus'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'
Alpine.plugin(Focus)
Alpine.plugin(AlpineFloatingUI)
Alpine.plugin(NotificationsAlpinePlugin)

window.Alpine = Alpine;

import './../../vendor/power-components/livewire-powergrid/dist/powergrid'

Alpine.start();
