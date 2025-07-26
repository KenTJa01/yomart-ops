import './bootstrap';
import 'flowbite';
import 'preline';
import 'datatables.net';
import 'datatables.net-dt/css/dataTables.dataTables.css';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    window.HSStaticMethods?.autoInit?.();
});

