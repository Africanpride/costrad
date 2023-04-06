import './bootstrap';
import('preline');

import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';


import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

window.FilePond = FilePond;

const inputElement = document.querySelector('input[type="file"].filepond');

const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

FilePond.registerPlugin(FilePondPluginImagePreview);

FilePond.create(inputElement).setOptions({
    server: {
        process: './uploads/process',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        }
    },
    allowMultiple: true,
});
