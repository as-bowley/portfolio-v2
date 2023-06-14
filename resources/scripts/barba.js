import barba from '@barba/core';
import gsap from 'gsap';

export default function initBarba() {
  barba.init({
    transitions: [
      {
        name: 'fade',
        once({ next }) {
          gsap.set(next.container, { opacity: 1 });
        },
        leave(data) {
          return new Promise((resolve) => {
            gsap.to('#loader', {
              duration: 0.5,
              left: '0%',
              display: 'block',
              onComplete: () => {
                // Hide the old content
                gsap.set(data.current.container, { display: 'none' });
                resolve();
              },
            });
          });
        },
        enter(data) {
          return new Promise((resolve) => {
            gsap.set(data.next.container, { opacity: 0, display: 'block' });

            gsap.to('#loader', {
              duration: 0.5,
              left: '100%',
              onComplete: () => {
                // Show the new content
                gsap.to(data.next.container, {
                  opacity: 1,
                  delay: 0.5,
                  onComplete: resolve,
                });
              },
            });
          });
        },
      },
      // Rest of your transitions...
    ],
    transitionsEnabled: true, // Enable transitions for all pages
  });
}
