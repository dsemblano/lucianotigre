import Alpine from 'alpinejs'
import focus from '@alpinejs/focus' // For better accessibility

// Initialize Alpine
window.Alpine = Alpine
Alpine.start()

// animate
const element = document.querySelector('h1');
element.classList.add('animate__animated', 'animate__flipInX');


import.meta.glob([
  '../images/**',
  '../fonts/**',
]);
