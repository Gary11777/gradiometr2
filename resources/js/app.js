import './bootstrap';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

Alpine.plugin(intersect);
window.Alpine = Alpine;

document.addEventListener('alpine:init', () => {
    Alpine.data('obfuscatedPhone', (parts) => ({
        parts: parts,
        get displayPhone() {
            return this.parts.join('');
        },
        get telLink() {
            return this.parts.join('').replace(/[\s\-]/g, '');
        },
        call() {
            window.location.href = 'tel:' + this.telLink;
        }
    }));
});

Alpine.start();
